 <div class="u-s-p-y-60">

  <!--====== Section Intro ======-->
  <div class="section__intro u-s-m-b-46">
   <div class="container">
    <div class="row">
     <div class="col-lg-12">
      <div class="section__text-wrap">
       <h1 class="section__heading u-c-secondary u-s-m-b-12">FEATURED PRODUCTS</h1>

       <span class="section__span u-c-silver">FIND NEW FEATURED PRODUCTS</span>
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
     @foreach($feature as $product)
     <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30">
      <div class="product-o product-o--hover-on u-h-100">
       <div class="product-o__wrap">

        <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{ url('/product-detail/'.$product->id) }}">

         <img class="aspect__img" src="{{ asset('assets/img/products/'.$product->image) }}" alt=""></a>
        <div class="product-o__action-wrap">
         <ul class="product-o__action-list">
          <li>
           <a data-modal="modal" data-modal-id="#quick-look-top-trending-{{ $product->id }}" data-tooltip="tooltip"
            data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a>
          </li>
          <li>
           @auth
           <a onclick="event.preventDefault(); document.getElementById('addToCart-form-{{ $product->id }}').submit();">
            <i class="fas fa-plus-circle"></i>
           </a>
           <form action="{{ url('/add-to-cart/'.$product->id) }}" id="addToCart-form-{{ $product->id }}" method="post"
            class="d-none">
            @csrf
            <input type="hidden" name="size_id" value="{{ $product->sizes[0]->id }}">
            <input type="hidden" name="unit_price"
             value="{{ $product->sizes[0]->pivot->discount_price <= 0 ? $product->sizes[0]->pivot->normal_price : $product->sizes[0]->pivot->discount_price }}">
            <input type="hidden" name="qty" value="1">
           </form>
           @endauth

           @guest
           <a href="{{ url('/login') }}">
            <i class="fas fa-plus-circle"></i>
           </a>
           @endguest
          </li>
         </ul>
        </div>
       </div>

       <!-- <div class="blog-t-w">
        <a class="gl-tag btn--e-transparent-hover-brand-b-2" data-modal="modal" data-modal-id="#quick-look"
         data-tooltip="tooltip" data-placement="top">View</a>

        <a class="gl-tag btn--e-transparent-hover-brand-b-2" data-modal="modal" data-modal-id="#add-to-cart"
         data-tooltip="tooltip" data-placement="top">Add to cart</a>
       </div> -->

       <span class="product-o__category">

        <a href="shop-side-version-2.html">{{ $product->brand->brand_name }}</a></span>

       <span class="product-o__name">

        <a href="product-detail.html">{{ $product->name }}</a></span>


       <span class="product-o__price">{{ $product->normal_price }}

        <span class="product-o__discount">{{ $product->discount_price }}</span></span>
      </div>
     </div>
     @endforeach
    </div>
   </div>
  </div>
  <!--====== End - Section Content ======-->
 </div>








 <!-- new banner section -->
 <div class="new_banner_section row">
  <div class="col-md-1">

  </div>

<div class="col-md-5">
    <img src="{{ asset('user_app/assets/images/banners/new_banner__6.png')}}" alt="banner">
</div>

<div class="col-md-5 banner_texts">
    <h2>Our original perfume</h2><br/>
    <p>The new fragrance</p><br/>
    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span><br/>

    <a href="#" type="button">SHOP NOW</a>
</div>

</div>


<!-- end banner section -->
