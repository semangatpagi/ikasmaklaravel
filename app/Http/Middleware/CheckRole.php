<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        if (!$request->user()) {
            return redirect()->route('login');
        }

        // Cek jika user belum verifikasi email
        if (is_null($request->user()->email_verified_at)) {
            return redirect()->route('verification.notice');
        }

        // Cek role
        $roleHierarchy = [
            'unverified' => 0,
            'member' => 1,
            'member_plus' => 2,
            'admin' => 3,
            'super_admin' => 4
        ];

        // Cek apakah user punya role yang cukup untuk akses
        $userRoleLevel = $roleHierarchy[$request->user()->role] ?? 0;
        $requiredRoleLevel = $roleHierarchy[$role] ?? 0;

        if ($userRoleLevel < $requiredRoleLevel) {
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }

        // Khusus untuk member, cek apakah sudah diverifikasi oleh admin
        if ($role != 'unverified' && is_null($request->user()->admin_verified_at)) {
            return redirect()->route('waiting-approval');
        }

        return $next($request);
    }
}
