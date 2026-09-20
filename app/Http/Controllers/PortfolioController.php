<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Services\SupabaseStorageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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

        // Prevent duplicate rapid submissions (e.g. user multi-clicked while uploading)
        $recentDuplicate = Portfolio::where('title', $validated['title'])
            ->where('created_at', '>=', now()->subSeconds(20))
            ->first();

        if ($recentDuplicate) {
            return back()->with('success', 'Portofolio berhasil ditambahkan!');
        }

        $imageUrl = $storage->upload($request->file('image'));

        Portfolio::create([
            'title'       => $validated['title'],
            'description' => $validated['description'],
            'image_path'  => $imageUrl,
        ]);

        Cache::forget('home_portfolios');

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
            $storage->delete($portfolio->image_path);
            $imageUrl = $storage->upload($request->file('image'));
        }

        $portfolio->update([
            'title'       => $validated['title'],
            'description' => $validated['description'],
            'image_path'  => $imageUrl,
        ]);

        Cache::forget('home_portfolios');

        return back()->with('success', 'Portofolio berhasil diperbarui!');
    }

    public function destroy(Portfolio $portfolio, SupabaseStorageService $storage)
    {
        $storage->delete($portfolio->image_path);
        $portfolio->delete();

        Cache::forget('home_portfolios');

        return back()->with('success', 'Portofolio berhasil dihapus!');
    }
}
