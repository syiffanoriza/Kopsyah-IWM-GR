<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestProduk;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function index() {
        return view('admin.dashboard.beranda');
    }

    public function loginView() {
        return view('admin.login');
    }   

    public function adminLogin(Request $request) {
        if ($this->authenticateAdmin($request)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back()->withErrors(['password' => 'Password salah!']);
        }
    }

    private function authenticateAdmin(Request $request) {
        $admin = User::where('user_id', 1)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            auth()->login($admin);
            session()->put('is_admin', true);

            return true;
        }

        return false;
    }

    public function indexProduk() {
        $index = Produk::all()->sortBy('kategori');
        $group = $index->groupBy('kategori')->map(
            function ($produk) {
                return $produk->groupBy('jenis');
            }
        );

        return view('admin.dashboard.produk', compact(['index', 'group']));
    }

    public function tambahProduk(RequestProduk $request) {
        Produk::create([
            'kode' => $request->kode_produk,
            'produk' => $request->produk,
            'kategori' => $request->kategori,
            'jenis' => $request->jenis,
            'harga_jual' => $request->harga_jual,
        ]);
    }
}
