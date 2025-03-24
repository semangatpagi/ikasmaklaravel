<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisterController extends Controller
{
    /**
     * Tampilkan form pendaftaran
     */
    public function show()
    {
        return view('auth.register');
    }

    /**
     * Proses pendaftaran user baru
     */
    public function register(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_lengkap' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'nama_panggilan' => ['nullable', 'string', 'max:100'],
            'angkatan' => ['required', 'string', 'max:20'],
            'tahun_masuk' => ['required', 'string', 'max:4'],
            'tahun_lulus' => ['required', 'string', 'max:4'],
            'alamat_rumah' => ['nullable', 'string'],
            'provinsi_rumah' => ['nullable', 'string', 'max:100'],
            'kota_rumah' => ['nullable', 'string', 'max:100'],
            'whatsapp' => ['required', 'string', 'max:20'],
            'pekerjaan' => ['nullable', 'string', 'max:100'],
            'perusahaan' => ['nullable', 'string', 'max:100'],
            'alamat_kantor' => ['nullable', 'string'],
            'provinsi_kantor' => ['nullable', 'string', 'max:100'],
            'kota_kantor' => ['nullable', 'string', 'max:100'],
            'nama_usaha' => ['nullable', 'string', 'max:100'],
            'bidang_usaha' => ['nullable', 'string', 'max:100'],
            'saran' => ['nullable', 'string'],
        ]);

        // Hash password
        $validated['password'] = Hash::make($validated['password']);
        
        // Atur role default untuk pengguna baru
        $validated['role'] = 'unverified';

        // Handle file upload jika ada foto
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $filename = time() . '.' . $foto->getClientOriginalExtension();
            $foto->storeAs('public/fotos', $filename);
            $validated['foto'] = 'fotos/' . $filename;
        }

        // Buat user baru
        $user = User::create($validated);

        // Debug - tampilkan informasi pengguna yang dibuat
        \Log::info('User created:', ['user_id' => $user->id, 'data' => $validated]);

        // Kirim event registrasi
        event(new Registered($user));

        // Login user baru
        Auth::login($user);

        // Redirect ke halaman verifikasi email, bukan dashboard
        return redirect(route('verification.notice'));
    }
} 