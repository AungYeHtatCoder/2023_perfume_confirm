<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin\Size;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Models\Admin\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //return view('admin.dashboard');

         if (auth()->user()->hasRole('Admin')) {

        return view('admin.dashboard');
        //return view('home');

    } else {
        
        return view('frontend.profile');
    }
    }
}