<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{
    public function __construct()
    {
        $this->middleware('user.data');   
    }

    public function login() {
        return view('auth.login');
    }

    public function index() {
        return view('beranda');
    }
}
