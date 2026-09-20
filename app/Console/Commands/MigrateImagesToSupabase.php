<?php

namespace App\Console\Commands;

use App\Models\Information;
use App\Models\Portfolio;
use App\Services\SupabaseStorageService;
use Illuminate\Console\Command;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class MigrateImagesToSupabase extends Command
{
    protected $signature   = 'images:migrate-to-supabase';
    protected $description = 'Upload semua gambar lama (local storage) ke Supabase Storage dan update database';

    public function handle(): void
    {
        $baseUrl        = rtrim(config('supabase.url'), '/');
        $serviceRoleKey = config('supabase.service_role_key');
        $bucket         = config('supabase.storage_bucket', 'images');

        if (!$baseUrl || !$serviceRoleKey) {
            $this->error('SUPABASE_URL atau SUPABASE_SERVICE_ROLE_KEY belum diset di .env!');
            return;
        }

        $models = [
            'Portfolio'   => Portfolio::all(),
            'Information' => Information::all(),
        ];

        foreach ($models as $label => $records) {
            $this->info("--- Memproses {$label} ({$records->count()} data) ---");

            foreach ($records as $record) {
                $path = $record->image_path;

                // Skip yang sudah berupa URL Supabase
                if (Str::startsWith($path, 'http')) {
                    $this->line("  [SKIP] #{$record->id} sudah Supabase URL");
                    continue;
                }

                // Cari file di local storage
                $localFile = storage_path("app/public/{$path}");
                if (!file_exists($localFile)) {
                    $this->warn("  [NOT FOUND] #{$record->id} file tidak ada: {$localFile}");
                    continue;
                }

                // Baca file dan upload ke Supabase
                $filename  = Str::uuid() . '.' . pathinfo($localFile, PATHINFO_EXTENSION);
                $mimeType  = mime_content_type($localFile);
                $fileData  = file_get_contents($localFile);

                $response = Http::withoutVerifying()
                    ->withHeaders([
                        'Authorization' => "Bearer {$serviceRoleKey}",
                        'Content-Type'  => $mimeType,
                    ])->withBody($fileData, $mimeType)
                      ->post("{$baseUrl}/storage/v1/object/{$bucket}/{$filename}");

                if ($response->failed()) {
                    $this->error("  [FAIL] #{$record->id} gagal upload: " . $response->body());
                    continue;
                }

                // Buat public URL dan update database
                $newUrl = "{$baseUrl}/storage/v1/object/public/{$bucket}/{$filename}";
                $record->update(['image_path' => $newUrl]);

                $this->info("  [OK] #{$record->id} → {$filename}");
            }
        }

        $this->info('');
        $this->info('Selesai! Semua gambar lama sudah dipindahkan ke Supabase Storage.');
    }
}
