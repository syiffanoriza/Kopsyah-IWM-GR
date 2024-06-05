<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Faker\Guesser\Name;
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
Route::middleware('user.data')->group(function () {
    Route::controller(RouteController::class)->group(function () {
        
        Route::get('/', 'index')->name('landing');
        
        // Tentang Kami
        Route::view('/tentang', 'tentang')->name('tentang');
        Route::view('/kontak', 'kontak')->name('kontak');
        Route::view('/manajemen-iwm', 'struktur')->name('struktur');
        
    });
    Route::controller(ServiceController::class)->group(function () { 
        
        // Sektor Jasa
        Route::view('/sektor-jasa', 'sektor-jasa/sektor-jasa');
        Route::view('/jasa-laundry', 'sektor-jasa/jasa-laundry');
        Route::view('/jasa-service-ac', 'sektor-jasa/jasa-service-ac');
        Route::view('/jasa-pick-up', 'sektor-jasa/jasa-pick-up');
        
        // Sektor Simpanan
        Route::view('/sektor-simpanan', 'sektor-simpanan/sektor-simpanan');
        Route::view('/simpanan-berjangka', 'sektor-simpanan/simpanan-berjangka');
        Route::view('/simpanan-qurban', 'sektor-simpanan/simpanan-qurban');
        Route::view('/simpanan-umroh', 'sektor-simpanan/simpanan-umroh');
        
        // Sektor Pembiayaan Pages
        Route::view('/sektor-pembiayaan', 'sektor-pembiayaan/sektor-pembiayaan');
        Route::view('/pembiayaan-konsumtif', 'sektor-pembiayaan/pembiayaan-konsumtif');
        Route::view('/pembiayaan-modal-umkm', 'sektor-pembiayaan/pembiayaan-modal-umkm');
        
        // Proyek Tahunan Pages
        Route::view('/proyek-tahunan', 'proyek-tahunan/proyek-tahunan');
        Route::view('/penjualan-ramadhan-fair', 'proyek-tahunan/penjualan-ramadhan-fair');
        Route::view('/hewan-qurban', 'proyek-tahunan/hewan-qurban');
        
        // Sektor Perdagangan Pages
        Route::get('/belanja', 'getCatalogue')->name('belanja');
        Route::get('/katalog-produk/{category}', 'getProducts');
        Route::view('/cart-belanja', 'sektor-perdagangan/cart-belanja')->name('cart');
        Route::post('/cart-belanja/add', 'addCartItems')->name('cart.add');
        Route::view('/checkout-belanja', 'sektor-perdagangan/checkout-belanja');
        
        // Daftar Pages
        Route::view('/daftar', 'daftar-kopsyah/daftar');
        Route::view('/form-daftar', 'daftar-kopsyah/form-daftar');
    });
});

Route::middleware(['auth', 'role.user'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('dashboard', 'index')->name('user.dashboard');
        Route::view('setoran', 'user.setoran')->name('user.setoran');
        Route::view('simpanan', 'user.simpanan')->name('user.simpanan');
        Route::view('pengaturan', 'user.pengaturan')->name('user.pengaturan');
    });
});

Route::prefix('admin')->middleware(['auth', 'role.admin'])->group(function () {
    Route::controller(AdminController::class)->group(function () {
        Route::get('dashboard', 'index')->name('admin.dashboard');
        Route::get('keanggotaaan', 'getUserList')->name('admin.keanggotaaan'); 
        Route::get('dashboard', 'index')->name('admin.dashboard'); 
        Route::get('dashboard', 'index')->name('admin.dashboard');
        Route::get('dashboard', 'index')->name('admin.dashboard');
    });
});