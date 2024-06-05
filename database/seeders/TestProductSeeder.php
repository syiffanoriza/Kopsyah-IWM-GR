<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = array_map('str_getcsv', file(storage_path('app/data/produk.csv')));
        foreach ($products as $product) {
            DB::table('products')->insert([
                'product_id' => intval($product[0]),
                'product' => $product[1],
                'price' => intval($product[2]),
                'unit' => $product[3],
                'category' => $product[4],
                'sub-category' => $product[5],
                'created_at' => now()
            ]);
        }
    }
}
