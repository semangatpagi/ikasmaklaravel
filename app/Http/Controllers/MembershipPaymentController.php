<?php

namespace App\Http\Controllers;

use App\Models\MembershipPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MembershipPaymentController extends Controller
{
    /**
     * Display the membership upgrade page.
     */
    public function upgrade()
    {
        // Pastikan user sudah diverifikasi admin
        if (!Auth::user()->isAdminVerified()) {
            return redirect()->route('dashboard')
                ->with('error', 'Anda harus diverifikasi oleh admin terlebih dahulu untuk upgrade keanggotaan.');
        }

        // Cek jika user sudah member plus
        if (Auth::user()->isMemberPlus()) {
            return redirect()->route('dashboard')
                ->with('info', 'Anda sudah menjadi Member+.');
        }

        return view('membership.upgrade');
    }

    /**
     * Show the payment history.
     */
    public function history()
    {
        $payments = MembershipPayment::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('membership.history', compact('payments'));
    }

    /**
     * Show the payment submission form.
     */
    public function create()
    {
        return view('membership.create');
    }

    /**
     * Store the payment submission.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'payment_proof' => 'required|image|max:2048',
        ]);

        // Upload bukti pembayaran
        $path = $request->file('payment_proof')->store('payment_proofs', 'public');

        // Hitung tanggal kedaluwarsa (1 tahun dari sekarang)
        $expiryDate = now()->addYear()->format('Y-m-d');

        // Buat record pembayaran
        $payment = MembershipPayment::create([
            'user_id' => Auth::id(),
            'amount' => 150000, // Contoh jumlah pembayaran
            'expiry_date' => $expiryDate,
            'payment_proof' => $path,
            'status' => 'pending',
        ]);

        return redirect()->route('membership.history')
            ->with('success', 'Bukti pembayaran berhasil dikirim. Pembayaran Anda sedang diproses.');
    }

    /**
     * Show the payment detail.
     */
    public function show(MembershipPayment $payment)
    {
        // Pastikan user hanya bisa melihat pembayarannya sendiri
        if ($payment->user_id !== Auth::id() && !Auth::user()->isAdmin()) {
            abort(403);
        }

        return view('membership.show', compact('payment'));
    }

    /**
     * Cancel the pending payment.
     */
    public function cancel(MembershipPayment $payment)
    {
        // Pastikan user hanya bisa membatalkan pembayarannya sendiri
        if ($payment->user_id !== Auth::id()) {
            abort(403);
        }

        // Pastikan pembayaran masih pending
        if ($payment->status !== 'pending') {
            return redirect()->route('membership.history')
                ->with('error', 'Pembayaran ini tidak dapat dibatalkan karena sudah diproses.');
        }

        // Hapus bukti pembayaran
        if ($payment->payment_proof) {
            Storage::disk('public')->delete($payment->payment_proof);
        }

        // Hapus record pembayaran
        $payment->delete();

        return redirect()->route('membership.history')
            ->with('success', 'Pembayaran berhasil dibatalkan.');
    }
}
