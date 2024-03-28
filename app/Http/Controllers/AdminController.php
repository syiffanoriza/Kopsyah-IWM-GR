<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.dashboard.beranda');
    }

    public function login() {
        return view('admin.login');
    }

    public function produk() {
        return view('admin.dashboard.produk.landing');
    }

    public function sembako() {
        return view('admin.dashboard.produk.produk');
    }


}
