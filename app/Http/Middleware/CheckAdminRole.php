<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Periksa apakah pengguna sudah login dan memiliki peran 'admin' atau 'super_admin'
        if (!Auth::check() || !Auth::user()->isAdmin()) { // Menggunakan method isAdmin() dari model User
            // Jika tidak, redirect ke halaman lain (misal: home) atau tampilkan error 403
            // abort(403, 'Unauthorized action.');
            return redirect('/')->with('error', 'Anda tidak memiliki hak akses untuk halaman ini.');
        }

        return $next($request);
    }
}
