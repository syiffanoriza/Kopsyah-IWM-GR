<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getCatalogue() {
        $index = Product::all()->sortBy('category');
        $map = $index->groupBy('category')->map(
            function ($product) {
                return $product->groupBy('sub-category');      
            }
        );
        $products = Product::all()->groupBy('category');
        return view('sektor-perdagangan/belanja', compact('products', 'map'));
    }

    public function getProducts($category) {
        $index = Product::all()->sortBy('category');
        $map = $index->groupBy('category')->map(
            function ($product) {
                return $product->groupBy('sub-category');      
            }
        );

        $fetch = Product::where('category', strtoupper($category))->get();
        $products = $fetch->groupBy('sub-category');

        $categories = Product::all()->groupBy('category');
        return view('sektor-perdagangan/katalog-produk', compact('products', 'map', 'categories'));
    }
}
