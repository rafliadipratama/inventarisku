<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini kamu bisa mendaftarkan semua route web untuk aplikasi kamu.
| Route ini dilindungi dengan middleware 'auth' setelah login.
|
*/

Route::get('/', fn () => redirect('/dashboard'));

// Route yang hanya bisa diakses oleh user yang sudah login
Route::middleware(['auth'])->group(function () {
    // Halaman dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Resource CRUD untuk data inventaris (barang)
    Route::resource('items', ItemController::class);
});

// Tambahkan ini untuk memuat semua route otentikasi (login, register, dll)
require __DIR__.'/auth.php';
