<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MembershipPayment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MembershipController extends Controller
{
    /**
     * Display a listing of pending membership payments.
     */
    public function index()
    {
        $pendingPayments = MembershipPayment::where('status', 'pending')
            ->with('user')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.membership.index', compact('pendingPayments'));
    }

    /**
     * Display a listing of all membership payments.
     */
    public function allPayments()
    {
        $payments = MembershipPayment::with(['user', 'verifier'])
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('admin.membership.all-payments', compact('payments'));
    }

    /**
     * Show the payment detail.
     */
    public function show(MembershipPayment $payment)
    {
        $payment->load(['user', 'verifier']);
        
        return view('admin.membership.show', compact('payment'));
    }

    /**
     * Approve the membership payment.
     */
    public function approve(MembershipPayment $payment)
    {
        if ($payment->status !== 'pending') {
            return redirect()->route('admin.membership.index')
                ->with('warning', 'Pembayaran ini sudah diproses sebelumnya.');
        }

        $payment->status = 'verified';
        $payment->verified_by = Auth::id();
        $payment->verified_at = now();
        $payment->save();

        // Update user status to member_plus
        $user = $payment->user;
        $user->role = 'member_plus';
        $user->membership_expiry = $payment->expiry_date;
        $user->save();

        // Kirim email notifikasi ke user
        // TODO: Implementasi pengiriman email

        return redirect()->route('admin.membership.index')
            ->with('success', 'Pembayaran berhasil diverifikasi.');
    }

    /**
     * Reject the membership payment.
     */
    public function reject(Request $request, MembershipPayment $payment)
    {
        $validated = $request->validate([
            'notes' => 'required|string|max:255',
        ]);

        if ($payment->status !== 'pending') {
            return redirect()->route('admin.membership.index')
                ->with('warning', 'Pembayaran ini sudah diproses sebelumnya.');
        }

        $payment->status = 'rejected';
        $payment->verified_by = Auth::id();
        $payment->verified_at = now();
        $payment->notes = $validated['notes'];
        $payment->save();

        // Kirim email notifikasi ke user
        // TODO: Implementasi pengiriman email

        return redirect()->route('admin.membership.index')
            ->with('success', 'Pembayaran ditolak.');
    }

    /**
     * Display members with expiring membership.
     */
    public function expiringMemberships()
    {
        $expiringUsers = User::where('role', 'member_plus')
            ->whereDate('membership_expiry', '<=', now()->addDays(30))
            ->whereDate('membership_expiry', '>=', now())
            ->orderBy('membership_expiry')
            ->paginate(10);

        return view('admin.membership.expiring', compact('expiringUsers'));
    }

    /**
     * Display expired memberships.
     */
    public function expiredMemberships()
    {
        $expiredUsers = User::where('role', 'member_plus')
            ->whereDate('membership_expiry', '<', now())
            ->orderBy('membership_expiry', 'desc')
            ->paginate(10);

        return view('admin.membership.expired', compact('expiredUsers'));
    }

    /**
     * Send reminder to users with expiring membership.
     */
    public function sendReminder(User $user)
    {
        // TODO: Implementasi pengiriman email reminder

        return redirect()->back()
            ->with('success', 'Pengingat berhasil dikirim.');
    }
}
