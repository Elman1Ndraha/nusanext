<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Untuk request validation
use Illuminate\Support\Facades\Auth; // Untuk autentikasi

class AuthController extends Controller
{
    /**
     * Menampilkan form login
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login'); // View untuk form login
    }

    /**
     * Proses autentikasi login
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard'); // Redirect ke admin dashboard setelah login
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    /**
     * Logout user
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/'); // Redirect ke halaman utama setelah logout
    }
}
