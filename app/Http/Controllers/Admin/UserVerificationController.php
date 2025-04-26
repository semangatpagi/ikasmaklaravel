<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserVerificationController extends Controller
{
    /**
     * Display a listing of the pending users.
     */
    public function index()
    {
        $pendingUsers = User::whereNull('admin_verified_at')
            ->where('role', 'unverified')
            ->latest()
            ->paginate(10);

        return view('admin.user-verification.index', compact('pendingUsers'));
    }

    /**
     * Display a listing of all users.
     */
    public function allUsers()
    {
        $allUsers = User::latest()->paginate(10);

        return view('admin.user-verification.all-users', compact('allUsers'));
    }

    /**
     * Display the dashboard.
     */
    public function dashboard()
    {
        // Mengambil semua pengguna (bisa difilter sesuai kebutuhan)
        $allUsers = User::select(
            'id', 
            'nama_lengkap', 
            'nama_panggilan', 
            'angkatan', 
            'kota_kantor', 
            'pekerjaan',
            'admin_verified_at',
            'role'
        )->latest()->paginate(15);

        // Data untuk statistik
        $totalAlumni = User::count();
        $pendingUsers = User::whereNull('admin_verified_at')->where('role', 'unverified');
        $verifiedUsers = User::whereNotNull('admin_verified_at')->count();
        $totalAngkatan = User::distinct('angkatan')->whereNotNull('angkatan')->count('angkatan');
        
        // Daftar angkatan untuk filter
        $angkatan_list = User::distinct('angkatan')
            ->whereNotNull('angkatan')
            ->pluck('angkatan')
            ->sort()
            ->values();

        return view('admin.user-verification.dashboard', compact(
            'allUsers', 
            'totalAlumni', 
            'pendingUsers', 
            'verifiedUsers', 
            'totalAngkatan',
            'angkatan_list'
        ));
    }

    /**
     * Show the user detail.
     */
    public function show(User $user)
    {
        return view('admin.user-verification.show', compact('user'));
    }

    /**
     * Approve the user.
     */
    public function approve(User $user)
    {
        if ($user->admin_verified_at) {
            return redirect()->route('admin.user-verification.index')
                ->with('warning', 'Pengguna sudah diverifikasi sebelumnya.');
        }

        $user->admin_verified_at = now();
        $user->role = 'member';
        $user->save();

        // Kirim email notifikasi ke user
        // TODO: Implementasi pengiriman email

        return redirect()->route('admin.user-verification.index')
            ->with('success', 'Pengguna berhasil diverifikasi.');
    }

    /**
     * Reject the user verification.
     */
    public function reject(Request $request, User $user)
    {
        $validated = $request->validate([
            'reason' => 'required|string|max:255',
        ]);

        // Di sini Anda bisa mengirim email ke user dengan alasan penolakan
        // atau menandai user dengan status ditolak
        // TODO: Implementasi pengiriman email

        return redirect()->route('admin.user-verification.index')
            ->with('success', 'Verifikasi pengguna ditolak.');
    }

    /**
     * Set user role.
     */
    public function setRole(Request $request, User $user)
    {
        $validated = $request->validate([
            'role' => 'required|in:member,member_plus,admin,super_admin',
        ]);

        // Hanya Super Admin yang bisa memberikan role Super Admin
        if ($validated['role'] == 'super_admin' && !Auth::user()->isSuperAdmin()) {
            return redirect()->back()
                ->with('error', 'Anda tidak memiliki izin untuk memberikan role Super Admin.');
        }

        $user->role = $validated['role'];
        $user->save();

        return redirect()->back()
            ->with('success', 'Role pengguna berhasil diubah.');
    }

    /**
     * Mark the given user as verified by admin.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify(User $user)
    {
        // Pastikan user memang perlu diverifikasi
        if ($user->email_verified_at && !$user->admin_verified_at && $user->role === 'unverified') {
            $user->role = 'member'; // Ubah role menjadi member
            $user->admin_verified_at = Carbon::now();
            $user->save();

            // Opsional: Kirim notifikasi ke user bahwa akunnya sudah diverifikasi admin
            // Mail::to($user->email)->send(new YourAccountVerifiedByAdmin($user));

            return redirect()->route('admin.users.verify.index')->with('success', 'User '.$user->nama_lengkap.' berhasil diverifikasi.');
        } else {
            return redirect()->route('admin.users.verify.index')->with('error', 'User ini tidak dapat diverifikasi saat ini atau sudah diverifikasi.');
        }
    }

    public function batchVerify(Request $request)
    {
        $userIds = $request->input('user_ids', []);
        
        if (empty($userIds)) {
            return redirect()->back()->with('warning', 'Tidak ada pengguna yang dipilih.');
        }

        $count = User::whereIn('id', $userIds)
            ->update([
                'admin_verified_at' => now(),
                'role' => \DB::raw("CASE WHEN role = 'unverified' THEN 'member' ELSE role END")
            ]);

        return redirect()->back()->with('success', $count . ' pengguna berhasil diverifikasi.');
    }
}
