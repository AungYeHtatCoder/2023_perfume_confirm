<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Admin\Cart;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newArrival = Product::latest()->take(5)->get();
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            return view('welcome', compact('newArrival', 'carts'));
        }else{
            return view('welcome', compact('newArrival'));
        }
        // $cartProducts = Product::with('carts', )
        // foreach($carts as $cart){
        //     return $cart->products;
        // }
        // return $carts;

    }

    public function checkout() {
        return view('frontend.checkout');
    }
    public function cart() {
        return view('frontend.cart');
    }
    public function shop() {
        return view('frontend.shop');
    }
    public function product_detail() {
        return view('frontend.product_detail');
    }
    public function contact() {
        return view('frontend.contact');
    }
    public function aboutus() {
        return view('frontend.aboutus');
    }
    public function signin() {
        return view('frontend.signin');
    }
    public function signup() {
        return view('frontend.signup');
    }
    public function lost_password() {
        return view('frontend.lost_password');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
