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
     * Upload file ke Supabase Storage.
     * Mengembalikan URL publik gambar.
     */
    public function upload(UploadedFile $file): string
    {
        $extension = $file->getClientOriginalExtension();
        $filename  = Str::uuid() . '.' . $extension;

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->serviceRoleKey,
            'Content-Type'  => $file->getMimeType(),
        ])->withBody(
            file_get_contents($file->getRealPath()),
            $file->getMimeType()
        )->post("{$this->baseUrl}/storage/v1/object/{$this->bucket}/{$filename}");

        if ($response->failed()) {
            throw new \RuntimeException(
                'Gagal upload ke Supabase Storage: ' . $response->body()
            );
        }

        return $this->getPublicUrl($filename);
    }

    /**
     * Hapus file dari Supabase Storage berdasarkan URL publik atau nama file.
     */
    public function delete(string $urlOrPath): void
    {
        // Ekstrak nama file dari full URL maupun path relatif
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
        // Format URL baru: https://xxx.supabase.co/storage/v1/object/public/images/filename.ext
        if (Str::startsWith($urlOrPath, 'http')) {
            return basename(parse_url($urlOrPath, PHP_URL_PATH));
        }

        // Format lama: images/filename.ext (dari storage disk 'public')
        return basename($urlOrPath);
    }
}
