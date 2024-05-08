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

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/daftar', function () {
    return view('daftar');
});

Route::get('/kontak', function () {
     return view('kontak');
});


Route::get('/manajemen-iwm', function () {
    return view('struktur');
});

Route::get('/navbar-component', function () {
    return view('components.navbar');
});
