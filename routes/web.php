<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RouteController;
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

Route::get('/', [RouteController::class, 'index']);

Route::get('/navbar-component', function () {
    return view('components.navbar');
});

Route::get('/login', [RouteController::class, 'login'])->name('auth.login');

Route::middleware('auth')->group(function () {
    // Input routes for user dashboard...
});

// ADMIN ROUTES - - - -

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');

Route::middleware('admin.auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/produk', [AdminController::class, 'produk'])->name('admin.produk');
    Route::get('/admin/produk/sembako', [AdminController::class, 'sembako'])->name('admin.produk.sembako');
});