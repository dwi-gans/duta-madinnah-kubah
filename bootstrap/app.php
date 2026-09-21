<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Session\TokenMismatchException;
use Symfony\Component\HttpKernel\Exception\HttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // CSRF token expired / mismatch → redirect kembali ke login
        $exceptions->renderable(function (TokenMismatchException $e, $request) {
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Sesi telah berakhir. Silakan muat ulang halaman.'], 419);
            }

            return redirect()->back()
                ->withInput($request->except('password'))
                ->withErrors(['email' => 'Sesi telah berakhir. Silakan coba login kembali.']);
        });

        // Tangkap semua HTTP error (404, 500, 503 dll) agar tidak tampil kode angka mentah
        $exceptions->renderable(function (HttpException $e, $request) {
            $status = $e->getStatusCode();

            if ($request->expectsJson()) {
                return response()->json([
                    'message' => match ($status) {
                        404 => 'Halaman tidak ditemukan.',
                        403 => 'Akses ditolak.',
                        500 => 'Terjadi kesalahan server.',
                        503 => 'Layanan sedang dalam pemeliharaan.',
                        default => 'Terjadi kesalahan.',
                    },
                ], $status);
            }

            // Untuk error non-JSON, biarkan Laravel pakai views/errors/{status}.blade.php
            return null;
        });
    })->create();
