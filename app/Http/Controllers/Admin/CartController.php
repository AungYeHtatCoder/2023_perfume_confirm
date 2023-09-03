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
            'unit_price' => 'required'
        ]);
        $cartItem = Cart::where('product_id', $id)->where('user_id', Auth::user()->id)->where('size_id', $request->size_id)->first();
        if(!$cartItem){
            $cart = Cart::create([
                'product_id' => $id,
                'user_id' => Auth::user()->id,
                'size_id' => $request->size_id,
                'qty' => $request->qty,
                'unit_price' => $request->unit_price,
                'total_price' => $request->qty * $request->unit_price,
            ]);
            $cart->products()->sync($id);
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

    //update all carts
    public function updateAllCarts(Request $request, $id){
        $request->validate([
            'qty' => 'required'
        ]);

        $cart = Cart::where('id', $id)->where('user_id', Auth::user()->id)->first();
        $cart->update([
            'qty' => $request->qty,
            'total_price' => $request->qty * $cart->unit_price
        ]);
        return redirect()->back()->with('success', 'Update Cart Successfully.');
    }

    //clear all
    public function clearAll(){
        $carts = Cart::where('user_id', Auth::user()->id)->get();
        // return $carts;
        foreach($carts as $cart){
            Cart::destroy($cart->id);
        }
        return redirect()->back()->with('success', 'ALL CLEAR.');
    }
}
