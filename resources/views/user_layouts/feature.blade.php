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
           <a href="{{url('/product_detail/'.$product->id)}}" title="Product Detail">
            <i style="color: white" class="fas fa-search-plus"></i>
           </a>
           <!-- <a data-modal="modal" data-modal-id="#quick-look-top-trending-{{ $product->id }}" data-tooltip="tooltip"
            style="color: white" data-placement="top" title="Quick View"><i class="fas fa-search-plus"></i></a> -->
          </li>
          <li>
           @auth
           <a onclick="event.preventDefault(); document.getElementById('addToCart-form-{{ $product->id }}').submit();">
            <i style="color: white" class="fas fa-plus-circle"></i>
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
           <a href="{{ url('/signin') }}">
            <i class="fas fa-plus-circle"></i>
           </a>
           @endguest
          </li>
         </ul>
        </div>
       </div>
       <span class="product-o__category">
        <a href="{{ url('/brand/'.$product->brand->id) }}">{{ $product->brand->brand_name }}</a>
       </span>

       <span class="product-o__name">
        <a href="{{ url('/product/'.$product->id) }}">{{ $product->name }}</a>
       </span>
       <br>
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
      </div>
     </div>
     @endforeach
    </div>
   </div>
  </div>
  <!--====== End - Section Content ======-->
 </div>