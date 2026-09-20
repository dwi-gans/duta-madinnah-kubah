<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Supabase Project URL
    |--------------------------------------------------------------------------
    | Format: https://<project-id>.supabase.co
    */
    'url' => env('SUPABASE_URL', ''),

    /*
    |--------------------------------------------------------------------------
    | Supabase Service Role Key
    |--------------------------------------------------------------------------
    | Gunakan service_role key (bukan anon key) agar bisa bypass RLS.
    | JANGAN expose key ini ke frontend / client-side.
    */
    'service_role_key' => env('SUPABASE_SERVICE_ROLE_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | Storage Bucket Name
    |--------------------------------------------------------------------------
    */
    'storage_bucket' => env('SUPABASE_STORAGE_BUCKET', 'images'),
];
