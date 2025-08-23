<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterData\SiswaController;
use App\Http\Controllers\MasterData\GuruController;
use App\Http\Controllers\MasterData\KelasController;
use App\Http\Controllers\MasterData\MapelController;
use App\Http\Controllers\MasterData\StaffController;
use App\Http\Controllers\JadwalAkademik\JadwalController;

Route::middleware(['web'])->group(function () {
    // Redirect ke dashboard
    Route::get('/', fn () => redirect()->route('dashboard'));

    // Halaman Login
    Route::middleware('guest.session')->group(function () {
        Route::get('/login', [LoginController::class, 'index'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('login');
    });

    Route::middleware('auth.session')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Master Data 
       Route::middleware('check.role:SuperAdmin,Admin')
        ->prefix('master-data')
        ->name('master-data.')
        ->group(function () {
            Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
            Route::get('/guru', [GuruController::class, 'index'])->name('guru');
            Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
            Route::get('/mapel', [MapelController::class, 'index'])->name('mapel');
            Route::get('/staff', [StaffController::class, 'index'])->name('staff');
        });

        // Jadwal Akademik
        Route::get('/jadwal_akademik', [JadwalController::class, 'index'])->name('jadwal');


        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    });
});
