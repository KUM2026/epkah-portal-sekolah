<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Vendor\VenController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminSekController;
use App\Http\Controllers\Sekolah\SekolahDashboardController;
use App\Http\Controllers\Sekolah\SekRegisterController;
use App\Http\Controllers\Sekolah\SekHantarController;
use App\Http\Controllers\Sekolah\SekLaporanController;
use App\Http\Controllers\Auth\SocialAuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Main public dashboard
Route::get('/', [DashboardController::class, 'index'])->name('public.dashboard');

// Social Authentication
Route::middleware('guest')->group(function () {
    // Google
    Route::get('/auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('auth.google.redirect');
    Route::get('/auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback'])->name('auth.google.callback');

    // Facebook
    Route::get('/auth/facebook', [SocialAuthController::class, 'redirectToFacebook'])->name('auth.facebook.redirect');
    Route::get('/auth/facebook/callback', [SocialAuthController::class, 'handleFacebookCallback'])->name('auth.facebook.callback');
});

// Authentication
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Vendor
Route::get('/vendor/join', [VenController::class, 'create'])->name('vendor.create');
Route::post('/vendor/join', [VenController::class, 'store'])->name('vendor.store');

// Dashboards
Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/sekolah/dashboard', [SekolahDashboardController::class, 'index'])->name('sekolah.dashboard');
Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');

// Sekolah routes
Route::prefix('sekolah')->name('sekolah.')->group(function () {
    Route::get('/dashboard', [SekolahDashboardController::class, 'index'])->name('dashboard');
    
    // Page Maklumat Sekolah
   Route::get('/profile-test', [SekolahDashboardController::class, 'profile']);

    
    Route::get('/register', [SekRegisterController::class, 'create'])->name('register');
    Route::post('/register', [SekRegisterController::class, 'store'])->name('register.store');

    Route::get('/hantar', [SekHantarController::class, 'index'])->name('hantar');
    Route::post('/hantar', [SekHantarController::class, 'store'])->name('hantar.store');

    Route::get('/laporan', [SekLaporanController::class, 'index'])->name('laporan');
});

// Admin routes
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', function () {
        return view('admin.dashboard.index');
    })->name('dashboard');

    // ✔ Index
    Route::get('/sekolah', [AdminSekController::class, 'index'])->name('sekolah.index');

    // ✔ Create
    Route::get('/sekolah/create', [AdminSekController::class, 'create'])->name('sekolah.create');

    // ✔ Store
    Route::post('/sekolah/store', [AdminSekController::class, 'store'])->name('sekolah.store');

    // ✔ View (show)
    Route::get('/sekolah/{id}/view', [AdminSekController::class, 'show'])->name('sekolah.view');

    // ✔ Edit
    Route::get('/sekolah/{id}/edit', [AdminSekController::class, 'edit'])->name('sekolah.edit');

    // ✔ Update
    Route::put('/sekolah/{id}', [AdminSekController::class, 'update'])->name('sekolah.update');

    // ✔ Delete
    Route::delete('/sekolah/{id}', [AdminSekController::class, 'destroy'])->name('sekolah.destroy');

    // Lain-lain
    Route::view('/pengguna', 'admin.user.index')->name('pengguna');
    Route::view('/vendor', 'admin.vendor.index')->name('vendor');
    Route::view('/penghantaran', 'admin.penghantaran.index')->name('penghantaran');
    Route::view('/laporan', 'admin.laporan.index')->name('laporan');
});

