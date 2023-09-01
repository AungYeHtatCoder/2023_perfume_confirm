  @extends('user_layouts.master')

  @section('title', 'Cart')

  @section('content')

  <div class="app-content">

   <!--====== Section 1 ======-->
   <div class="u-s-p-y-60">

    <!--====== Section Content ======-->
    <div class="section__content">
     <div class="container">
      <div class="breadcrumb">
       <div class="breadcrumb__wrap">
        <ul class="breadcrumb__list">
         <li class="has-separator">

          <a href="{{ url('/') }}">Home</a>
         </li>
         <li class="is-marked">

          <a href="{{ url('/cart') }}">Cart</a>
         </li>
        </ul>
       </div>
      </div>
     </div>
    </div>
   </div>
   <!--====== End - Section 1 ======-->


   <!--====== Section 2 ======-->
   <div class="u-s-p-b-60">

    <!--====== Section Intro ======-->
    <div class="section__intro u-s-m-b-60">
     <div class="container">
      <div class="row">
       <div class="col-lg-12">
        <div class="section__text-wrap">
         <h1 class="section__heading u-c-secondary">SHOPPING CART</h1>
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
       <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
        <div class="table-responsive">
         <table class="table-p">
          <tbody>

           <!--====== Row ======-->
           @foreach ($cartItems as $product)
           <tr>
            <td>
             <div class="table-p__box">
              <div class="table-p__img-wrap">

               <img class="u-img-fluid" src="{{ asset('assets/img/products/'.$product->image)}}"
                alt="">
              </div>
              <div class="table-p__info">

               <span class="table-p__name">

                <a href="{{ url('/product-detail/'.$product->id) }}">{{ $product->name }}</a></span>

               <span class="table-p__category">

                <a href="{{ url('/brand/'.$product->brand_id) }}">{{ $product->brand->brand_name }}</a></span>
               <ul class="table-p__variant-list">
                <li>

                 <span>
                    Size:
                    @foreach ($product->sizes as $size)
                    <small style="background: rgb(255, 85, 0); color: #fcfcfc; padding: 1px 5px; border-radius:2px;">{{ $product->carts[0]->size_id === $size->id ? $size->name : "" }}</small>

                    @endforeach
                </span>
                </li>
                <li>

                 <span>
                    Scent:
                    @foreach ($product->scents as $scent)
                    <small style="background: rgb(255, 85, 0); color: #fcfcfc; padding: 1px 5px; border-radius:2px;">{{ $scent->scent_name }}</small>
                    @endforeach
                 </span>
                </li>
               </ul>
              </div>
             </div>
            </td>
            <td>

             <span class="table-p__price">
                @foreach ($product->sizes as $size)
                    @if ($product->carts[0]->size_id === $size->id)
                        @if($size->pivot->discount_price < 0 || NULL)
                        {{ number_format($size->pivot->normal_price) }} MMK
                        @else
                        {{ number_format($size->pivot->discount_price) }} MMK
                        @endif
                    @endif
                @endforeach
            </span>
            </td>
            <td>
             <div class="table-p__input-counter-wrap">

              <!--====== Input Counter ======-->
              <div class="input-counter">

               <span class="input-counter__minus fas fa-minus"></span>

               <input class="input-counter__text input-counter--text-primary-style" type="text" value="{{ $product->carts[0]->qty }}" data-min="1"
                data-max="1000">

               <span class="input-counter__plus fas fa-plus"></span>
              </div>
              <!--====== End - Input Counter ======-->
             </div>
            </td>
            <td>
             <div class="table-p__del-wrap">

              <a href="{{ url('/cart/delete/'.$product->carts[0]->id) }}" class="far fa-trash-alt table-p__delete-link"></a>
             </div>
            </td>
           </tr>
           @endforeach

           <!--====== End - Row ======-->
          </tbody>
         </table>
        </div>
       </div>
       <div class="col-lg-12">
        <div class="route-box">
         <div class="route-box__g1">

          <a class="route-box__link" href="{{ url('/shop') }}"><i class="fas fa-long-arrow-alt-left"></i>

           <span>CONTINUE SHOPPING</span></a>
         </div>
         <div class="route-box__g2">

          <a class="route-box__link" href="cart.html"><i class="fas fa-trash"></i>

           <span>CLEAR CART</span></a>

          <a class="route-box__link" href="cart.html"><i class="fas fa-sync"></i>

           <span>UPDATE CART</span></a>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!--====== End - Section Content ======-->
   </div>
   <!--====== End - Section 2 ======-->


   <!--====== Section 3 ======-->
   <div class="u-s-p-b-60">

    <!--====== Section Content ======-->
    <div class="section__content">
     <div class="container">
      <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 u-s-m-b-30">
        <form class="f-cart">
         <div class="row">

          <div class="col-lg-4 col-md-6 u-s-m-b-30">
           <div class="f-cart__pad-box">
            <div class="u-s-m-b-30">
             <table class="f-cart__table">
              <tbody>
               <tr>
                <td>SUBTOTAL</td>
                <td>{{ number_format($cartTotal) }} MMK</td>
               </tr>
               <tr>
                <td>TAX</td>
                <td>0 MMK</td>
               </tr>

               <tr>
                <td>GRAND TOTAL</td>
                <td>{{ number_format($cartTotal) }} MMK</td>
               </tr>
              </tbody>
             </table>
            </div>
            <div>

             <a class="btn btn--e-brand-b-2" style="display: block; text-align:center;" href="{{ url('/checkout') }}"> PROCEED TO CHECKOUT</a>
            </div>
           </div>
          </div>
         </div>
        </form>
       </div>
      </div>
     </div>
    </div>
    <!--====== End - Section Content ======-->
   </div>
   <!--====== End - Section 3 ======-->
  </div>

  @endsection
