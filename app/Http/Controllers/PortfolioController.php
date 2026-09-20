<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Services\SupabaseStorageService;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio', [
            'portfolios' => Portfolio::latest()->get(),
        ]);
    }

    public function store(Request $request, SupabaseStorageService $storage)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:5120',
        ], [
            'title.required'       => 'Judul wajib diisi!',
            'description.required' => 'Deskripsi wajib diisi!',
            'image.required'       => 'Gambar wajib diupload!',
            'image.image'          => 'File yang diupload harus berupa gambar!',
            'image.mimes'          => 'Format gambar harus: JPEG, JPG, PNG, GIF, atau WEBP!',
            'image.max'            => 'Ukuran gambar maksimal 5MB!',
        ]);

        $imageUrl = $storage->upload($request->file('image'));

        Portfolio::create([
            'title'       => $validated['title'],
            'description' => $validated['description'],
            'image_path'  => $imageUrl,
        ]);

        return back()->with('success', 'Portofolio berhasil ditambahkan!');
    }

    public function update(Request $request, Portfolio $portfolio, SupabaseStorageService $storage)
    {
        $validated = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'image'       => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:5120',
        ], [
            'title.required'       => 'Judul wajib diisi!',
            'description.required' => 'Deskripsi wajib diisi!',
            'image.image'          => 'File yang diupload harus berupa gambar!',
            'image.mimes'          => 'Format gambar harus: JPEG, JPG, PNG, GIF, atau WEBP!',
            'image.max'            => 'Ukuran gambar maksimal 5MB!',
        ]);

        $imageUrl = $portfolio->image_path;

        if ($request->hasFile('image')) {
            // Hapus gambar lama dari Supabase
            $storage->delete($portfolio->image_path);
            // Upload gambar baru
            $imageUrl = $storage->upload($request->file('image'));
        }

        $portfolio->update([
            'title'       => $validated['title'],
            'description' => $validated['description'],
            'image_path'  => $imageUrl,
        ]);

        return back()->with('success', 'Portofolio berhasil diperbarui!');
    }

    public function destroy(Portfolio $portfolio, SupabaseStorageService $storage)
    {
        $storage->delete($portfolio->image_path);
        $portfolio->delete();

        return back()->with('success', 'Portofolio berhasil dihapus!');
    }
}
