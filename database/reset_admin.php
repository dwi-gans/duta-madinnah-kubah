<?php

require __DIR__ . '/../vendor/autoload.php';
$app = require_once __DIR__ . '/../bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Hash;

$user = User::where('email', 'admin@example.com')->first();
if (!$user) {
    $user = new User();
    $user->name = 'Admin';
    $user->email = 'admin@example.com';
}
$user->password = Hash::make('admin12345');
$user->save();

echo "ADMIN_PASSWORD_UPDATED_TO_admin12345\n";
