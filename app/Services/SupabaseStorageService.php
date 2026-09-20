<?php

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class SupabaseStorageService
{
    protected string $baseUrl;
    protected string $serviceRoleKey;
    protected string $bucket;

    public function __construct()
    {
        $this->baseUrl        = rtrim(config('supabase.url'), '/');
        $this->serviceRoleKey = config('supabase.service_role_key');
        $this->bucket         = config('supabase.storage_bucket', 'images');
    }

    /**
     * Upload file ke Supabase Storage dengan optimasi kompresi otomatis.
     * Mengembalikan URL publik gambar.
     */
    public function upload(UploadedFile $file): string
    {
        // Kompres & resize gambar otomatis agar upload cepat dan hemat bandwidth
        [$binaryData, $mimeType, $extension] = $this->optimizeImage($file);
        $filename = Str::uuid() . '.' . $extension;

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->serviceRoleKey,
            'Content-Type'  => $mimeType,
        ])->withBody($binaryData, $mimeType)
          ->post("{$this->baseUrl}/storage/v1/object/{$this->bucket}/{$filename}");

        if ($response->failed()) {
            throw new \RuntimeException(
                'Gagal upload ke Supabase Storage: ' . $response->body()
            );
        }

        return $this->getPublicUrl($filename);
    }

    /**
     * Kompres dan optimalkan gambar jika format didukung dan GD aktif.
     * Mengembalikan [binaryData, mimeType, extension].
     */
    protected function optimizeImage(UploadedFile $file): array
    {
        $realPath = $file->getRealPath();
        $mime     = $file->getMimeType();
        $ext      = strtolower($file->getClientOriginalExtension());

        if (!extension_loaded('gd') || !file_exists($realPath)) {
            return [file_get_contents($realPath), $mime, $ext];
        }

        $source = null;
        switch ($mime) {
            case 'image/jpeg':
            case 'image/jpg':
                $source = @imagecreatefromjpeg($realPath);
                break;
            case 'image/png':
                $source = @imagecreatefrompng($realPath);
                break;
            case 'image/webp':
                $source = function_exists('imagecreatefromwebp') ? @imagecreatefromwebp($realPath) : null;
                break;
        }

        if (!$source) {
            return [file_get_contents($realPath), $mime, $ext];
        }

        $origW = imagesx($source);
        $origH = imagesy($source);
        $maxW  = 1600;

        // Resize proporsional jika resolusi melebihi 1600px
        if ($origW > $maxW) {
            $newW   = $maxW;
            $newH   = (int) round(($origH / $origW) * $newW);
            $target = imagecreatetruecolor($newW, $newH);

            imagealphablending($target, false);
            imagesavealpha($target, true);

            imagecopyresampled($target, $source, 0, 0, 0, 0, $newW, $newH, $origW, $origH);
            imagedestroy($source);
            $source = $target;
        }

        // Simpan sebagai WebP (jika didukung) atau JPEG dengan kualitas 82%
        ob_start();
        if (function_exists('imagewebp')) {
            imagealphablending($source, true);
            imagesavealpha($source, true);
            imagewebp($source, null, 82);
            $optimizedData = ob_get_clean();
            imagedestroy($source);

            if ($optimizedData && strlen($optimizedData) > 0) {
                return [$optimizedData, 'image/webp', 'webp'];
            }
        } else {
            imagejpeg($source, null, 82);
            $optimizedData = ob_get_clean();
            imagedestroy($source);

            if ($optimizedData && strlen($optimizedData) > 0) {
                return [$optimizedData, 'image/jpeg', 'jpg'];
            }
        }

        return [file_get_contents($realPath), $mime, $ext];
    }

    /**
     * Hapus file dari Supabase Storage berdasarkan URL publik atau nama file.
     */
    public function delete(string $urlOrPath): void
    {
        $filename = $this->extractFilename($urlOrPath);
        if (!$filename) {
            return;
        }

        Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->serviceRoleKey,
        ])->delete("{$this->baseUrl}/storage/v1/object/{$this->bucket}/{$filename}");
    }

    /**
     * Buat URL publik untuk file di Supabase Storage.
     */
    public function getPublicUrl(string $filename): string
    {
        return "{$this->baseUrl}/storage/v1/object/public/{$this->bucket}/{$filename}";
    }

    /**
     * Ekstrak nama file dari URL publik Supabase atau path relatif lama.
     */
    protected function extractFilename(string $urlOrPath): ?string
    {
        if (Str::startsWith($urlOrPath, 'http')) {
            return basename(parse_url($urlOrPath, PHP_URL_PATH));
        }

        return basename($urlOrPath);
    }
}
