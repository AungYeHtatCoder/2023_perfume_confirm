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
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id', $user_id)->get();
            $cartItems = [];
            $cartTotal = 0;
            foreach ($carts as $cart) {
                $product = Product::with(['carts' => function ($query) use ($user_id) {
                    $query->where('user_id', $user_id);
                }])->find($cart->product_id);

                if ($product) {
                    $cartItems[] = $product;
                    $cartTotal += $product->carts->sum('total_price');
                }
            }

            // return $cartTotal;

            return view('welcome', compact('newArrival', 'carts', 'cartItems', 'cartTotal'));
        }else{
            return view('welcome', compact('newArrival'));
        }

        // foreach($carts as $cart){
        //     return $cart->products;
        // }


    }

    public function profile() {
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            return view('frontend.profile', compact('carts'));
        }else{
            return redirect()->back()->with('error', 'Please Logged In!');
        }
    }
    public function user_orders() {
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            return view('frontend.user_orders', compact('carts'));
        }else{
            return redirect()->back()->with('error', 'Please Logged In!');
        }
    }
    public function my_payment() {
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            return view('frontend.my_payment', compact('carts'));
        }else{
            return redirect()->back()->with('error', 'Please Logged In!');
        }
    }
    public function track_order() {
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            return view('frontend.track_order', compact('carts'));
        }else{
            return redirect()->back()->with('error', 'Please Logged In!');
        }
    }
    public function order_cancellation() {
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            return view('frontend.order_cancellation', compact('carts'));
        }else{
            return redirect()->back()->with('error', 'Please Logged In!');
        }
    }
    public function dashboard() {
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            return view('frontend.dashboard', compact('carts'));
        }else{
            return redirect()->back()->with('error', 'Please Logged In!');
        }
    }
    public function delivary_info() {
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            return view('frontend.delivary_info', compact('carts'));
        }else{
            return redirect()->back()->with('error', 'Please Logged In!');
        }
    }
    public function checkout() {
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            return view('frontend.checkout', compact('carts'));
        }else{
            return redirect()->back()->with('error', 'Please Logged In!');
        }
    }
    public function cart() {
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            return view('frontend.cart', compact('carts'));
        }else{
            return redirect()->back()->with('error', 'Please Logged In!');
        }
    }
    public function shop() {
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            return view('frontend.shop', compact('carts'));
        }
        return view('frontend.shop');
    }
    public function product_detail() {
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            return view('frontend.product_detail', compact('carts'));
        }
        return view('frontend.product_detail');
    }
    public function contact() {
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            return view('frontend.contact', compact('carts'));
        }
        return view('frontend.contact');
    }
    public function aboutus() {
        if(Auth::check()){
            $carts = Cart::where('user_id', Auth::user()->id)->get();
            return view('frontend.aboutus', compact('carts'));
        }
        return view('frontend.aboutus');
    }
    public function signin() {
        if(Auth::check()){
            return redirect()->back()->with('error', "You have already logged in!");
        }
        return view('frontend.signin');
    }
    public function signup() {
        if(Auth::check()){
            return redirect()->back()->with('error', "You have already logged in!");
        }
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
