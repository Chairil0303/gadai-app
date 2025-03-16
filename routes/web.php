<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangGadaiController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\MutasiController;
use App\Http\Controllers\SahamBarangController;
use App\Http\Controllers\NilaiAkhirController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware(['auth'])->group(function () {
    // Pilih cabang sebelum masuk ke dashboard
    Route::get('/select-branch', [BranchController::class, 'select'])->name('branch.select');
    Route::post('/select-branch', [BranchController::class, 'setBranch'])->name('branch.store');

    Route::middleware(['check.branch'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
        // Semua resource di dalam middleware ini agar hanya bisa diakses setelah memilih cabang
        Route::resource('barang-gadai', BarangGadaiController::class);
        Route::resource('transaksi', TransaksiController::class);
        Route::resource('mutasi', MutasiController::class);
        Route::resource('saham-barang', SahamBarangController::class);
        Route::resource('nilai-akhir', NilaiAkhirController::class);
        Route::resource('laporan', LaporanController::class);
    });

    // Profile tidak perlu dicek cabang
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
