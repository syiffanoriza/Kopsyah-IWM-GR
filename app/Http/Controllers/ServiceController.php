<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        
    public function addCartItems(CartRequest $request) {
        $cartItem = Cart::where('user_id', $request->user_id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($cartItem) {
            $cartItem->quantity = $request->quantity;
            $cartItem->save();
        } else {
            Cart::create([
                'user_id' => $request->user_id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        }
        return redirect('/belanja');
    }

    public function getCart() {
        $cartItems = Cart::where('user_id', Auth::user()->user_id)
            ->join('products', 'cart.product_id', '=', 'products.product_id')
            ->select('products.*', 'cart.quantity as cart_quantity')
            ->get();
    
        $subtotal = $cartItems->sum(function ($item) {
            return $item->price * $item->cart_quantity;
        });
    
        return view('sektor-perdagangan/cart-belanja', compact('cartItems', 'subtotal'));
    }

    public function deleteCartItem(Request $request) {
        $cartItem = Cart::where('user_id', Auth::user()->user_id)
        ->where('product_id', $request->id)
        ->first();

        if ($cartItem) {
            $cartItem->delete();
            return redirect()->back();
        }

        return redirect()->back();
    }
}
