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
Route::get('/admin/login', [AdminController::class, 'loginView'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login.submit');

Route::middleware('auth')->group(function () {

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    
    Route::get('/admin/produk', [AdminController::class, 'indexProduk'])->name('admin.produk');

    Route::get('/admin/testimoni', [AdminController::class, 'testimoni'])->name('admin.testimoni');
});