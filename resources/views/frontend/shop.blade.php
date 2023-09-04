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
            <h1 class="shop-w__h">CATEGORY</h1>

            <span class="fas fa-minus shop-w__toggle" data-target="#s-category" data-toggle="collapse"></span>
           </div>
           <div class="shop-w__wrap collapse show" id="s-category">
            <ul class="shop-w__category-list gl-scroll">
             <li class="has-list">

              <a href="#">All</a>

              <!-- <span class="category-list__text u-s-m-l-6">(23)</span> -->

              <!-- <span class="js-shop-category-span is-expanded fas fa-plus u-s-m-l-6"></span> -->
              
             </li>
             <li class="has-list">

              <a href="#">Men</a>

              <!-- <span class="category-list__text u-s-m-l-6">(5)</span> -->

              <!-- <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span> -->
              
             </li>
             <li class="has-list">

              <a href="#">Women</a>

              <!-- <span class="category-list__text u-s-m-l-6">(5)</span> -->

              <!-- <span class="js-shop-category-span fas fa-plus u-s-m-l-6"></span> -->
              
             </li>

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
             <li>

              <!--====== Check Box ======-->
              <div class="check-box">

               <input type="checkbox" id="xs">
               <div class="check-box__state check-box__state--primary">

                <label class="check-box__label" for="xs">10ml</label>
               </div>
              </div>
              <!--====== End - Check Box ======-->

              <!-- <span class="shop-w__total-text">(2)</span> -->
             </li>
             <li>

              <!--====== Check Box ======-->
              <div class="check-box">

               <input type="checkbox" id="small">
               <div class="check-box__state check-box__state--primary">

                <label class="check-box__label" for="small">30ml</label>
               </div>
              </div>
              <!--====== End - Check Box ======-->
             </li>
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
             <li>

              <!--====== Check Box ======-->
              <div class="check-box">

               <input type="checkbox" id="dior">
               <div class="check-box__state check-box__state--primary">

                <label class="check-box__label" for="dior">Dior</label>
               </div>
              </div>
              <!--====== End - Check Box ======-->

              <!-- <span class="shop-w__total-text">(2)</span> -->
             </li>
             <li>

              <!--====== Check Box ======-->
              <div class="check-box">

               <input type="checkbox" id="kilian">
               <div class="check-box__state check-box__state--primary">

                <label class="check-box__label" for="kilian">Kilian</label>
               </div>
              </div>
              <!--====== End - Check Box ======-->

             </li>

             <li>

              <!--====== Check Box ======-->
              <div class="check-box">

               <input type="checkbox" id="tomford">
               <div class="check-box__state check-box__state--primary">

                <label class="check-box__label" for="tomford">TOMFORD</label>
               </div>
              </div>
              <!--====== End - Check Box ======-->

             </li>

             <li>

              <!--====== Check Box ======-->
              <div class="check-box">

               <input type="checkbox" id="escada">
               <div class="check-box__state check-box__state--primary">

                <label class="check-box__label" for="escada">Escada</label>
               </div>
              </div>
              <!--====== End - Check Box ======-->

             </li>

             <li>

              <!--====== Check Box ======-->
              <div class="check-box">

               <input type="checkbox" id="ysl">
               <div class="check-box__state check-box__state--primary">

                <label class="check-box__label" for="ysl">YSL</label>
               </div>
              </div>
              <!--====== End - Check Box ======-->

             </li>



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
         <div class="shop-p__meta-wrap u-s-m-b-60">
          <div class="shop-p__meta-text-2">

           <span>Related Searches:</span>

           <a class="gl-tag btn--e-brand-shadow" href="#">Popular</a>

           <a class="gl-tag btn--e-brand-shadow" href="#">Men Ranges</a>

           <a class="gl-tag btn--e-brand-shadow" href="#">Women Ranges</a>
          </div>
         </div>
         <div class="shop-p__tool-style">
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
         </div>
        </div>
        <div class="shop-p__collection">
         <div class="row is-list-active">
          <div class="col-lg-4 col-md-6 col-sm-6">
           <div class="product-m">
            <div class="product-m__thumb">

             <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/product_detail') }}">

              <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_23.jpg')}}"
               alt=""></a>
             <div class="product-m__quick-look">

              <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
               data-placement="top" title="Quick Look"></a>
             </div>
             <div class="product-m__add-cart">

              <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a>
             </div>
            </div>
            <div class="product-m__content">
             <div class="product-m__category">

              <a href="shop-side-version-2.html">Category Name</a>
             </div>
             <div class="product-m__name">

              <a href="{{url('/product_detail') }}">New Fashion B Nice Elegant</a>
             </div>
             <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
               class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

              <span class="product-m__review">(23)</span>
             </div>
             <div class="product-m__price">$125.00</div>
             <div class="product-m__hover">
              <div class="product-m__preview-description">

               <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</span>
              </div>
              <div class="product-m__wishlist">

               <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
           <div class="product-m">
            <div class="product-m__thumb">

             <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/product_detail') }}">

              <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_20.jpg')}}"
               alt=""></a>
             <div class="product-m__quick-look">

              <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
               data-placement="top" title="Quick Look"></a>
             </div>
             <div class="product-m__add-cart">

              <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a>
             </div>
            </div>
            <div class="product-m__content">
             <div class="product-m__category">

              <a href="shop-side-version-2.html">Category Name</a>
             </div>
             <div class="product-m__name">

              <a href="{{url('/product_detail') }}">Eternity</a>
             </div>
             <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
               class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

              <span class="product-m__review">(23)</span>
             </div>
             <div class="product-m__price">$125.00</div>
             <div class="product-m__hover">
              <div class="product-m__preview-description">

               <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</span>
              </div>
              <div class="product-m__wishlist">

               <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
           <div class="product-m">
            <div class="product-m__thumb">

             <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/product_detail') }}">

              <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_21.jpg')}}"
               alt=""></a>
             <div class="product-m__quick-look">

              <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
               data-placement="top" title="Quick Look"></a>
             </div>
             <div class="product-m__add-cart">

              <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a>
             </div>
            </div>
            <div class="product-m__content">
             <div class="product-m__category">

              <a href="shop-side-version-2.html">Category Name</a>
             </div>
             <div class="product-m__name">

              <a href="{{url('/product_detail') }}">New Dress B Nice Elegant</a>
             </div>
             <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
               class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

              <span class="product-m__review">(23)</span>
             </div>
             <div class="product-m__price">$125.00</div>
             <div class="product-m__hover">
              <div class="product-m__preview-description">

               <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</span>
              </div>
              <div class="product-m__wishlist">

               <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
           <div class="product-m">
            <div class="product-m__thumb">

             <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/product_detail') }}">

              <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_22.jpg')}}"
               alt=""></a>
             <div class="product-m__quick-look">

              <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
               data-placement="top" title="Quick Look"></a>
             </div>
             <div class="product-m__add-cart">

              <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a>
             </div>
            </div>
            <div class="product-m__content">
             <div class="product-m__category">

              <a href="shop-side-version-2.html">Category Name</a>
             </div>
             <div class="product-m__name">

              <a href="{{url('/product_detail') }}">Obsession</a>
             </div>
             <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
               class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

              <span class="product-m__review">(23)</span>
             </div>
             <div class="product-m__price">$125.00</div>
             <div class="product-m__hover">
              <div class="product-m__preview-description">

               <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</span>
              </div>
              <div class="product-m__wishlist">

               <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
           <div class="product-m">
            <div class="product-m__thumb">

             <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/product_detail') }}">

              <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_23.jpg')}}"
               alt=""></a>
             <div class="product-m__quick-look">

              <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
               data-placement="top" title="Quick Look"></a>
             </div>
             <div class="product-m__add-cart">

              <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a>
             </div>
            </div>
            <div class="product-m__content">
             <div class="product-m__category">

              <a href="shop-side-version-2.html">Category Name</a>
             </div>
             <div class="product-m__name">

              <a href="{{url('/product_detail') }}">Versace Eros</a>
             </div>
             <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
               class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

              <span class="product-m__review">(23)</span>
             </div>
             <div class="product-m__price">$125.00</div>
             <div class="product-m__hover">
              <div class="product-m__preview-description">

               <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</span>
              </div>
              <div class="product-m__wishlist">

               <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
           <div class="product-m">
            <div class="product-m__thumb">

             <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/product_detail') }}">

              <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_24.jpg')}}"
               alt=""></a>
             <div class="product-m__quick-look">

              <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
               data-placement="top" title="Quick Look"></a>
             </div>
             <div class="product-m__add-cart">

              <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a>
             </div>
            </div>
            <div class="product-m__content">
             <div class="product-m__category">

              <a href="shop-side-version-2.html">Category</a>
             </div>
             <div class="product-m__name">

              <a href="{{url('/product_detail') }}">Cool Water</a>
             </div>
             <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
               class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

              <span class="product-m__review">(23)</span>
             </div>
             <div class="product-m__price">$125.00</div>
             <div class="product-m__hover">
              <div class="product-m__preview-description">

               <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</span>
              </div>
              <div class="product-m__wishlist">

               <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
           <div class="product-m">
            <div class="product-m__thumb">

             <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/product_detail') }}">

              <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_24.jpg')}}"
               alt=""></a>
             <div class="product-m__quick-look">

              <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
               data-placement="top" title="Quick Look"></a>
             </div>
             <div class="product-m__add-cart">

              <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a>
             </div>
            </div>
            <div class="product-m__content">
             <div class="product-m__category">

              <a href="shop-side-version-2.html">Category Name</a>
             </div>
             <div class="product-m__name">

              <a href="{{url('/product_detail') }}">RMontblanc Explorer</a>
             </div>
             <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
               class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

              <span class="product-m__review">(23)</span>
             </div>
             <div class="product-m__price">$125.00</div>
             <div class="product-m__hover">
              <div class="product-m__preview-description">

               <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</span>
              </div>
              <div class="product-m__wishlist">

               <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
           <div class="product-m">
            <div class="product-m__thumb">

             <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/product_detail') }}">

              <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_20.jpg')}}"
               alt=""></a>
             <div class="product-m__quick-look">

              <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
               data-placement="top" title="Quick Look"></a>
             </div>
             <div class="product-m__add-cart">

              <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a>
             </div>
            </div>
            <div class="product-m__content">
             <div class="product-m__category">

              <a href="shop-side-version-2.html">Category Name</a>
             </div>
             <div class="product-m__name">

              <a href="{{url('/product_detail') }}">Acqua Di Gio</a>
             </div>
             <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
               class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

              <span class="product-m__review">(23)</span>
             </div>
             <div class="product-m__price">$125.00

              <span class="product-m__discount">$22.00</span>
             </div>
             <div class="product-m__hover">
              <div class="product-m__preview-description">

               <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</span>
              </div>
              <div class="product-m__wishlist">

               <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
           <div class="product-m">
            <div class="product-m__thumb">

             <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/product_detail') }}">

              <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_24.jpg')}}"
               alt=""></a>
             <div class="product-m__quick-look">

              <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
               data-placement="top" title="Quick Look"></a>
             </div>
             <div class="product-m__add-cart">

              <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a>
             </div>
            </div>
            <div class="product-m__content">
             <div class="product-m__category">

              <a href="shop-side-version-2.html">Category Name</a>
             </div>
             <div class="product-m__name">

              <a href="{{url('/product_detail') }}">L'eau D'issey (issey Miyake)</a>
             </div>
             <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
               class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

              <span class="product-m__review">(23)</span>
             </div>
             <div class="product-m__price">$125.00

              <span class="product-m__discount">$22.00</span>
             </div>
             <div class="product-m__hover">
              <div class="product-m__preview-description">

               <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</span>
              </div>
              <div class="product-m__wishlist">

               <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
           <div class="product-m">
            <div class="product-m__thumb">

             <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/product_detail') }}">

              <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_24.jpg')}}"
               alt=""></a>
             <div class="product-m__quick-look">

              <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
               data-placement="top" title="Quick Look"></a>
             </div>
             <div class="product-m__add-cart">

              <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a>
             </div>
            </div>
            <div class="product-m__content">
             <div class="product-m__category">

              <a href="shop-side-version-2.html">Category Name</a>
             </div>
             <div class="product-m__name">

              <a href="{{url('/product_detail') }}">SVersace Man</a>
             </div>
             <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
               class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

              <span class="product-m__review">(23)</span>
             </div>
             <div class="product-m__price">$125.00

              <span class="product-m__discount">$22.00</span>
             </div>
             <div class="product-m__hover">
              <div class="product-m__preview-description">

               <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</span>
              </div>
              <div class="product-m__wishlist">

               <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
           <div class="product-m">
            <div class="product-m__thumb">

             <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/product_detail') }}">

              <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_20.jpg')}}"
               alt=""></a>
             <div class="product-m__quick-look">

              <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
               data-placement="top" title="Quick Look"></a>
             </div>
             <div class="product-m__add-cart">

              <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a>
             </div>
            </div>
            <div class="product-m__content">
             <div class="product-m__category">

              <a href="shop-side-version-2.html">Category Name</a>
             </div>
             <div class="product-m__name">

              <a href="{{url('/product_detail') }}">Nautica Voyage</a>
             </div>
             <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
               class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

              <span class="product-m__review">(23)</span>
             </div>
             <div class="product-m__price">$125.00

              <span class="product-m__discount">$22.00</span>
             </div>
             <div class="product-m__hover">
              <div class="product-m__preview-description">

               <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</span>
              </div>
              <div class="product-m__wishlist">

               <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
              </div>
             </div>
            </div>
           </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6">
           <div class="product-m">
            <div class="product-m__thumb">

             <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{url('/product_detail') }}">

              <img class="aspect__img" src="{{ asset('user_app/assets/images/product/electronic/product_21.jpg')}}"
               alt=""></a>
             <div class="product-m__quick-look">

              <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
               data-placement="top" title="Quick Look"></a>
             </div>
             <div class="product-m__add-cart">

              <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a>
             </div>
            </div>
            <div class="product-m__content">
             <div class="product-m__category">

              <a href="shop-side-version-2.html">Category Name</a>
             </div>
             <div class="product-m__name">

              <a href="{{url('/product_detail') }}">SVersace Man</a>
             </div>
             <div class="product-m__rating gl-rating-style"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
               class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

              <span class="product-m__review">(23)</span>
             </div>
             <div class="product-m__price">$125.00

              <span class="product-m__discount">$22.00</span>
             </div>
             <div class="product-m__hover">
              <div class="product-m__preview-description">

               <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</span>
              </div>
              <div class="product-m__wishlist">

               <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
              </div>
             </div>
            </div>
           </div>
          </div>
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
