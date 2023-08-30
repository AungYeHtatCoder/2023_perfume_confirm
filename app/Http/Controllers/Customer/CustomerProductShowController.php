<?php

namespace App\Http\Controllers\Customer;

use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Http\Controllers\Controller;

class CustomerProductShowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // products with pagination 9 per page
            $products = Product::with('scents')->latest()->paginate(9);    
        // return $products;
        // brand with pagination 9 per page
         $brands = Brand::with('products')->latest()->paginate(9);
            return view('customer.customer_dashboard', compact('products', 'brands'));
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