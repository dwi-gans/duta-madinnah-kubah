<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $guarded = [];

    /**
     * Kembalikan URL gambar yang bisa digunakan langsung di <img src>.
     * Mendukung format lama (path relatif) maupun format baru (full Supabase URL).
     */
    public function getImageUrlAttribute(): string
    {
        if (!$this->image_path) {
            return asset('img/placeholder.png');
        }

        // Sudah berupa full URL (format baru dari Supabase)
        if (str_starts_with($this->image_path, 'http')) {
            return $this->image_path;
        }

        // Format lama: "images/filename.jpg" → pakai storage symlink
        return asset('storage/' . $this->image_path);
    }
}
