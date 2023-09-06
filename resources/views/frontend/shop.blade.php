  @extends('user_layouts.master')

  @section('title', 'Shop')

  @section('css')
  <style>
/* Customize the pagination links */
.pagination {
 display: flex;
 list-style: none;
 padding: 0;
}

.pagination li {
 margin-right: 10px;
}

.pagination a {
 text-decoration: none;
 background-color: #FF4500;
 color: #fff;
 padding: 5px 10px;
 border-radius: 5px;
}

.pagination li .active {
 background-color: #000;
}

.pagination a:hover {
 background-color: #fa6c14;
}

/* Customize the active page */
/* .pagination .page-item .active a {
 background-color: #000 !important;
} */
  </style>
  @endsection
  @section('content')

  <div class="app-content">

   <!--====== Section 1 ======-->
   <div class="u-s-p-y-90">
    <div class="container">
     <div class="row">
      <div class="col-lg-3 col-md-12">
       @include('frontend.shop_sidebar');
      </div>
      <div class="col-lg-9 col-md-12">
       <div class="shop-p">
        <div class="shop-p__toolbar u-s-m-b-30">
         <div class="shop-p__meta-wrap u-s-m-b-30">
          <div class="shop-p__meta-text-2">

           <span>{{ $filter}}</span>

           <!-- <a class="gl-tag btn--e-brand-shadow" href="#">Popular</a>

           <a class="gl-tag btn--e-brand-shadow" href="#">Men Ranges</a>

           <a class="gl-tag btn--e-brand-shadow" href="#">Women Ranges</a> -->
          </div>
         </div>
         <!-- <div class="shop-p__tool-style">
          <form>
           <div class="tool-style__form-wrap">
            <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
              <option selected>Sort By: Newest Items</option>
              <option>Sort By: Latest Items</option>
              <option>Sort By: Best Selling</option>
              <option>Sort By: Best Rating</option>
              <option>Sort By: Lowest Price</option>
              <option>Sort By: Highest Price</option>
             </select></div>
           </div>
          </form>
         </div> -->
        </div>
        <div class="shop-p__collection">
         <div class="row is-list-active">
          @foreach($products as $product)
          <div class="col-lg-4 col-md-6 col-sm-6">
           <div class="product-m">
            <div class="product-m__thumb">

             <a class="aspect aspect--bg-grey aspect--square u-d-block"
              href="{{url('/product_detail/'.$product->id) }}">

              <img class="aspect__img" src="{{ asset('assets/img/products/'.$product->image)}}" alt=""></a>
             <div class="product-m__quick-look">

              <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
               data-placement="top" title="Quick Look"></a>
             </div>

            </div>
            <div class="product-m__content">
             <div class="product-m__category">

              <small>{{ $product->brand->brand_name }}</small>
             </div>
             <div class="product-m__name">

              <h4><a href="{{url('/product_detail/'.$product->id) }}">{{ $product->name }}</a></h4>
             </div>
             @foreach($product->sizes as $size)
             @if ($size->pivot->discount_price <= 0 || NULL) <span
              style={{ $size->pivot->qty <= 0 ? "color: red;" : "color:green" }}>
              {{ $size->pivot->qty <= 0 ? "Out of Stock" : "In Stock" }}</span>
              <span class="product-o__price">{{ number_format($size->pivot->normal_price) }} MMK ({{ $size->name }})
              </span>
              @else
              <span
               style={{ $size->pivot->qty <= 0 ? "color: red;" : "color:green" }}>{{ $size->pivot->qty <= 0 ? "Out of Stock" : "In Stock" }}</span>
              <span class="product-o__price">{{ number_format($size->pivot->discount_price) }} MMK ({{ $size->name }})
               <span class="product-o__discount"
                style="color: red; font-size: 10px">{{ number_format($size->pivot->normal_price) }} MMK</span>
              </span>
              @endif
              @endforeach
              <div class="product-m__hover">
               <div class="product-m__preview-description">
                <!-- {!! $product->description !!} -->
                {!! Str::limit($product->description, 300); !!}
               </div>

               <div class="product-m__add-cart">
                @auth
                <a
                 onclick="event.preventDefault(); document.getElementById('addToCart-form-{{ $product->id }}').submit();"
                 class="btn--e-brand">Add to
                 Cart</a>
                <form action="{{ url('/add-to-cart/'.$product->id) }}" id="addToCart-form-{{ $product->id }}"
                 method="post" class="d-none">
                 @csrf
                 <input type="hidden" name="size_id" value="{{ $product->sizes[0]->id }}">
                 <input type="hidden" name="unit_price"
                  value="{{ $product->sizes[0]->pivot->discount_price <= 0 ? $product->sizes[0]->pivot->normal_price : $product->sizes[0]->pivot->discount_price }}">
                 <input type="hidden" name="qty" value="1">
                </form>
                @endauth
                @guest
                <a href="{{ url('/signin')}}" class="btn--e-brand">Add to
                 Cart</a>
                @endguest
               </div>

              </div>
            </div>
           </div>
          </div>
          @endforeach
         </div>
        </div>
        <div class="u-s-p-y-60">

         <!--====== Pagination ======-->
         <div style="display: flex; justify-content: center;">
          {{ $products->links() }}
         </div>
         <!--====== End - Pagination ======-->

        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <!--====== End - Section 1 ======-->
  </div>
  <!--====== Quick Look Modal ======-->
  @include('user_layouts.quick_model')
  <!--====== End - Quick Look Modal ======-->

  <!--====== Add to Cart Modal ======-->
  @include('user_layouts.add_to_cart')
  <!--====== End - Add to Cart Modal ======-->
  <!--====== End - Modal Section ======-->
  @endsection