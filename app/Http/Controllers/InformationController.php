<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Services\SupabaseStorageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class InformationController extends Controller
{
    public function index()
    {
        return view('information', [
            'information' => Information::latest()->get(),
        ]);
    }

    public function store(Request $request, SupabaseStorageService $storage)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:5120',
        ], [
            'title.required' => 'Judul wajib diisi!',
            'image.required' => 'Gambar wajib diupload!',
            'image.image'    => 'File yang diupload harus berupa gambar!',
            'image.mimes'    => 'Format gambar harus: JPEG, JPG, PNG, GIF, atau WEBP!',
            'image.max'      => 'Ukuran gambar maksimal 5MB!',
        ]);

        // Prevent duplicate rapid submissions (e.g. user multi-clicked while uploading)
        $recentDuplicate = Information::where('title', $validated['title'])
            ->where('created_at', '>=', now()->subSeconds(20))
            ->first();

        if ($recentDuplicate) {
            return back()->with('success', 'Informasi berhasil ditambahkan!');
        }

        try {
            $imageUrl = $storage->upload($request->file('image'));
        } catch (\Throwable $e) {
            return back()->withInput()->with('error', 'Gagal mengupload gambar. Silakan coba lagi.');
        }

        Information::create([
            'title'       => $validated['title'],
            'description' => $validated['description'] ?? null,
            'image_path'  => $imageUrl,
        ]);

        Cache::forget('home_informations');

        return back()->with('success', 'Informasi berhasil ditambahkan!');
    }

    public function update(Request $request, Information $information, SupabaseStorageService $storage)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:5120',
        ], [
            'title.required' => 'Judul wajib diisi!',
            'image.image'    => 'File yang diupload harus berupa gambar!',
            'image.mimes'    => 'Format gambar harus: JPEG, JPG, PNG, GIF, atau WEBP!',
            'image.max'      => 'Ukuran gambar maksimal 5MB!',
        ]);

        $imageUrl = $information->image_path;

        if ($request->hasFile('image')) {
            try {
                $storage->delete($information->image_path);
                $imageUrl = $storage->upload($request->file('image'));
            } catch (\Throwable $e) {
                return back()->withInput()->with('error', 'Gagal mengupload gambar. Silakan coba lagi.');
            }
        }

        $information->update([
            'title'       => $validated['title'],
            'description' => $validated['description'] ?? null,
            'image_path'  => $imageUrl,
        ]);

        Cache::forget('home_informations');

        return back()->with('success', 'Informasi berhasil diperbarui!');
    }

    public function destroy(Information $information, SupabaseStorageService $storage)
    {
        try {
            $storage->delete($information->image_path);
        } catch (\Throwable $e) {
            // Tetap hapus record dari DB meski Supabase gagal
        }

        $information->delete();

        Cache::forget('home_informations');

        return back()->with('success', 'Informasi berhasil dihapus!');
    }
}
