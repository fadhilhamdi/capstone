<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\PemeriksaanAwalController;
use App\Http\Controllers\ScreeningController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\EdukasiTipsController;
use App\Http\Controllers\DataAnakController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// =======================
// Halaman Awal (Welcome)
// =======================
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// =======================
// Dashboard
// =======================
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// =======================
// Authenticated Routes
// =======================
Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::put('/password', [PasswordController::class, 'update'])->name('password.update');
});

// =======================
// Pemeriksaan Awal
// =======================
Route::get('/pemeriksaan-awal', [PemeriksaanAwalController::class, 'index'])->name('pemeriksaan-awal');

// =======================
//Screening
// =======================
Route::get('/screening', [ScreeningController::class, 'index'])->name('screening.index');
Route::post('/screening', [ScreeningController::class, 'store'])->name('screening.store');

// =======================
// Data Anak
// =======================
Route::prefix('anak')->group(function () {
    Route::get('/', [DataAnakController::class, 'index'])->name('anak.index');
    Route::get('/create', [DataAnakController::class, 'create'])->name('anak.create');
    Route::post('/store', [DataAnakController::class, 'store'])->name('anak.store');
    Route::get('/{id}/edit', [DataAnakController::class, 'edit'])->name('anak.edit');
    Route::patch('/{id}/update', [DataAnakController::class, 'update'])->name('anak.update');
    Route::delete('/{id}/delete', [DataAnakController::class, 'destroy'])->name('anak.destroy');
});

// =======================
// Report
// =======================
Route::get('/report', [ReportController::class, 'index'])->name('report.index');

// =======================
// Edukasi & Tips
// =======================
Route::get('/edukasi-tips', [EdukasiTipsController::class, 'index'])->name('edukasi-tips');

// =======================
// Custom Logout (redirect ke welcome)
// =======================
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/'); // kembali ke halaman welcome
})->name('logout');

// =======================
// Auth Routes
// =======================
require __DIR__.'/auth.php';
