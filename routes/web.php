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
    return view('landing');
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

Route::get('/daftar', function () {
    return view('daftar');
});

// Layanan Kami Pages 

Route::get('/sektor-jasa', function () {
    return view('sektor-jasa');
});

Route::get('/sektor-simpanan', function () {
    return view('sektor-simpanan');
});

Route::get('/sektor-pembiayaan', function () {
    return view('sektor-pembiayaan');
});

Route::get('/proyek-tahunan', function () {
    return view('proyek-tahunan');
});

Route::get('/navbar-component', function () {
    return view('components.navbar');
});
