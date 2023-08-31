<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Cart;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request, $id){
        $product = Product::find($id);
        if(!$product){
            return redirect()->back()->with('error', "Product Not Found!");
        }
        $request->validate([
            'size_id' => 'required',
            'qty' => 'required',
            'total_price' => 'required'
        ]);
        $cart = Cart::create([
            'product_id' => $id,
            'user_id' => Auth::user()->id,
            'size_id' => $request->size_id,
            'qty' => $request->qty,
            'total_price' => $request->total_price,
        ]);

        // return $cart;
        return redirect()->back()->with('success', "Product Added to Cart.");
    }
}
