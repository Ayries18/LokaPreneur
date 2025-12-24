<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LaporanController;

// ==================
// DEFAULT
// ==================
Route::get('/', fn() => redirect('/login'));

// ==================
// AUTH (GUEST)
// ==================
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class,'login']);
    Route::post('/login', [AuthController::class,'loginProcess']);

    Route::get('/register', [AuthController::class,'register']);
    Route::post('/register', [AuthController::class,'registerProcess']);
});

// ==================
// LOGOUT
// ==================
Route::post('/logout', [AuthController::class,'logout'])->middleware('auth');

// ==================
// MARKETPLACE (PUBLIC)
// ==================
Route::get('/marketplace',[ProductController::class,'marketplace']);

// ==================
// AUTHENTICATED USER
// ==================
Route::middleware('auth')->group(function () {

    Route::get('/dashboard',[DashboardController::class,'index']);

    Route::resource('produk', ProductController::class);

    Route::resource('transaksi', TransactionController::class);

    Route::get('/laporan', [LaporanController::class, 'index'])
    ->middleware('auth');

    // ADMIN ONLY
    Route::get('/admin',[AdminController::class,'index']);
});
