<?php

namespace App\Http\Controllers;

use App\Models\Information;
use App\Services\SupabaseStorageService;
use Illuminate\Http\Request;

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
            'title.required'  => 'Judul wajib diisi!',
            'image.required'  => 'Gambar wajib diupload!',
            'image.image'     => 'File yang diupload harus berupa gambar!',
            'image.mimes'     => 'Format gambar harus: JPEG, JPG, PNG, GIF, atau WEBP!',
            'image.max'       => 'Ukuran gambar maksimal 5MB!',
        ]);

        $imageUrl = $storage->upload($request->file('image'));

        Information::create([
            'title'       => $validated['title'],
            'description' => $validated['description'] ?? null,
            'image_path'  => $imageUrl,
        ]);

        return back()->with('success', 'Informasi berhasil ditambahkan!');
    }

    public function update(Request $request, Information $information, SupabaseStorageService $storage)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:5120',
        ], [
            'title.required'  => 'Judul wajib diisi!',
            'image.image'     => 'File yang diupload harus berupa gambar!',
            'image.mimes'     => 'Format gambar harus: JPEG, JPG, PNG, GIF, atau WEBP!',
            'image.max'       => 'Ukuran gambar maksimal 5MB!',
        ]);

        $imageUrl = $information->image_path;

        if ($request->hasFile('image')) {
            // Hapus gambar lama dari Supabase
            $storage->delete($information->image_path);
            // Upload gambar baru
            $imageUrl = $storage->upload($request->file('image'));
        }

        $information->update([
            'title'       => $validated['title'],
            'description' => $validated['description'] ?? null,
            'image_path'  => $imageUrl,
        ]);

        return back()->with('success', 'Informasi berhasil diperbarui!');
    }

    public function destroy(Information $information, SupabaseStorageService $storage)
    {
        $storage->delete($information->image_path);
        $information->delete();

        return back()->with('success', 'Informasi berhasil dihapus!');
    }
}
