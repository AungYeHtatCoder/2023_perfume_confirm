<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Brand;
use Illuminate\Support\Facades\Auth;

class ProductBandSearchController extends Controller
{
    

    public function globalSearch(Request $request)
    {
    $query = $request->input('query');
    
    $products = Product::where('name', 'LIKE', "%{$query}%")
        ->orWhereHas('brand', function ($q) use ($query) {
            $q->where('brand_name', 'LIKE', "%{$query}%");
        })
        ->orWhereHas('sizes', function ($q) use ($query) {
            $q->where('name', 'LIKE', "%{$query}%");
        })
        ->orWhereHas('scents', function ($q) use ($query) {
            $q->where('scent_name', 'LIKE', "%{$query}%");
        })
        ->with('brand', 'sizes', 'scents')
        ->paginate(10);

    return view('frontend.search_result_page', compact('products'));
}

    // public function ProductBrandSearch(Request $request)
    // {
    //     $query = $request->input('query');
    //     $products = Product::where('name', 'LIKE', '%' . $query . '%')
    //             ->with('brand', 'scents', 'sizes')
    //             ->paginate(10);  // 10 is the number of items per page
    //             //->get();
    //     return view('frontend.search_result_page', compact('products'));
    // }
}

/* 
// if($request->ajax){
        //     $output = "";
        //     $products = Product::where('name', $request->brand_id)->get();
        //     if($products){
        //         foreach($products as $key => $product){
        //             $output .= '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        //             <div class="u-s-m-b-30">
        //              <div class="product-m">
        //               <div class="product-m__thumb">
        //                <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">
        //                 <img class="aspect__img" src="'.asset('storage/'.$product->image).'" alt="">
        //                </a>
        //               </div>
        //               <div class="product-m__content">
        //                <div class="product-m__category">
        //                 <a href="#">'.$product->brand->brand_name.'</a>
        //                </div>
        //                <div class="product-m__name">
        //                 <h2><a href="#">'.$product->name.'</a></h2>
        //                </div>
        //                <div class="product-m__rating gl-rating-style">
        //                 <i class="fas fa-star"></i><i class="fas fa-star"></i><i
        //                  class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>
        //                </div>
        //                <div class="product-m__price">
        //                 <span class="product-m__price">$'.$product->sizes->min('pivot.discount_price').'</span>
        //                </div>
        //                <div class="product-m__hover">
        //                 <div class="product-m__preview-description">
        //                  <span>'.$product->description.'</span>
        //                 </div>
        //                 <div class="product-m__wishlist">
        //                  <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
        //                 </div>
        //                </div>
        //               </div>
        //              </div>
        //             </div>
        //            </div>';
        //         }
        //         return Response($output);
        //     }
            
        // }
*/