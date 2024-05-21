<?php

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

Route::get('/', function () {
    return view('beranda');
});

// Tentang Kami Pages

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/manajemen-iwm', function () {
   return view('struktur');
});

// Layanan Kami Pages 

//Sektor Jasa Pages

Route::get('/sektor-jasa', function () {
    return view('/sektor-jasa/sektor-jasa');
});

Route::get('/jasa-laundry', function () {
    return view('/sektor-jasa/jasa-laundry');
});

Route::get('/jasa-service-ac', function () {
    return view('/sektor-jasa/jasa-service-ac');
});

Route::get('/jasa-pick-up', function () {
    return view('/sektor-jasa/jasa-pick-up');
});

//Sektor Simpanan Pages

Route::get('/sektor-simpanan', function () {
    return view('/sektor-simpanan/sektor-simpanan');
});

Route::get('/simpanan-berjangka', function () {
    return view('/sektor-simpanan/simpanan-berjangka');
});

Route::get('/simpanan-qurban', function () {
    return view('/sektor-simpanan/simpanan-qurban');
});

Route::get('/simpanan-umroh', function () {
    return view('/sektor-simpanan/simpanan-umroh');
});

// Sektor Pembiayaan Pages

Route::get('/sektor-pembiayaan', function () {
    return view('/sektor-pembiayaan/sektor-pembiayaan');
});

Route::get('/pembiayaan-konsumtif', function () {
    return view('/sektor-pembiayaan/pembiayaan-konsumtif');
});

Route::get('/pembiayaan-modal-umkm', function () {
    return view('/sektor-pembiayaan/pembiayaan-modal-umkm');
});

// Proyek Tahunan Pages

Route::get('/proyek-tahunan', function () {
    return view('/proyek-tahunan/proyek-tahunan');
});

Route::get('/penjualan-ramadhan-fair', function () {
    return view('/proyek-tahunan/penjualan-ramadhan-fair');
});

Route::get('/hewan-qurban', function () {
    return view('/proyek-tahunan/hewan-qurban');
});

// Belanja Pages

Route::get('/belanja', function () {
    return view('belanja');
});

// Daftar Pages

Route::get('/daftar', function () {
    return view('/daftar-kopsyah/daftar');
});

Route::get('/form-daftar', function () {
    return view('/daftar-kopsyah/form-daftar');
});

// Components

Route::get('/navbar-component', function () {
    return view('components.navbar');
});
