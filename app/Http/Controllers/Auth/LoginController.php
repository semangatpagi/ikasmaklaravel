<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function show()
    {
        return view('auth.login');
    }
    
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            
            // Cek status verifikasi user
            $user = Auth::user();
            
            if ($user->isAdminVerified()) {
                // Jika sudah diverifikasi admin, redirect ke dashboard
                return redirect()->intended(route('dashboard'));
            } else if ($user->hasVerifiedEmail()) {
                // Jika sudah verifikasi email tapi belum diverifikasi admin, redirect ke profile
                return redirect()->intended(route('profile'));
            } else {
                // Jika belum verifikasi email, redirect ke halaman verifikasi
                return redirect()->route('verification.notice');
            }
        }
        
        throw ValidationException::withMessages([
            'email' => __('auth.failed'),
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}