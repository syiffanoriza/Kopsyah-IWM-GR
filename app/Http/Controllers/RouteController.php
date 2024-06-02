<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function index() {
        // FETCH USER NAME DARI DB
        $name = explode(' ', Auth::user()->name);

        if (count($name) === 1) {
            $letters = $name[0][0];
        } else {
            $letters = $name[0][0] . $name[1][0];
        }

        if (count($name) <= 2) {
            // JIKA NAMA TIDAK LEBIH DARI 2 KATA, TAMPIL LENGKAP
            $username = implode(' ', array_slice($name, 0, count($name)));
        } else {
            // JIKA NAMA ADA LEBIH DARI 2 KATA, TAMPILKAN NAMA KE 3+ SEBAGAI INISIAL
            $initials = array_map(function ($part) {
                return $part[0];
            }, array_slice($name, 2));
            $username = $name[0] . ' ' . $name[1] . ' ' . implode('.', $initials);
        }

        return view('beranda', compact('username', 'letters'));
    }
}
