<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use Illuminate\Http\Request;
use App\Http\Controllers\WorkExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserVerificationController;

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
        Route::get('/dashboard', [App\Http\Controllers\Admin\UserVerificationController::class, 'dashboard'])->name('dashboard');
        Route::post('/batch-verify', [App\Http\Controllers\Admin\UserVerificationController::class, 'batchVerify'])->name('batch-verify');
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

    // Route untuk menampilkan halaman verifikasi
    Route::get('/verify-users', [UserVerificationController::class, 'index'])->name('users.verify.index');
    // Route untuk memproses verifikasi user
    Route::patch('/verify-users/{user}', [UserVerificationController::class, 'verify'])->name('users.verify.update');
});

// Route untuk Member+ Management
Route::middleware(['auth', 'verified'])->prefix('membership')->name('membership.')->group(function () {
    Route::get('/upgrade', [App\Http\Controllers\MembershipPaymentController::class, 'upgrade'])->name('upgrade');
    Route::get('/history', [App\Http\Controllers\MembershipPaymentController::class, 'history'])->name('history');
    Route::get('/create', [App\Http\Controllers\MembershipPaymentController::class, 'create'])->name('create');
    Route::post('/store', [App\Http\Controllers\MembershipPaymentController::class, 'store'])->name('store');
    
    // Route untuk halaman alumni
    Route::get('/alumni', [App\Http\Controllers\Membership\AlumniController::class, 'index'])->name('alumni');
    
    Route::get('/{payment}', [App\Http\Controllers\MembershipPaymentController::class, 'show'])->name('show');
    Route::delete('/{payment}', [App\Http\Controllers\MembershipPaymentController::class, 'cancel'])->name('cancel');
});

// Route untuk profile dengan middleware langsung
Route::get('profile', [App\Http\Controllers\ProfileController::class, 'show'])
    ->middleware(['auth', 'verified', \App\Http\Middleware\CheckVerificationStatus::class])
    ->name('profile');

// Route untuk update foto profil
Route::post('profile/update-photo', [App\Http\Controllers\ProfileController::class, 'updatePhoto'])
    ->middleware(['auth', 'verified'])
    ->name('profile.update-photo');

// Route untuk update data profil
Route::put('profile/update', [App\Http\Controllers\ProfileController::class, 'update'])
    ->middleware(['auth', 'verified'])
    ->name('profile.update');

// Tambahkan rute dengan metode POST untuk update data profil sebagai alternatif
Route::post('profile/update', [App\Http\Controllers\ProfileController::class, 'update'])
    ->middleware(['auth', 'verified']);

// Route untuk dashboard dengan middleware langsung
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', \App\Http\Middleware\CheckVerificationStatus::class])
    ->name('dashboard');

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

// Rute untuk Riwayat Pekerjaan
Route::middleware(['auth', 'verified'])->group(function () {
    // Riwayat Pekerjaan
    Route::post('/work-experiences', [WorkExperienceController::class, 'store'])->name('work-experiences.store');
    Route::put('/work-experiences/{workExperience}', [WorkExperienceController::class, 'update'])->name('work-experiences.update');
    Route::delete('/work-experiences/{workExperience}', [WorkExperienceController::class, 'destroy'])->name('work-experiences.destroy');
    
    // Riwayat Pendidikan
    Route::post('/educations', [EducationController::class, 'store'])->name('educations.store');
    Route::put('/educations/{education}', [EducationController::class, 'update'])->name('educations.update');
    Route::delete('/educations/{education}', [EducationController::class, 'destroy'])->name('educations.destroy');
});

require __DIR__.'/auth.php';
