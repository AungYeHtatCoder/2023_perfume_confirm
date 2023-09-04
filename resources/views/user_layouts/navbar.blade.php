 <header class="header--style-1">
  <!--====== Nav 2 ======-->
  <nav class="secondary-nav-wrapper" style="box-shadow: 1px 2px 3px rgb(210, 210, 210);">
   <div class="container">

    <!--====== Secondary Nav ======-->
    <div class="secondary-nav">
      <div>
      <a href="{{ url('/') }}">
        <div class="logo">
            <img src="{{ asset('assets/img/logo.png') }}" width="50px" height="50px" alt="">
            <h2>In Scents</h2>
        </div>

      </a>
     </div>
     <!--====== End - Dropdown Main plugin ======-->


     <!--====== Dropdown Main plugin ======-->
     <div class="menu-init" id="navigation2">

      <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cog" type="button"></button>

      <!--====== Menu ======-->
      <div class="ah-lg-mode">

       <span class="ah-close">✕ Close</span>

       <!--====== List ======-->
       <ul class="ah-list ah-list--design2 ah-list--link-color-secondary">
        <li>

         <a href="{{ url('/') }}">HOME</a>
        </li>
        <li>
         <a href="{{ url('/aboutus')}}">ABOUT US</a>
        </li>
        <li>
         <a href="{{ url('/contact')}}">CONTACT</a>
        </li>
        <li>

         <a href="{{ url('/shop') }}">SHOP NOW</a>
        </li>
       </ul>
       <!--====== End - List ======-->
      </div>
      <!--====== End - Menu ======-->
     </div>
     <!--====== End - Dropdown Main plugin ======-->


     <!--====== Dropdown Main plugin ======-->
     <div class="menu-init" id="navigation3">

      <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-shopping-bag toggle-button-shop"
       type="button"></button>

      <span class="total-item-round">2</span>

      <!--====== Menu ======-->
      <div class="ah-lg-mode">

       <span class="ah-close">✕ Close</span>

       <!--====== List ======-->
       <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
        <li>
            <form action="">
                <input type="text" class="input-text input-text--border-radius input-text--style-1" id="main-search" placeholder="Search">
            </form>
        </li>
        <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">

         <a><i class="far fa-user-circle"></i></a>

         <!--====== Dropdown ======-->

         <span class="js-menu-toggle"></span>
         <ul style="width:120px">
            @auth
            <li>
                <a href="{{ url('/dashboard') }}">
                    <i class="fas fa-user-circle u-s-m-r-6"></i>
                    <span>Account</span>
                </a>
              </li>
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-lock-open u-s-m-r-6"></i>
                    <span>Signout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            @endauth

            @guest
            <li>
                <a href="{{ url('/signup') }}">
                    <i class="fas fa-user-plus u-s-m-r-6"></i>
                    <span>Signup</span>
                </a>
              </li>
              <li>
                <a href="{{ url('/signin') }}">
                    <i class="fas fa-lock u-s-m-r-6"></i>
                    <span>Signin</span>
                </a>
            </li>
            @endguest
         </ul>
         <!--====== End - Dropdown ======-->
        </li>
        <li data-tooltip="tooltip" data-placement="left" title="Contact">

         <a href="tel:+0900901904"><i class="fas fa-phone-volume"></i></a>
        </li>
        <li data-tooltip="tooltip" data-placement="left" title="Mail">
         <a href="mailto:contact@domain.com"><i class="far fa-envelope"></i></a>
        </li>
        <li class="has-dropdown">

         <a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>
            @auth
            <span class="total-item-round">{{ $carts->count() }}</span>
            @endauth
            @guest
            <span class="total-item-round">0</span>
            @endguest

         </a>

         <!--====== Dropdown ======-->

         <span class="js-menu-toggle"></span>
         <div class="mini-cart">

          <!--====== Mini Product Container ======-->
          <div class="mini-product-container gl-scroll u-s-m-b-15">
            @auth
                <!--====== Card for mini cart ======-->
                @foreach ($carts as $cart)
                <div class="card-mini-product">
                        <div class="mini-product">
                            <div class="mini-product__image-wrapper">

                            <a class="mini-product__link" href="{{ url('/product-detail/'.$cart->products[0]->id) }}">

                            <img class="u-img-fluid" src="{{ asset('assets/img/products/'.$cart->products[0]->image)}}"
                                alt=""></a>
                            </div>
                            <div class="mini-product__info-wrapper">

                            <span class="mini-product__category">

                                <a href="{{ url('/brand/'.$cart->products[0]->brand_id) }}">
                                    {{ $cart->products[0]->brand->brand_name }}
                                </a>
                            </span>

                            <span class="mini-product__name">

                            <a href="{{ url('/product-detail/'.$cart->products[0]->id) }}">{{ $cart->products[0]->name }}</a></span>

                            <span class="mini-product__quantity">{{ $cart->qty }} x</span>

                            <span class="mini-product__price">
                                {{ number_format($cart->unit_price) }} MMK
                            </span>
                            </div>
                        </div>

                        <a href="{{ url('/cart/delete/'.$cart->id) }}" class="mini-product__delete-link far fa-trash-alt"></a>
                </div>
                @endforeach
                <!--====== End - Card for mini cart ======-->
            @endauth

          </div>
          <!--====== End - Mini Product Container ======-->


          <!--====== Mini Product Statistics ======-->
          <div class="mini-product-stat">
           <div class="mini-total">

            <span class="subtotal-text">SUBTOTAL</span>

            <span class="subtotal-value">
                @auth
                {{ number_format($carts->sum('total_price')) }} MMK
                @endauth
                @guest
                    0 MMK
                @endguest
            </span>
           </div>
           <div class="mini-action">

            <a class="mini-link btn--e-brand-b-2" href="{{ url('/checkout')}}">PROCEED TO CHECKOUT</a>

            <a class="mini-link btn--e-transparent-secondary-b-2" href="{{ url('/cart')}}">VIEW CART</a>
           </div>
          </div>
          <!--====== End - Mini Product Statistics ======-->
         </div>
         <!--====== End - Dropdown ======-->
        </li>
       </ul>
       <!--====== End - List ======-->
      </div>
      <!--====== End - Menu ======-->
     </div>
     <!--====== End - Dropdown Main plugin ======-->
    </div>
    <!--====== End - Secondary Nav ======-->
   </div>
  </nav>
  <!--====== End - Nav 2 ======-->
 </header>
