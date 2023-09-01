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
        $cartItem = Cart::where('product_id', $id)->where('user_id', Auth::user()->id)->first();
        if(!$cartItem){
            Cart::create([
                'product_id' => $id,
                'user_id' => Auth::user()->id,
                'size_id' => $request->size_id,
                'qty' => $request->qty,
                'total_price' => $request->total_price,
            ]);
            return redirect()->back()->with('success', "Product Added to Cart.");
        }else{
            return redirect()->back()->with('error', "Product has already added.");
        }
    }

    //delete cart
    public function delete($id){
        $cart = Cart::find($id);
        if(!$cart){
            return redirect()->back()->with('error', "Cart Not Found!");
        }else{
            Cart::destroy($id);
            return redirect()->back()->with('success', "Cart Deleted.");
        }
    }
}
