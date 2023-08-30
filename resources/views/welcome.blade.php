@extends('user_layouts.master')

@section('title', 'Home')

@section('content')
    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Primary Slider ======-->
        @include('user_layouts.slider')
        <!--====== End - Primary Slider ======-->


        <!--====== Section 1 ======-->
        @include('user_layouts.shop_by_deal')
        <!--====== End - Section 1 ======-->


        <!--====== Section 2 ======-->
        @include('user_layouts.top_trending')
        <!--====== End - Section 2 ======-->


        <!--====== Section 3 ======-->
        @include('user_layouts.deal_of_day')
        <!--====== End - Section 3 ======-->


        <!--====== Section 4 ======-->
        @include('user_layouts.new_arrival')
        <!--====== End - Section 4 ======-->


        <!--====== Section 5 ======-->
        @include('user_layouts.banner')
        <!--====== End - Section 5 ======-->


        <!--====== Section 6 ======-->
        @include('user_layouts.feature')
        <!--====== End - Section 6 ======-->


        <!--====== Section 7 ======-->
        @include('user_layouts.promotion')
        <!--====== End - Section 7 ======-->


        <!--====== Section 8 ======-->

        <!--====== End - Section 8 ======-->


        <!--====== Section 9 ======-->
        @include('user_layouts.shipping')
        <!--====== End - Section 9 ======-->


        <!--====== Section 10 ======-->
        @include('user_layouts.best_seller')
        <!--====== End - Section Content ======-->
        <!--====== End - Section 10 ======-->


        <!--====== Section 11 ======-->
        @include('user_layouts.client_feedback')
        <!--====== End - Section 11 ======-->


        <!--====== Section 12 ======-->
        @include('user_layouts.brand')
        <!--====== End - Section 12 ======-->
    </div>
    <!--====== End - App Content ======-->

    <!--====== Quick Look Modal ======-->

    @foreach ($newArrival as $product)
    <div class="modal fade" id="quick-look-new-arrival-{{ $product->id }}">
        <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content modal-content-lg modal--shadow">
          <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
          <div class="modal-body">
           <div class="row">
            <div class="col-lg-12">
             <!--====== Product Detail ======-->
             <div class="pd u-s-m-b-30">
              <div class="pd-wrap">
               <div id="js-product-detail-modal">
                <div>
                 <img class="u-img-fluid" width="100%" src="{{ asset('assets/img/products/'.$product->image)}}" alt="">
                </div>
               </div>
              </div>
             </div>
             <!--====== End - Product Detail ======-->
            </div>
            <div class="col-lg-12">

             <!--====== Product Right Side Details ======-->
             <div class="pd-detail">
              <div>

               <span class="pd-detail__name" style="font-size: 20px;">{{ $product->name }}</span>
              </div>
              {{-- <div>
               <div class="pd-detail__inline">
                <span class="pd-detail__price">$6.99</span>

                <span class="pd-detail__discount">(76% OFF)</span>
                <del class="pd-detail__del">$28.97</del>
               </div>
              </div> --}}
              {{-- <div class="u-s-m-b-15">
               <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                 class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                <span class="pd-detail__review u-s-m-l-4">

                 <a href="product-detail.html">23 Reviews</a></span>
               </div>
              </div> --}}
              @foreach ($product->sizes as $size)
              <div class="u-s-m-b-15">
               <div class="pd-detail__inline">
                @if ($size->pivot->discount_price <= 0 || NULL)
                <span class="pd-detail__price">{{ number_format($size->pivot->normal_price) }} MMK</span>
                @else
                <span class="pd-detail__price">{{ number_format($size->pivot->discount_price) }} MMK</span>
                <del class="pd-detail__del">{{ number_format($size->pivot->normal_price) }} MMK</del>
                @endif
                <span class="pd-detail">{{ $size->name }}</span>
                @if ($size->pivot->qty <= 0 || NULL)
                <span class="pd-detail__left">Out Of Stock</span>
                @else
                <span class="pd-detail__stock">In Stock</span>
                @endif
                <form class="pd-detail__form" action="{{ url('/add-to-cart/'.$product->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="size_id" value="{{ $size->id }}">
                    @if ($size->pivot->discount_price <= 0 || NULL)
                    <input type="hidden" name="total_price" value="{{ $size->pivot->normal_price }}">
                    @else
                    <input type="hidden" name="total_price" value="{{ $size->pivot->discount_price }}">
                    @endif

                    <div class="pd-detail-inline-2">
                     <div class="u-s-m-b-15">
                      <!--====== Input Counter ======-->
                      <div class="input-counter">
                       <span class="input-counter__minus fas fa-minus"></span>
                       <input class="input-counter__text input-counter--text-primary-style" name="qty" type="text" value="1" data-min="1"
                        data-max="1000">
                       <span class="input-counter__plus fas fa-plus"></span>
                      </div>
                      <!--====== End - Input Counter ======-->
                     </div>
                     <div class="u-s-m-b-15">
                      <button class="btn btn--e-brand-b-2" type="submit">Add to Cart</button>
                     </div>
                    </div>
                </form>
               </div>
              </div>
              @endforeach
              <div class="u-s-m-b-15">
               <span class="pd-detail__preview-desc">{!! $product->description !!}</span>
              </div>
              <div class="u-s-m-b-15">

              </div>
              <div class="u-s-m-b-15">

               {{-- <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
               <ul class="pd-detail__policy-list">
                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                 <span>Buyer Protection.</span>
                </li>
                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                 <span>Full Refund if you don't receive your order.</span>
                </li>
                <li><i class="fas fa-check-circle u-s-m-r-8"></i>

                 <span>Returns accepted if product not as described.</span>
                </li>
               </ul> --}}
              </div>
             </div>
             <!--====== End - Product Right Side Details ======-->
            </div>
           </div>
          </div>
         </div>
        </div>
    </div>
    @endforeach

    @foreach ($newArrival as $product)
    <div class="modal fade" id="cart-new-arrival-{{ $product->id }}">
        <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content modal-radius modal-shadow">

          <button class="btn dismiss-button fas fa-times" type="button" data-dismiss="modal"></button>
          <div class="modal-body">
           <div class="row">
            <div class="col-lg-6 col-md-12">
             <div class="success u-s-m-b-30">
              <div class="success__text-wrap"><i class="fas fa-check"></i>

               <span>Item is added successfully!</span>
              </div>
              <div class="success__img-wrap">

               <img class="u-img-fluid" src="{{ asset('user_app/assets/images/product/electronic/product_20.jpg')}}" alt="">
              </div>
              <div class="success__info-wrap">

               <span class="success__name">{{ $product->name }}</span>

               <span class="success__quantity">Quantity: 1</span>

               <span class="success__price">$170.00</span>
              </div>
             </div>
            </div>
            <div class="col-lg-6 col-md-12">
             <div class="s-option">

              <span class="s-option__text">1 item (s) in your cart</span>
              <div class="s-option__link-box">

               <a class="s-option__link btn--e-white-brand-shadow" data-dismiss="modal">CONTINUE SHOPPING</a>

               <a class="s-option__link btn--e-white-brand-shadow" href="{{ url('/cart') }}">VIEW CART</a>

               <a class="s-option__link btn--e-brand-shadow" href="{{ url('/checkout') }}">PROCEED TO CHECKOUT</a>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
    </div>
    @endforeach
    @include('user_layouts.quick_model')
    <!--====== End - Quick Look Modal ======-->

    <!--====== Add to Cart Modal ======-->
    @include('user_layouts.add_to_cart')
    <!--====== End - Add to Cart Modal ======-->
    <!--====== End - Modal Section ======-->
@endsection
