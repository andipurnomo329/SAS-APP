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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Master Data 
Route::get('/datasiswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/dataguru', [GuruController::class, 'index'])->name('guru');
Route::get('/datakelas', [KelasController::class, 'index'])->name('kelas');
Route::get('/datamapel', [MapelController::class, 'index'])->name('mapel');
Route::get('/datastaff', [StaffController::class, 'index'])->name('staff');

// Jadwal Akademik
Route::get('/jadwal_akademik', [JadwalController::class, 'index'])->name('jadwal');
