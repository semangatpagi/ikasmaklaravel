<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.auth')]
class Register extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';
    
    // Properti tambahan sesuai form
    public string $nama_panggilan = '';
    public string $angkatan = '';
    public string $tahun_masuk = '';
    public string $tahun_lulus = '';
    public string $alamat_rumah = '';
    public string $provinsi_rumah = '';
    public string $kota_rumah = '';
    public string $whatsapp = '';
    public string $pekerjaan = '';
    public string $perusahaan = '';
    public string $alamat_kantor = '';
    public string $provinsi_kantor = '';
    public string $kota_kantor = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
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
        ]);

        $validated['password'] = Hash::make($validated['password']);
        
        // Ubah 'name' menjadi 'nama_lengkap' untuk sesuai dengan kolom di database
        $validated['nama_lengkap'] = $validated['name'];
        unset($validated['name']);
        
        // Atur role default untuk pengguna baru
        $validated['role'] = 'unverified';

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(route('dashboard', absolute: false), navigate: true);
    }
}
