  @extends('user_layouts.master')

  @section('title', 'Shop')

  @section('content')

  <div class="app-content">

   <!--====== Section 1 ======-->
   <div class="u-s-p-y-90">
    <div class="container">
     <div class="row">
      <div class="col-lg-3 col-md-12">
       <div class="shop-w-master">
        <h1 class="shop-w-master__heading u-s-m-b-30"><i class="fas fa-filter u-s-m-r-8"></i>

         <span>FILTERS</span>
        </h1>
        <div class="shop-w-master__sidebar">
         <div class="u-s-m-b-30">
          <div class="shop-w shop-w--style">
           <div class="shop-w__intro-wrap">
            <h1 class="shop-w__h">SCENTS</h1>

            <span class="fas fa-minus shop-w__toggle" data-target="#s-category" data-toggle="collapse"></span>
           </div>
           <div class="shop-w__wrap collapse show" id="s-category">
            <ul class="shop-w__category-list gl-scroll">

             <li class="has-list">
              <a href="#">All</a>
              <!-- <span class="category-list__text u-s-m-l-6">(23)</span> -->

              <!-- <span class="js-shop-category-span is-expanded fas fa-plus u-s-m-l-6"></span> -->
             </li>
             @foreach($scents as $scent)
             <li class="has-list">

              <a href="#">{{ $scent->scent_name}}</a>

              <!-- <span class="category-list__text u-s-m-l-6">(5)</span> -->

              <!-- <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span> -->

             </li>
             @endforeach
             <!-- <li class="has-list">

              <a href="#">Women</a>

              <span class="category-list__text u-s-m-l-6">(5)</span>

              <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span>

             </li> -->

            </ul>
           </div>
          </div>
         </div>

         <div class="u-s-m-b-30">
          <div class="shop-w shop-w--style">
           <div class="shop-w__intro-wrap">
            <h1 class="shop-w__h">SIZE</h1>

            <span class="fas fa-minus collapsed shop-w__toggle" data-target="#s-size" data-toggle="collapse"></span>
           </div>
           <div class="shop-w__wrap collapse" id="s-size">
            <ul class="shop-w__list gl-scroll">
             @foreach($sizes as $size)
             <li>

              <!--====== Check Box ======-->

              <div class="check-box">

               <input type="checkbox" id="xs">
               <div class="check-box__state check-box__state--primary">

                <label class="check-box__label" for="xs">{{ $size->name }}</label>
               </div>
              </div>
              <!--====== End - Check Box ======-->

              <!-- <span class="shop-w__total-text">(2)</span> -->
             </li>
             @endforeach
            </ul>
           </div>
          </div>
         </div>


         <div class="u-s-m-b-30">
          <div class="shop-w shop-w--style">
           <div class="shop-w__intro-wrap">
            <h1 class="shop-w__h">Brand</h1>

            <span class="fas fa-minus collapsed shop-w__toggle" data-target="#s-price" data-toggle="collapse"></span>
           </div>
           <div class="shop-w__wrap collapse" id="s-price">
            <ul class="shop-w__list gl-scroll">
             @foreach($brands as $brand)
             <li>

              <!--====== Check Box ======-->
              <div class="check-box">

               <input type="checkbox" id="dior">
               <div class="check-box__state check-box__state--primary">

                <label class="check-box__label" for="dior">{{ $brand->brand_name }}</label>
               </div>
              </div>
              <!--====== End - Check Box ======-->

              <!-- <span class="shop-w__total-text">(2)</span> -->
             </li>
             @endforeach
            </ul>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
      <div class="col-lg-9 col-md-12">
       <div class="shop-p">
        <div class="shop-p__toolbar u-s-m-b-30">
         <!-- <div class="shop-p__meta-wrap u-s-m-b-60">
          <div class="shop-p__meta-text-2">

           <span>Related Searches:</span>

           <a class="gl-tag btn--e-brand-shadow" href="#">Popular</a>

           <a class="gl-tag btn--e-brand-shadow" href="#">Men Ranges</a>

           <a class="gl-tag btn--e-brand-shadow" href="#">Women Ranges</a>
          </div>
         </div> -->
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

             <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/product_detail') }}">

              <img class="aspect__img" src="{{ asset('assets/img/products/'.$product->image)}}" alt=""></a>
             <div class="product-m__quick-look">

              <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
               data-placement="top" title="Quick Look"></a>
             </div>

            </div>
            <div class="product-m__content">
             <div class="product-m__category">

              <a href="shop-side-version-2.html">{{ $product->brand->brand_name }}</a>
             </div>
             <div class="product-m__name">

              <h4><a href="{{url('/product_detail') }}">{{ $product->product_name }}</a></h4>
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
                {!! $product->description !!}
               </div>

               <div class="product-m__add-cart">

                <a class="btn--e-brand" data-modal="modal" data-modal-id="#cart-top-trending-{{ $product->id }}">Add to
                 Cart</a>
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
         <ul class="shop-p__pagination">
          <li class="is-active">

           <a href="shop-side-version-2.html">1</a>
          </li>
          <li>

           <a href="shop-side-version-2.html">2</a>
          </li>
          <li>

           <a href="shop-side-version-2.html">3</a>
          </li>
          <li>

           <a href="shop-side-version-2.html">4</a>
          </li>
          <li>

           <a class="fas fa-angle-right" href="shop-side-version-2.html"></a>
          </li>
         </ul>
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