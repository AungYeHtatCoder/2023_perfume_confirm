 <header class="header--style-1">

  <!--====== Nav 1 ======-->
  <nav class="primary-nav primary-nav-wrapper--border">
   <div class="container">

    <!--====== Primary Nav ======-->
    <div class="primary-nav">

     <!--====== Main Logo ======-->

     <!-- <a class="main-logo" href="index.html">

                            <img src="images/logo/logo-1.png" alt=""></a> -->

     <div>
      <a href="index.html">
       <h2>In Scents</h2>
      </a>
     </div>
     <!--====== End - Main Logo ======-->


     <!--====== Search Form ======-->
     <form class="main-form">

      <label for="main-search"></label>

      <input class="input-text input-text--border-radius input-text--style-1" type="text" id="main-search"
       placeholder="Search">

      <button class="btn btn--icon--search fas fa-search main-search-button" type="submit"></button>
     </form>
     <!--====== End - Search Form ======-->


     <!--====== Dropdown Main plugin ======-->
     <div class="menu-init" id="navigation">

      <button class="btn btn--icon toggle-button toggle-button--secondary fas fa-cogs" type="button"></button>

      <!--====== Menu ======-->
      <div class="ah-lg-mode">

       <span class="ah-close">✕ Close</span>

       <!--====== List ======-->
       <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
        <li class="has-dropdown" data-tooltip="tooltip" data-placement="left" title="Account">

         <a><i class="far fa-user-circle"></i></a>

         <!--====== Dropdown ======-->

         <span class="js-menu-toggle"></span>
         <ul style="width:120px">
          <li>

           <a href="dashboard.html"><i class="fas fa-user-circle u-s-m-r-6"></i>

            <span>Account</span></a>
          </li>
          <li>

           <a href="signup.html"><i class="fas fa-user-plus u-s-m-r-6"></i>

            <span>Signup</span></a>
          </li>
          <li>

           <a href="signin.html"><i class="fas fa-lock u-s-m-r-6"></i>

            <span>Signin</span></a>
          </li>
          {{-- <li>

           <a href="signup.html"><i class="fas fa-lock-open u-s-m-r-6"></i>

            <span>Signout</span></a>
          </li> --}}
         </ul>
         <!--====== End - Dropdown ======-->
        </li>

        <li data-tooltip="tooltip" data-placement="left" title="Contact">

         <a href="tel:+0900901904"><i class="fas fa-phone-volume"></i></a>
        </li>
        <li data-tooltip="tooltip" data-placement="left" title="Mail">

         <a href="mailto:contact@domain.com"><i class="far fa-envelope"></i></a>
        </li>
       </ul>
       <!--====== End - List ======-->
      </div>
      <!--====== End - Menu ======-->
     </div>
     <!--====== End - Dropdown Main plugin ======-->
    </div>
    <!--====== End - Primary Nav ======-->
   </div>
  </nav>
  <!--====== End - Nav 1 ======-->


  <!--====== Nav 2 ======-->
  <nav class="secondary-nav-wrapper">
   <div class="container">

    <!--====== Secondary Nav ======-->
    <div class="secondary-nav">

     <!--====== Dropdown Main plugin ======-->
     <div class="menu-init" id="navigation1">
        <ul class="ah-list ah-list--design1 ah-list--link-color-secondary">
            <li>
                <a href="/"><i class="fas fa-home"></i></a>
            </li>
        </ul>
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

         <a href="{{ url('/') }}">NEW ARRIVALS</a>
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
        <li class="has-dropdown">

         <a class="mini-cart-shop-link"><i class="fas fa-shopping-bag"></i>

          <span class="total-item-round">0</span>
         </a>

         <!--====== Dropdown ======-->

         <span class="js-menu-toggle"></span>
         <div class="mini-cart">

          <!--====== Mini Product Container ======-->
          <div class="mini-product-container gl-scroll u-s-m-b-15">
           <!--====== Card for mini cart ======-->
           <div class="card-mini-product">
            <div class="mini-product">
             <div class="mini-product__image-wrapper">

              <a class="mini-product__link" href="product-detail.html">

               <img class="u-img-fluid" src="{{ asset('user_app/assets/images/product/women/product8.jpg')}}"
                alt=""></a>
             </div>
             <div class="mini-product__info-wrapper">

              <span class="mini-product__category">

               <a href="shop-side-version-2.html">Women Clothing</a></span>

              <span class="mini-product__name">

               <a href="product-detail.html">New Dress D Nice Elegant</a></span>

              <span class="mini-product__quantity">1 x</span>

              <span class="mini-product__price">$8</span>
             </div>
            </div>

            <a class="mini-product__delete-link far fa-trash-alt"></a>
           </div>
           <!--====== End - Card for mini cart ======-->
          </div>
          <!--====== End - Mini Product Container ======-->


          <!--====== Mini Product Statistics ======-->
          <div class="mini-product-stat">
           <div class="mini-total">

            <span class="subtotal-text">SUBTOTAL</span>

            <span class="subtotal-value">$16</span>
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