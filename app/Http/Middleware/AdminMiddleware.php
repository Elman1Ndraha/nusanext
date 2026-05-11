<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Tambahkan import Auth facade
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login
        if (!Auth::check()) { // Gunakan Auth::check() untuk cek login
            return redirect('/login'); // Redirect ke login jika belum login
        }

        // Cek apakah user adalah admin
        if (Auth::user()->role !== 'admin') { // Cek langsung role admin
            abort(403, 'Akses ditolak. Hanya admin yang bisa mengakses.'); // Forbidden jika bukan admin
        }

        return $next($request);
    }
}
