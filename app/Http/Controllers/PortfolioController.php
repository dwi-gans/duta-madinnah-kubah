<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portfolio', [
            'portfolios' => Portfolio::latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
        ], [
            'title.required' => 'Judul wajib diisi!',
            'description.required' => 'Deskripsi wajib diisi!',
            'image.required' => 'Gambar wajib diupload!',
            'image.image' => 'File yang diupload harus berupa gambar!',
            'image.mimes' => 'Format gambar harus: JPEG, JPG, PNG, GIF, atau WEBP!',
            'image.max' => 'Ukuran gambar maksimal 2MB!',
        ]);

        Portfolio::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image_path' => $request->file('image')->store('images', 'public'),
        ]);

        return back()->with('success', 'Portofolio berhasil ditambahkan!');
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
        ], [
            'title.required' => 'Judul wajib diisi!',
            'description.required' => 'Deskripsi wajib diisi!',
            'image.image' => 'File yang diupload harus berupa gambar!',
            'image.mimes' => 'Format gambar harus: JPEG, JPG, PNG, GIF, atau WEBP!',
            'image.max' => 'Ukuran gambar maksimal 2MB!',
        ]);

        $imagePath = $portfolio->image_path;

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($portfolio->image_path);
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $portfolio->update([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image_path' => $imagePath,
        ]);

        return back()->with('success', 'Portofolio berhasil diperbarui!');
    }

    public function destroy(Portfolio $portfolio)
    {
        Storage::disk('public')->delete($portfolio->image_path);
        $portfolio->delete();

        return back()->with('success', 'Portofolio berhasil dihapus!');
    }
}
