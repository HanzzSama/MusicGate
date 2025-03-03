<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('dashboard/admin', [DashboardController::class, 'adminHome'])->name('admin.home');
});

Route::middleware(['auth', 'role:seller'])->group(function () {
    Route::get('dashboard/seller', [DashboardController::class, 'sellerHome'])->name('seller.home');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('dashboard/MusicGate', [DashboardController::class, 'userHome'])->name('user.home');
});

Route::resource('dashboard', EventController::class);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');