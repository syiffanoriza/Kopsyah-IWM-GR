<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produk = array_map('str_getcsv', file(storage_path('app/csv/produk.csv')));
        foreach ($produk as $barang) {
            DB::table('produk')->insert([
                'kode_produk' => $barang[1],
                'produk' => $barang[2],
                'harga' => intval($barang[3]),
                'satuan' => $barang[4],
                'kategori' => $barang[5],
                'jenis' => $barang[6],
                'created_at' => now(),
            ]);
        }
    }
}
