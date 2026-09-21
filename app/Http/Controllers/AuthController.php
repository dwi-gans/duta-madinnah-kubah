<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{

    public function login(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        try {
            if (!Auth::attempt($request->only('email', 'password'))) {

                throw ValidationException::withMessages([
                    'email' => 'Invalid credentials',
                ]);
            }

            $request->session()->regenerate();

            return redirect()->intended(route('dashboard', absolute: false));
        } catch (ValidationException $e) {
            throw $e;
        } catch (\Throwable $e) {
            return back()->withInput()->withErrors([
                'email' => 'Terjadi kesalahan sistem. Silakan coba lagi.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
