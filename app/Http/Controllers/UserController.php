<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('user.data');   
    }

    public function index() {
        if (date("H") < "10") {
            $greeting = "Selamat Pagi";
        } elseif (date("H") < "15") {
            $greeting = "Selamat Siang";
        } elseif (date("H") < "19") {
            $greeting = "Selamat Sore";
        } else {
            $greeting = "Selamat Malam";
        }
        return view('user.dashboard', compact('greeting'));
    }
}
