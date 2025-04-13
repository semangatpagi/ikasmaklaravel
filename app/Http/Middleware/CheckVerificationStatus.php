<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckVerificationStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->user()) {
            return redirect()->route('login');
        }

        $user = $request->user();
        $path = $request->path();

        // Jika user belum verifikasi email
        if (!$user->hasVerifiedEmail()) {
            return redirect()->route('verification.notice');
        }

        // Jika user sudah diverifikasi admin
        if ($user->isAdminVerified()) {
            // Jika mencoba akses halaman profile, redirect ke dashboard
            if ($path === 'profile') {
                return redirect()->route('dashboard');
            }
        } 
        // Jika user sudah verifikasi email tapi belum diverifikasi admin
        else {
            // Jika mencoba akses halaman selain profile, redirect ke profile
            if ($path !== 'profile' && $path !== 'email/verify' && $path !== 'email/verification-notification') {
                return redirect()->route('profile');
            }
        }

        return $next($request);
    }
}
