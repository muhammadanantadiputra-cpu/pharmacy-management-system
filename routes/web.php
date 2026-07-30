<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\DistributorController;

Route::get('/', [ObatController::class, 'home'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/', [ObatController::class, 'admin'])->name('admin.index');

    // Obat CRUD
    Route::get('/obat/create', [ObatController::class, 'create'])->name('obat.create');
    Route::post('/obat', [ObatController::class, 'store'])->name('obat.store');
    Route::get('/obat/{id}/edit', [ObatController::class, 'edit'])->name('obat.edit');
    Route::put('/obat/{id}', [ObatController::class, 'update'])->name('obat.update');
    Route::delete('/obat/{id}', [ObatController::class, 'destroy'])->name('obat.destroy');

    // Distributor CRUD
    Route::get('/distributor/create', [DistributorController::class, 'create'])->name('distributor.create');
    Route::post('/distributor', [DistributorController::class, 'store'])->name('distributor.store');
    Route::get('/distributor/{id}/edit', [DistributorController::class, 'edit'])->name('distributor.edit');
    Route::put('/distributor/{id}', [DistributorController::class, 'update'])->name('distributor.update');
    Route::delete('/distributor/{id}', [DistributorController::class, 'destroy'])->name('distributor.destroy');
});

Route::get('/pemesanan', [ObatController::class, 'pemesanan'])->name('pemesanan');
