<?php

namespace App\Http\Controllers;

use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformationController extends Controller
{
    public function index()
    {
        return view('information', [
            'information' => Information::latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
        ], [
            'title.required' => 'Judul wajib diisi!',
            'image.required' => 'Gambar wajib diupload!',
            'image.image' => 'File yang diupload harus berupa gambar!',
            'image.mimes' => 'Format gambar harus: JPEG, JPG, PNG, GIF, atau WEBP!',
            'image.max' => 'Ukuran gambar maksimal 2MB!',
        ]);

        Information::create([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'image_path' => $request->file('image')->store('images', 'public'),
        ]);

        return back()->with('success', 'Informasi berhasil ditambahkan!');
    }

    public function update(Request $request, Information $information)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png,gif,webp|max:2048',
        ], [
            'title.required' => 'Judul wajib diisi!',
            'image.image' => 'File yang diupload harus berupa gambar!',
            'image.mimes' => 'Format gambar harus: JPEG, JPG, PNG, GIF, atau WEBP!',
            'image.max' => 'Ukuran gambar maksimal 2MB!',
        ]);

        $imagePath = $information->image_path;

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($information->image_path);
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $information->update([
            'title' => $validated['title'],
            'description' => $validated['description'] ?? null,
            'image_path' => $imagePath,
        ]);

        return back()->with('success', 'Informasi berhasil diperbarui!');
    }

    public function destroy(Information $information)
    {
        Storage::disk('public')->delete($information->image_path);
        $information->delete();

        return back()->with('success', 'Informasi berhasil dihapus!');
    }
}
