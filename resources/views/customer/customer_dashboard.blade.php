@extends('layouts.admin_app')
@section('styles')
<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/vendors/css/extensions/nouislider.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_app/app-assets/vendors/css/ui/prism.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_app/app-assets/vendors/css/forms/icheck/icheck.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin_app/app-assets/css/pages/ecommerce-shop.css') }}">
<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/css/plugins/forms/checkboxes-radios.css') }}">
@endsection
@section('content')
<div class="content-header row">
 <div class="content-header-light col-12">
  <div class="row">
   <div class="content-header-left col-md-9 col-12 mb-2">
    <h3 class="content-header-title">Dashboard</h3>
    <div class="row breadcrumbs-top">
     <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a>
       </li>
       {{-- <li class="breadcrumb-item"><a href="#">DataTables</a>
       </li> --}}
       <li class="breadcrumb-item active">Dashboard
       </li>
      </ol>
     </div>
    </div>
   </div>
   {{-- <div class="content-header-right col-md-3 col-12">
    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
     <button class="btn btn-primary round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1"
      type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
     <div class="dropdown-menu"><a class="dropdown-item" href="component-alerts.html"> Alerts</a><a
       class="dropdown-item" href="material-component-cards.html"> Cards</a><a class="dropdown-item"
       href="component-progress.html"> Progress</a>
      <div class="dropdown-divider"></div><a class="dropdown-item" href="register-with-bg-image.html"> Register</a>
     </div>
    </div>
   </div> --}}
  </div>
 </div>
</div>
<div class="content-overlay"></div>


<div class="content-detached content-right">
 <div class="content-body">
  <div class="product-shop">
   <div class="card">
    <div class="card-body">
     <span class="shop-title">Products</span>
     <span class="float-right">
      <span class="result-text mr-1"> Showing 12 of 203 results</span>
      <span class="display-buttons">
       <a href="#" class="active"><i class="ft-grid font-medium-2"></i></a>
       <a href="#"><i class="ft-list font-medium-2"></i></a>
      </span>
     </span>
    </div>
   </div>
   <div class="row match-height">
    <!-- cart start -->
    @if ($products)
    @foreach ($products as $product)
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
     <div class="card pull-up">
      <div class="card-content">
       <div class="card-body">
        <a href="ecommerce-product-detail.html">
         <div class="product-img d-flex align-items-center">
          <div class="badge badge-success round">
           @foreach ($product->sizes as $size)
           {{ $size->pivot->discount_price }} %
           @endforeach
          </div>
          <img class="img-fluid mb-1" src="{{ asset('assets/img/products/'.$product->image) }}" alt="Card image cap">
         </div>
         <h4 class="product-title">{{ $product->name }}</h4>
         <div class="price-reviews">
          <span class="price-box">
           <span class="price">
            @foreach ($product->sizes as $size)
            $ {{ $size->pivot->normal_price }}
            @endforeach
           </span>
           <!-- <span class="old-price">$500</span> -->
          </span>
          <span class="ratings float-right"></span>
         </div>
        </a>
        <div class="product-action d-flex justify-content-around">
         <a href="#like" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i
           class="ft-heart"></i></a><span class="saperator">|</span>
         <a href="#view" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ft-eye"></i></a><span
          class="saperator">|</span>
         <a href="#compare" data-toggle="tooltip" data-placement="top" title="Compare"><i
           class="ft-sliders"></i></a><span class="saperator">|</span>
         <a href="#cart" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i
           class="ft-shopping-cart"></i></a>
        </div>
       </div>
      </div>
     </div>
    </div>
    @endforeach
    @endif
    <!-- cart end -->
    <div class="col-12">
     <div class="card">
      <div class="card-content">
       <ul class="pagination justify-content-center pagination-separate pagination-flat">
        <li class="page-item">
         <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
         </a>
        </li>
        <li class="page-item">
         <a class="page-link" href="#">
          <!-- show paginate -->
          {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}
         </a>
        </li>

        <li class="page-item">
         <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
         </a>
        </li>
       </ul>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<div class="sidebar-detached sidebar-left">
 <div class="sidebar">
  <div class="sidebar-content d-none d-lg-block sidebar-shop">
   <div class="card">
    <div class="card-body">
     <form action="">
      <div class="search">
       <input id="basic-search" type="text" placeholder="Search here..." class="basic-search" name="search">
       <button>
        <i class="ficon ft-search"></i>
        search
       </button>
      </div>
     </form>
    </div>
   </div>
   <div class="card">
    <div class="card-body">
     <!-- <div class="categories-list">
      <div class="category-title pb-1">
       <h4 class="card-title mb-0">Categories</h4>
       <hr>
      </div>
      <div class="product-cat" id="categories">
       <ul class="treeview">
        <li><span>Watches</span>
         <ul>
          <li><span>Apple Watch</span></li>
          <li><span>Fitbit</span></li>
         </ul>
        </li>
        <li><span>Tablets</span>
         <ul>
          <li><span>iPad</span></li>
          <li><span>iPad Pro</span></li>
         </ul>
        </li>
        <li class="open"><span>Laptops</span>
         <ul>
          <li class="active"><span>Mac</span></li>
          <li><span>Mac Pro</span></li>
         </ul>
        </li>
        <li><span>Phone</span>
         <ul>
          <li><span>iPhone 9</span></li>
          <li><span>iPhone X</span></li>
          <li><span>iPhone Pro</span></li>
         </ul>
        </li>
       </ul>
      </div>
     </div> -->
     <!-- /Categories List -->

     <!-- /Price Range -->
     <!-- <div class="price-range">
      <div class="category-title mt-3 pb-1">
       <h4 class="card-title mb-0">Price</h4>
       <hr>
      </div>
      <div class="price-slider">
       <div class="price_slider_amount mb-2">
        <div class="range-amt"><strong>Price Range : </strong> <span class="range-val" id="lower-value"></span>
         - <span class="range-val" id="upper-value"></span></div>
       </div>
       <div class="form-group">
        <div class="slider-sm slider-success my-1" id="small-slider"></div>
       </div>
      </div>
     </div> -->
     <!-- /Price Range -->


     <!-- Striped Progress sample -->
     <div class="size">
      <div class="category-title mt-3 pb-1">
       <h4 class="card-title mb-0">Size</h4>
       <hr>
      </div>
      <div class="size-filter">
       <ul>
        @if ($sizes)
        @foreach ($sizes as $size)
        <li><a href="#">{{ $size->name }}</a></li>
        @endforeach
        @endif

       </ul>
      </div>
     </div>
     <!-- /Striped Progress sample -->

     <!-- Color Options -->
     <!-- <div class="color-filter">
      <div class="category-title mt-3 pb-1">
       <h4 class="card-title mb-0">Color</h4>
       <hr>
      </div>
      <div class="sidebar-list">
       <ul class="skin-square skin">
        <li>
         <input type="checkbox" class="white" id="color-white">
         <label for="color-white">
          <a href="#">
           <span class="color-info white"></span>
           White <span class="count">(4)</span>
          </a>
         </label>
        </li>
        <li>
         <input type="checkbox" class="black" id="color-black">
         <label for="color-black">
          <a href="#">
           <span class="color-info black"></span>
           Black <span class="count">(5)</span>
          </a>
         </label>
        </li>
        <li>
         <input type="checkbox" class="amber" id="color-amber">
         <label for="color-amber">
          <a href="#">
           <span class="color-info amber"></span>
           Amber <span class="count">(6)</span>
          </a>
         </label>
        </li>
        <li>
         <input type="checkbox" class="blue" id="color-blue">
         <label for="color-blue">
          <a href="#">
           <span class="color-info blue"></span>
           Blue <span class="count">(3)</span>
          </a>
         </label>
        </li>
        <li>
         <input type="checkbox" class="success" id="color-success">
         <label for="color-success">
          <a href="#">
           <span class="color-info success"></span>
           Green <span class="count">(1)</span>
          </a>
         </label>
        </li>
        <li>
         <input type="checkbox" class="pink" id="color-pink">
         <label for="color-pink">
          <a href="#">
           <span class="color-info pink"></span>
           Pink <span class="count">(2)</span>
          </a>
         </label>
        </li>
        <li>
         <input type="checkbox" class="yellow" id="color-yellow">
         <label for="color-yellow">
          <a href="#">
           <span class="color-info yellow"></span>
           Yellow <span class="count">(5)</span>
          </a>
         </label>
        </li>
        <li>
         <input type="checkbox" class="teal" id="color-teal">
         <label for="color-teal">
          <a href="#">
           <span class="color-info teal"></span>
           Teal <span class="count">(3)</span>
          </a>
         </label>
        </li>
        <li>
         <input type="checkbox" class="red" id="color-red">
         <label for="color-red">
          <a href="#">
           <span class="color-info red"></span>
           Red <span class="count">(3)</span>
          </a>
         </label>
        </li>
       </ul>
      </div>
     </div> -->
     <!-- /Color Options -->

     <!-- Brands -->
     <div class="brands">
      <div class="category-title mt-3 pb-1">
       <h4 class="card-title mb-0">Brands</h4>
       <hr>
      </div>
      <div class="search-box">
       <input id="brandInput" type="text" placeholder="Search Brand" class="product-search">
       <i class="ficon ft-search"></i>
      </div>
      <div class="sidebar-list" id="brands">
       <ul class="skin-square skin">
        @if ($brands)
        @foreach ($brands as $brand)
        <li><input type="checkbox" class="apple" id="apple"><label for="apple"> <a href="#">{{ $brand->brand_name }}
           <!-- <span class="count">(4)</span> -->
          </a></label>
        </li>
        @endforeach
        @endif
       </ul>
      </div>
     </div>
     <!-- /Brand -->

     <!-- Featured Image -->
     <div class="featured">
      <div class="category-title mt-3 pb-1">
       <h4 class="card-title mb-0">Featured</h4>
       <hr>
      </div>
      <div class="featured-image bg-success bg-lighten-2">
       <a href="ecommerce-product-detail.html">
        <div class="badge badge-danger">Best Deal</div>
        <img src="{{ asset('admin_app/app-assets/images/elements/samsung-gear.png') }}" alt="">
       </a>
      </div>
     </div>
     <!-- /Featured Image -->
    </div>
   </div>
  </div>
 </div>
</div>
@endsection

@section('scripts')

<script src="{{asset('admin_app/app-assets/vendors/js/ui/prism.min.js') }}"></script>
<script src="{{asset('admin_app/app-assets/vendors/js/extensions/jquery.raty.js') }}"></script>
<script src="{{asset('admin_app/app-assets/vendors/js/extensions/jquery.cookie.js') }}"></script>
<script src="{{asset('admin_app/app-assets/vendors/js/extensions/jquery.treeview.js') }}"></script>
<script src="{{asset('admin_app/app-assets/vendors/js/extensions/wNumb.js') }}"></script>
<script src="{{asset('admin_app/app-assets/vendors/js/extensions/nouislider.min.js') }}"></script>
<script src="{{asset('admin_app/app-assets/vendors/js/forms/icheck/icheck.min.js') }}"></script>

<script src="{{ asset('admin_app/app-assets/js/scripts/pages/content-panel-sidebar.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/js/scripts/pages/ecommerce-product-shop.js')}}"></script>
@endsection