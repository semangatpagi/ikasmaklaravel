<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable implements MustVerifyEmail
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'email',
        'password',
        'angkatan',
        'tahun_masuk',
        'tahun_lulus',
        'alamat_rumah',
        'provinsi_rumah',
        'kota_rumah',
        'whatsapp',
        'pekerjaan',
        'perusahaan',
        'alamat_kantor',
        'provinsi_kantor',
        'kota_kantor',
        'nama_usaha',
        'bidang_usaha',
        'saran',
        'foto',
        'is_active',
        'verification_token',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'admin_verified_at' => 'datetime',
            'password' => 'hashed',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Get the user's initials
     */
    public function initials(): string
    {
        return Str::of($this->nama_lengkap)
            ->explode(' ')
            ->map(fn (string $name) => Str::of($name)->substr(0, 1))
            ->implode('');
    }

    /**
     * Get the membership payments associated with the user.
     */
    public function membershipPayments()
    {
        return $this->hasMany(MembershipPayment::class);
    }

    /**
     * Check if the user is verified by admin
     */
    public function isAdminVerified(): bool
    {
        return !is_null($this->admin_verified_at);
    }

    /**
     * Check if the user is member plus
     */
    public function isMemberPlus(): bool
    {
        return $this->role === 'member_plus' && 
              ($this->membership_expiry === null || $this->membership_expiry >= now()->format('Y-m-d'));
    }

    /**
     * Check if the user is admin
     */
    public function isAdmin(): bool
    {
        return in_array($this->role, ['admin', 'super_admin']);
    }

    /**
     * Check if the user is super admin
     */
    public function isSuperAdmin(): bool
    {
        return $this->role === 'super_admin';
    }
}
