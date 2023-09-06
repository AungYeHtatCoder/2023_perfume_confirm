 @extends('user_layouts.master')

 @section('title', 'Product Detail')

 @section('content')
 <div class="app-content">

  <!--====== Section 1 ======-->
  <div class="u-s-p-t-90">
   <div class="container">
    <div class="row">
     <div class="col-lg-5">

      <!--====== Product Breadcrumb ======-->
      <div class="pd-breadcrumb u-s-m-b-30">
       <ul class="pd-breadcrumb__list">
        <li class="has-separator">

         <a href="index.hml">Home</a>
        </li>
        <li class="has-separator">

         <a href="shop-side-version-2.html">Men</a>
        </li>

        <li class="is-marked">

         <a href="shop-side-version-2.html">Ysl texudo</a>
        </li>
       </ul>
      </div>
      <!--====== End - Product Breadcrumb ======-->


      <!--====== Product Detail Zoom ======-->
      <!-- <div class="pd u-s-m-b-30">
                                <div class="slider-fouc pd-wrap">
                                    <div id="pd-o-initiate">

                                        <div class="pd-o-img-wrap" data-src="images/product/product_d_2.jpg">

                                            <img class="u-img-fluid" src="images/product/product_d_2.jpg" data-zoom-image="images/product/product_d_2.jpg" alt="">

                                        </div>

                                    </div>

                                    <span class="pd-text">Click for larger zoom</span>
                                </div>
                                <div class="u-s-m-t-15">
                                    <div class="slider-fouc">
                                        <div id="pd-o-thumbnail">
                                            <div>

                                                <img class="u-img-fluid" src="images/product/product_d_2.jpg" alt=""></div>

                                        </div>
                                    </div>
                                </div>
                            </div> -->

      <div>
       <img class="u-img-fluid" src="{{ asset('assets/img/products/'.$product->image)}}"
        data-zoom-image="{{ asset('assets/img/products/'.$product->image)}}" alt="">
      </div>
      <!--====== End - Product Detail Zoom ======-->
     </div>
     <div class="col-lg-7">

      <!--====== Product Right Side Details ======-->
      <div class="pd-detail">
       <div>

        <span class="pd-detail__name">{{ $product->name }} </span>
       </div>
       <div>
        <div class="pd-detail__inline">

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
          <div class="u-s-m-t-15">
           <form class="pd-detail__form">
            <div class="pd-detail-inline-2">
             <div class="u-s-m-b-15">

              <!--====== Input Counter ======-->
              <div class="input-counter">

               <span class="input-counter__minus fas fa-minus"></span>

               <input class="input-counter__text input-counter--text-primary-style" type="text" value="1" data-min="1"
                data-max="1000">

               <span class="input-counter__plus fas fa-plus"></span>
              </div>
              <!--====== End - Input Counter ======-->
             </div>
             <div class="u-s-m-b-15">

              <a href="cart.html" class="btn btn--e-brand-b-2" type="button">Add to Cart</a>
             </div>
            </div>
           </form>
          </div>
          <!-- <div class="u-s-m-b-15">
                                    <div class="pd-detail__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>

                                        <span class="pd-detail__review u-s-m-l-4">

                                            <a data-click-scroll="#view-review">23 Reviews</a></span></div>
                                </div> -->
          <div class="u-s-m-b-15">
           <div class="pd-detail__inline">
            @foreach($product->sizes as $size)
            <span
             class="pd-detail__{{$size->pivot->qty > 0 ? 'stock' : 'left'}}">{{$size->pivot->qty > 0 ? 'In Stock' : 'Out of Stock'}}</span>
            @endforeach
           </div>
          </div>


          <span>
           Scent:
           @foreach ($product->scents as $scent)
           <small
            style="background: rgb(255, 85, 0); color: #fcfcfc; padding: 1px 5px; border-radius:2px;">{{ $scent->scent_name }}</small>
           @endforeach
          </span>

          <div class="u-s-m-t-30">

           <span class="pd-detail__preview-desc">{!! $product->description !!}</span>
          </div>



          <div class="u-s-m-b-15">

           <span class="pd-detail__label u-s-m-b-8">Product Policy:</span>
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
           </ul>
          </div>
        </div>
        <!--====== End - Product Right Side Details ======-->
       </div>
      </div>
     </div>
    </div>





    <!--====== End - Product Detail Tab ======-->
    <div class="u-s-p-b-90">

     <!--====== Section Intro ======-->
     <div class="section__intro u-s-m-b-46">
      <div class="container">
       <div class="row">
        <div class="col-lg-12">
         <div class="section__text-wrap">
          <h1 class="section__heading u-c-secondary u-s-m-b-12">Related Products</h1>

          <span class="section__span u-c-grey">PRODUCTS THAT YOU MAY INTEREST</span>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!--====== End - Section Intro ======-->


     <!--====== Section Content ======-->
     <div class="section__content">
      <div class="container">
       <div class="slider-fouc">
        <div class="owl-carousel product-slider" data-item="4">
         <div class="u-s-m-b-30">
          <div class="product-o product-o--hover-on">
           <div class="product-o__wrap">

            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

             <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_19.jpg')}}"
              alt=""></a>
            <div class="product-o__action-wrap">
             <ul class="product-o__action-list">
              <li>

               <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top"
                title="Quick View"><i class="fas fa-search-plus"></i></a>
              </li>
              <li>

               <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top"
                title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
              </li>
              <!-- <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li> -->
              <!-- <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li> -->
             </ul>
            </div>
           </div>

           <span class="product-o__category">

            <a href="shop-side-version-2.html">Category Name</a></span>

           <span class="product-o__name">

            <a href="product-detail.html">L'eau D'issey (issey Miyake)</a></span>


           <span class="product-o__price">$125.00

            <span class="product-o__discount">$160.00</span></span>
          </div>
         </div>
         <div class="u-s-m-b-30">
          <div class="product-o product-o--hover-on">
           <div class="product-o__wrap">

            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

             <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_21.jpg')}}"
              alt=""></a>
            <div class="product-o__action-wrap">
             <ul class="product-o__action-list">
              <li>

               <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top"
                title="Quick View"><i class="fas fa-search-plus"></i></a>
              </li>
              <li>

               <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top"
                title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
              </li>
              <!-- <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li> -->
             </ul>
            </div>
           </div>

           <span class="product-o__category">

            <a href="shop-side-version-2.html">Category Name</a></span>

           <span class="product-o__name">

            <a href="product-detail.html">SVersace Man</a></span>


           <span class="product-o__price">$125.00

            <span class="product-o__discount">$160.00</span></span>
          </div>
         </div>
         <div class="u-s-m-b-30">
          <div class="product-o product-o--hover-on">
           <div class="product-o__wrap">

            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

             <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_22.jpg')}}"
              alt=""></a>
            <div class="product-o__action-wrap">
             <ul class="product-o__action-list">
              <li>

               <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top"
                title="Quick View"><i class="fas fa-search-plus"></i></a>
              </li>
              <li>

               <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top"
                title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
              </li>
              <!-- <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li> -->
             </ul>
            </div>
           </div>

           <span class="product-o__category">

            <a href="shop-side-version-2.html">Category Name</a></span>

           <span class="product-o__name">

            <a href="product-detail.html">Acqua Di Gio</a></span>


           <span class="product-o__price">$125.00

            <span class="product-o__discount">$160.00</span></span>
          </div>
         </div>
         <div class="u-s-m-b-30">
          <div class="product-o product-o--hover-on">
           <div class="product-o__wrap">

            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

             <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_23.jpg')}}"
              alt=""></a>
            <div class="product-o__action-wrap">
             <ul class="product-o__action-list">
              <li>

               <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top"
                title="Quick View"><i class="fas fa-search-plus"></i></a>
              </li>
              <li>

               <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top"
                title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
              </li>
              <!-- <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                                                    <li>

                                                        <a href="signin.html" data-tooltip="tooltip" data-placement="top" title="Email me When the price drops"><i class="fas fa-envelope"></i></a></li> -->
             </ul>
            </div>
           </div>

           <span class="product-o__category">

            <a href="shop-side-version-2.html">Category Name</a></span>

           <span class="product-o__name">

            <a href="product-detail.html">RMontblanc Explorer</a></span>


           <span class="product-o__price">$125.00

            <span class="product-o__discount">$160.00</span></span>
          </div>
         </div>
         <div class="u-s-m-b-30">
          <div class="product-o product-o--hover-on">
           <div class="product-o__wrap">

            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

             <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_24.jpg')}}"
              alt=""></a>
            <div class="product-o__action-wrap">
             <ul class="product-o__action-list">
              <li>

               <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top"
                title="Quick View"><i class="fas fa-search-plus"></i></a>
              </li>
              <li>

               <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top"
                title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
              </li>


             </ul>
            </div>
           </div>

           <span class="product-o__category">

            <a href="shop-side-version-2.html">Category Name</a></span>

           <span class="product-o__name">

            <a href="product-detail.html">Versace Eros</a></span>


           <span class="product-o__price">$125.00

            <span class="product-o__discount">$160.00</span></span>
          </div>
         </div>
         <div class="u-s-m-b-30">
          <div class="product-o product-o--hover-on">
           <div class="product-o__wrap">

            <a class="aspect aspect--bg-grey aspect--square u-d-block" href="product-detail.html">

             <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_20.jpg')}}"
              alt=""></a>
            <div class="product-o__action-wrap">
             <ul class="product-o__action-list">
              <li>

               <a data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top"
                title="Quick View"><i class="fas fa-search-plus"></i></a>
              </li>
              <li>

               <a data-modal="modal" data-modal-id="#add-to-cart" data-tooltip="tooltip" data-placement="top"
                title="Add to Cart"><i class="fas fa-plus-circle"></i></a>
              </li>


             </ul>
            </div>
           </div>

           <span class="product-o__category">

            <a href="shop-side-version-2.html">Category Name</a></span>

           <span class="product-o__name">

            <a href="product-detail.html">Nautica Voyage</a></span>


           <span class="product-o__price">$125.00

            <span class="product-o__discount">$160.00</span></span>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <!--====== End - Section Content ======-->
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