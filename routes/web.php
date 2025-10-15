<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PemeriksaanAwalController;
use App\Http\Controllers\ScreeningController;
use App\http\Controllers\ReportController;
use App\Http\Controllers\EdukasiTipsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/pemeriksaan-awal', [PemeriksaanAwalController::class, 'index'])
    ->name('pemeriksaan-awal');

// Profile Routes
Route::prefix('profile')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/update', [ProfileController::class, 'update'])->name('profile.update');
});

// Data Anak Routes
Route::prefix('anak')->group(function () {
    Route::get('/', [AnakController::class, 'index'])->name('anak.index');
    Route::get('/create', [AnakController::class, 'create'])->name('anak.create');
    Route::post('/store', [AnakController::class, 'store'])->name('anak.store');
    Route::get('/{id}/edit', [AnakController::class, 'edit'])->name('anak.edit');
    Route::put('/{id}/update', [AnakController::class, 'update'])->name('anak.update');
    Route::delete('/{id}/delete', [AnakController::class, 'destroy'])->name('anak.destroy');
});

//report
Route::get('/report', [ReportController::class, 'index'])
    ->name('report.index');

// screening
Route::get('/screening', [ScreeningController::class, 'screening'])->name('screening');

//edukasi & Tips
Route::get('/edukasi-tips', [EdukasiTipsController::class, 'index'])->name('edukasi-tips');
require __DIR__.'/auth.php';
