<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AktifitasController;
use App\Http\Controllers\TanggalLiburController;
use App\Http\Controllers\AtasanController;

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::put('tema/{id}', [DashboardController::class, 'select']);
    Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
    Route::post('/ganti-password', [UserController::class, 'gantiPassword'])->name('ganti.password');
    Route::post('/edit-profile', [UserController::class, 'editProfile'])->name('edit.profile');
    Route::post('sendStatus', [UserController::class, 'changeAccess']);
    Route::resource('user', UserController::class);
    Route::get('/aktifitas/cetak', [AktifitasController::class, 'cetakLKH'])->name('cetak.lkh');
    Route::get('/aktifitas/cetak-pdf', [AktifitasController::class, 'cetakLKHPDF'])->name('cetak.lkh.pdf');
    Route::post('/aktifitas/cetak', [AktifitasController::class, 'storeCetakLKH'])->name('store.cetak.lkh');
    Route::post('/aktifitas/cetak-dpupr', [AktifitasController::class, 'storeCetakLKHDpupr'])->name('store.cetak.lkh.dpupr');
    Route::post('/aktifitas/cetak-dpupr-pdf', [AktifitasController::class, 'storeCetakLKHDpuprPDF'])->name('store.cetak.lkh.dpupr.pdf');
    Route::resource('aktifitas', AktifitasController::class);
    Route::resource('tanggal-libur', TanggalLiburController::class);
    Route::resource('atasan', AtasanController::class);
});