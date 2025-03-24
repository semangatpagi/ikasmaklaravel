<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/accordion', function () {
    return view('accordion');
})->name('accordion');

Route::get('/carousel', function () {
    return view('carousel');
})->name('carousel');

Route::get('/modal', function () {
    return view('modal');
})->name('modal');

Route::get('/collapse', function () {
    return view('collapse');
})->name('collapse');

Route::get('/dial', function () {
    return view('dial');
})->name('dial');

Route::get('/dismiss', function () {
    return view('dismiss');
})->name('dismiss');

Route::get('/drawer', function () {
    return view('drawer');
})->name('drawer');

Route::get('/dropdown', function () {
    return view('dropdown');
})->name('dropdown');

Route::get('/popover', function () {
    return view('popover');
})->name('popover');

Route::get('/tooltip', function () {
    return view('tooltip');
})->name('tooltip');

Route::get('/input-counter', function () {
    return view('input-counter');
})->name('input-counter');

Route::get('/tabs', function () {
    return view('tabs');
})->name('tabs');

Route::get('/datepicker', function () {
    return view('datepicker');
})->name('datepicker');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Halaman menunggu approval admin
Route::view('waiting-approval', 'waiting-approval')
    ->middleware(['auth', 'verified'])
    ->name('waiting-approval');

// Route untuk dashboard admin
Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    
    // User Verification Routes
    Route::prefix('user-verification')->name('user-verification.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\UserVerificationController::class, 'index'])->name('index');
        Route::get('/all', [App\Http\Controllers\Admin\UserVerificationController::class, 'allUsers'])->name('all-users');
        Route::get('/{user}', [App\Http\Controllers\Admin\UserVerificationController::class, 'show'])->name('show');
        Route::post('/{user}/approve', [App\Http\Controllers\Admin\UserVerificationController::class, 'approve'])->name('approve');
        Route::post('/{user}/reject', [App\Http\Controllers\Admin\UserVerificationController::class, 'reject'])->name('reject');
        Route::post('/{user}/set-role', [App\Http\Controllers\Admin\UserVerificationController::class, 'setRole'])->name('set-role');
    });
    
    // Membership Management Routes
    Route::prefix('membership')->name('membership.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\MembershipController::class, 'index'])->name('index');
        Route::get('/all', [App\Http\Controllers\Admin\MembershipController::class, 'allPayments'])->name('all-payments');
        Route::get('/expiring', [App\Http\Controllers\Admin\MembershipController::class, 'expiringMemberships'])->name('expiring');
        Route::get('/expired', [App\Http\Controllers\Admin\MembershipController::class, 'expiredMemberships'])->name('expired');
        Route::get('/{payment}', [App\Http\Controllers\Admin\MembershipController::class, 'show'])->name('show');
        Route::post('/{payment}/approve', [App\Http\Controllers\Admin\MembershipController::class, 'approve'])->name('approve');
        Route::post('/{payment}/reject', [App\Http\Controllers\Admin\MembershipController::class, 'reject'])->name('reject');
        Route::post('/send-reminder/{user}', [App\Http\Controllers\Admin\MembershipController::class, 'sendReminder'])->name('send-reminder');
    });
});

// Route untuk Member+ Management
Route::middleware(['auth', 'verified'])->prefix('membership')->name('membership.')->group(function () {
    Route::get('/upgrade', [App\Http\Controllers\MembershipPaymentController::class, 'upgrade'])->name('upgrade');
    Route::get('/history', [App\Http\Controllers\MembershipPaymentController::class, 'history'])->name('history');
    Route::get('/create', [App\Http\Controllers\MembershipPaymentController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\MembershipPaymentController::class, 'store'])->name('store');
    Route::get('/{payment}', [App\Http\Controllers\MembershipPaymentController::class, 'show'])->name('show');
    Route::delete('/{payment}', [App\Http\Controllers\MembershipPaymentController::class, 'cancel'])->name('cancel');
});

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');
    
    // Route verifikasi lainnya
    Route::get('/email/verify/{id}/{hash}', [VerifyEmailController::class, 'verifyEmail'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');
    
    // Perbaiki route yang sebelumnya dikomentari
    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware(['throttle:6,1'])
        ->name('verification.send');
});

require __DIR__.'/auth.php';
