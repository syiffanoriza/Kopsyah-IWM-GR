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
    return view('welcome');
});

Route::get('/navbar-component', function () {
    return view('components.navbar');
});

// ADMIN ROUTES - - - -

Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.beranda');
});

Route::get('admin/dashboard/produk', function() {
    return view('admin.dashboard.produk.landing');
});

Route::get('admin/dashboard/produk/test', function() {
    return view('admin.dashboard.produk.produk');
});