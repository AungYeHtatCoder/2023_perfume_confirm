 <div class="u-s-p-b-60">

  <!--====== Section Intro ======-->
  <div class="section__intro u-s-m-b-16">
   <div class="container">
    <div class="row">
     <div class="col-lg-12">
      <div class="section__text-wrap">
       <h1 class="section__heading u-c-secondary u-s-m-b-12">TOP TRENDING</h1>

       <span class="section__span u-c-silver">CHOOSE CATEGORY</span>
      </div>
     </div>
    </div>
   </div>
  </div>
  <!--====== End - Section Intro ======-->


  <!--====== Section Content ======-->
  <div class="section__content">
   <div class="container">
    <div class="row">
     <div class="col-lg-12">
      <div class="filter-category-container">
       <div class="filter__category-wrapper">

        <button class="btn filter__btn filter__btn--style-1 js-checked" type="button" data-filter="*">ALL</button>
       </div>

       @foreach( $scents as $scent)

       <div class="filter__category-wrapper">

        <button class="btn filter__btn filter__btn--style-1" type="button"
         data-filter=".scent-{{ $scent->id }}">{{ $scent->scent_name }}</button>
       </div>
       @endforeach
      </div>
      <div class="filter__grid-wrapper u-s-m-t-30">
       <div class="row">
        {{-- top trending data --}}
        @foreach ($topTrending as $product)
        @foreach ($product->scents as $scent)

        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item scent-{{ $scent->id }}">
         <div class="product-o product-o--hover-on product-o--radius">
          <div class="product-o__wrap">
           <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{ url('/product-detail/'.$product->id) }}">
            <img class="aspect__img" src="{{ asset('assets/img/products/'.$product->image) }}" alt="">
           </a>
           <div class="product-o__action-wrap">
            <ul class="product-o__action-list">
             <li>
              <a href="{{url('/product_detail/'.$product->id)}}" title="Product Detail">
               <i style="color: white" class="fas fa-search-plus"></i>
              </a>
              <!-- <a data-modal="modal" data-modal-id="#quick-look-top-trending-{{ $product->id }}" data-tooltip="tooltip"
               data-placement="top" title="Quick View"><i style="color: white" class="fas fa-search-plus"></i></a> -->
             </li>
             <li>
              @auth
              <a
               onclick="event.preventDefault(); document.getElementById('addToCart-form-{{ $product->id }}').submit();">
               <i style="color: white" class="fas fa-plus-circle"></i>
              </a>
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
              <a href="{{ url('/signin') }}">
               <i style="color: white" class="fas fa-plus-circle"></i>
              </a>
              @endguest
             </li>
            </ul>
           </div>
          </div>

          <div class="blog-t-w">
        <a class="gl-tag btn--e-transparent-hover-brand-b-2" data-modal="modal" data-modal-id="#quick-look"
         data-tooltip="tooltip" data-placement="top">View</a>

        <a class="gl-tag btn--e-transparent-hover-brand-b-2" data-modal="modal" data-modal-id="#add-to-cart"
         data-tooltip="tooltip" data-placement="top">Add to cart</a>
       </div>

          <span class="product-o__category">
           <small>{{ $product->brand->brand_name }}</small>
          </span>

          <span class="product-o__name">
           <a href="{{ url('/product_detail/'.$product->id) }}">{{ $product->name }}</a>
          </span>

          @foreach ($product->sizes as $size)
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
           </span>
         </div>
        </div>

        @endforeach
        @endforeach
       </div>

      </div>
     </div>
     <!-- <div class="col-lg-12">
                                <div class="load-more">

                                    <button class="btn btn--e-brand" type="button">Load More</button>
                                </div>
                            </div> -->
    </div>
   </div>
  </div>
  <hr />
  <!--====== End - Section Content ======-->
 </div>



 <!-- new banner section -->
 <div class="new_banner_section row">
  <div class="col-md-1">

  </div>

  <div class="col-md-5 col-sm-12">
   <img src="{{ asset('user_app/assets/images/banners/new_banner__6.png')}}" alt="banner">
  </div>

  <div class="col-md-5 col-sm-12 banner_texts">
   <h2>Our original perfume</h2><br />
   <p>The new fragrance</p><br />
   <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
    magna aliqua.</span><br />

   <a href="{{ url('/shop') }}" type="button">SHOP NOW</a>
  </div>

 </div>
 <hr class="mb-10">

 <!-- end banner section -->