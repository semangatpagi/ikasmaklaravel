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
        $usersToVerify = User::whereNotNull('email_verified_at')
                                ->whereNull('admin_verified_at')
                                ->where('role', 'unverified')
                                ->orderBy('created_at', 'asc')
                                ->paginate(15);

        return view('admin.verify-users', compact('usersToVerify'));
    }

    /**
     * Display a listing of all users.
     */
    public function allUsers()
    {
        $users = User::orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.user-verification.all-users', compact('users'));
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
}
