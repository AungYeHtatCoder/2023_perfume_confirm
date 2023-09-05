@extends('user_layouts.master')

@section('title', 'Checkout')

@section('content')
<!--====== start - App Content ======-->
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

                                <a href="{{ url('/checkout') }}">Checkout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section 1 ======-->

    <!--====== Section 3 ======-->
    <div class="u-s-p-b-60">
        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="checkout-f">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="checkout-f__h1">DELIVERY INFORMATION</h1>
                            <form class="checkout-f__delivery" action="{{ url('/order') }}" method="POST">
                                @csrf
                                <div class="u-s-m-b-30">
                                <!--====== First Name, Last Name ======-->
                                <div class="u-s-m-b-15">
                                <label class="gl-label" for="billing-fname">USERNAME *</label>
                                <input class="input-text input-text--primary-style" type="text" name="name" required id="billing-fname" data-bill="" value="{{ Auth::user()->name }}">
                                </div>
                                <!--====== End - First Name, Last Name ======-->

                                <!--====== E-MAIL ======-->
                                <div class="u-s-m-b-15">
                                <label class="gl-label" for="billing-email">E-MAIL *</label>
                                <input class="input-text input-text--primary-style" type="email" name="email" required id="billing-email" data-bill="" value="{{ Auth::user()->email }}">
                                </div>
                                <!--====== End - E-MAIL ======-->


                                <!--====== PHONE ======-->
                                <div class="u-s-m-b-15">
                                <label class="gl-label" for="billing-phone">PHONE *</label>
                                <input class="input-text input-text--primary-style" type="number" name="phone" required id="billing-phone" data-bill="" value="{{ Auth::user()->phone }}">
                                </div>
                                <!--====== End - PHONE ======-->


                                <!--====== Street Address ======-->
                                <div class="u-s-m-b-15">
                                <label class="gl-label" for="billing-street">FULL ADDRESS *</label>
                                <input class="input-text input-text--primary-style" name="address" type="text" required id="billing-street"
                                placeholder="House name and street name" data-bill="" value="{{ Auth::user()->address }}">
                                </div>
                                <!--====== End - Street Address ======-->

                                {{-- Order Note --}}
                                <div class="u-s-m-b-10">
                                <label class="gl-label" for="order-note">ORDER NOTE</label><textarea
                                class="text-area text-area--primary-style" id="order-note" name="order_note"></textarea>
                                </div>
                                <div>

                                <button class="btn btn--e-transparent-brand-b-2" type="submit">SAVE</button>
                                </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6">
                            <h1 class="checkout-f__h1">ORDER SUMMARY</h1>
                            <!--====== Order Summary ======-->
                            <div class="o-summary">
                                <div class="o-summary__section u-s-m-b-30">
                                    <div class="o-summary__item-wrap gl-scroll">
                                        <div class="o-card">
                                            <div class="o-card__flex">
                                                <div class="o-card__img-wrap">

                                                <img class="u-img-fluid" src="{{ asset('user_app/assets/images/product/electronic/product_19.jpg')}}"
                                                alt="">
                                                </div>
                                                <div class="o-card__info-wrap">

                                                <span class="o-card__name">

                                                <a href="product-detail.html">Montblanc Explorer</a></span>

                                                <span class="o-card__quantity">Quantity x 1</span>

                                                <span class="o-card__price">$150.00</span>
                                                </div>
                                            </div>

                                            <a class="o-card__del far fa-trash-alt"></a>
                                        </div>
                                        <div class="o-card">
                                            <div class="o-card__flex">
                                                <div class="o-card__img-wrap">
                                                    <img class="u-img-fluid" src="{{ asset('user_app/assets/images/product/electronic/product_22.jpg')}}" alt="">
                                                </div>
                                                <div class="o-card__info-wrap">
                                                    <span class="o-card__name">
                                                        <a href="product-detail.html">Acqua Di Gio</a>
                                                    </span>

                                                    <span class="o-card__quantity">Quantity x 1</span>

                                                    <span class="o-card__price">$150.00</span>
                                                </div>
                                            </div>
                                            <a class="o-card__del far fa-trash-alt"></a>
                                        </div>
                                        <div class="o-card">
                                            <div class="o-card__flex">
                                                <div class="o-card__img-wrap">
                                                    <img class="u-img-fluid" src="{{ asset('user_app/assets/images/product/electronic/product_22.jpg')}}" alt="">
                                                </div>
                                                <div class="o-card__info-wrap">
                                                    <span class="o-card__name">
                                                        <a href="product-detail.html">Cool Water</a>
                                                    </span>
                                                    <span class="o-card__quantity">Quantity x 1</span>
                                                    <span class="o-card__price">$150.00</span>
                                                </div>
                                            </div>
                                            <a class="o-card__del far fa-trash-alt"></a>
                                        </div>
                                        <div class="o-card">
                                            <div class="o-card__flex">
                                                <div class="o-card__img-wrap">
                                                    <img class="u-img-fluid" src="{{ asset('user_app/assets/images/product/electronic/product_23.jpg')}}" alt="">
                                                </div>
                                                <div class="o-card__info-wrap">
                                                    <span class="o-card__name">
                                                        <a href="product-detail.html">Versace Eros</a>
                                                    </span>
                                                    <span class="o-card__quantity">Quantity x 1</span>
                                                    <span class="o-card__price">$150.00</span>
                                                </div>
                                            </div>
                                            <a class="o-card__del far fa-trash-alt"></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="o-summary__section u-s-m-b-30">
                                    <div class="o-summary__box">
                                        <table class="o-summary__table">
                                            <tbody>
                                                <tr>
                                                    <td>SHIPPING</td>
                                                    <td>$4.00</td>
                                                </tr>
                                                <tr>
                                                    <td>TAX</td>
                                                    <td>$0.00</td>
                                                </tr>
                                                <tr>
                                                    <td>SUBTOTAL</td>
                                                    <td>$379.00</td>
                                                </tr>
                                                <tr>
                                                    <td>GRAND TOTAL</td>
                                                    <td>$379.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="o-summary__section u-s-m-b-30">
                                    <div class="o-summary__box">
                                        <h1 class="checkout-f__h1">PAYMENT INFORMATION</h1>
                                        <form class="checkout-f__payment">
                                            <div class="u-s-m-b-10">
                                                <!--====== Radio Box ======-->
                                                <div class="radio-box">
                                                    <input type="radio" id="cash-on-delivery" name="payment">
                                                    <div class="radio-box__state radio-box__state--primary">
                                                        <label class="radio-box__label" for="cash-on-delivery">Cash on Delivery</label>
                                                    </div>
                                                </div>
                                                <!--====== End - Radio Box ======-->

                                                <span class="gl-text u-s-m-t-6">
                                                        Pay Upon Cash on delivery. (This service is only available for some
                                                    countries)
                                                </span>
                                            </div>
                                            <div class="u-s-m-b-10">
                                                <!--====== Radio Box ======-->
                                                <div class="radio-box">
                                                    <input type="radio" id="pay-pal" name="payment">
                                                    <div class="radio-box__state radio-box__state--primary">
                                                        <label class="radio-box__label" for="pay-pal">Kpay</label>
                                                    </div>
                                                </div>
                                                <!--====== End - Radio Box ======-->

                                                <span class="gl-text u-s-m-t-6">When you click "Place Order" below we'll take you to Kpay's site to set up
                                                your billing information.</span>
                                            </div>
                                            <div class="u-s-m-b-15">
                                                <!--====== Check Box ======-->
                                                <div class="check-box">
                                                    <input type="checkbox" id="term-and-condition">
                                                    <div class="check-box__state check-box__state--primary">
                                                        <label class="check-box__label" for="term-and-condition">I consent to the</label>
                                                    </div>
                                                </div>
                                                <!--====== End - Check Box ======-->

                                                <a class="gl-link">Terms of Service.</a>
                                            </div>
                                            <div>
                                                <button class="btn btn--e-brand-b-2" type="submit">PLACE ORDER</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--====== End - Order Summary ======-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====== End - Section Content ======-->
    </div>
    <!--====== End - Section 3 ======-->
</div>
<!--====== End - App Content ======-->
@endsection


<!--====== Modal Section ======-->
<!--====== Shipping Address Add Modal ======-->
<div class="modal fade" id="edit-ship-address">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
   <div class="modal-body">
    <div class="checkout-modal2">
     <div class="u-s-m-b-30">
      <div class="dash-l-r">
       <h1 class="gl-modal-h1">Shipping Address</h1>
       <div class="dash__link dash__link--brand">
        <a data-modal="modal" data-modal-id="#add-ship-address" data-dismiss="modal">Add new Address</a>
       </div>
      </div>
     </div>
     <form class="checkout-modal2__form">
      <div class="dash__table-2-wrap u-s-m-b-30 gl-scroll">
       <table class="dash__table-2">
        <thead>
         <tr>
          <th>Action</th>
          <th>Full Name</th>
          <th>Address</th>
          <th>Region</th>
          <th>Phone Number</th>
          <th>Status</th>
         </tr>
        </thead>
        <tbody>
         <tr>
          <td>

           <!--====== Radio Box ======-->
           <div class="radio-box">

            <input type="radio" id="address-1" name="default-address" checked="">
            <div class="radio-box__state radio-box__state--primary">

             <label class="radio-box__label" for="address-1"></label>
            </div>
           </div>
           <!--====== End - Radio Box ======-->
          </td>
          <td>John Doe</td>
          <td>4247 Ashford Drive Virginia VA-20006 USA</td>
          <td>Virginia VA-20006 USA</td>
          <td>(+0) 900901904</td>
          <td>
           <div class="gl-text">Default Shipping Address</div>
           <div class="gl-text">Default Billing Address</div>
          </td>
         </tr>
         <tr>
          <td>

           <!--====== Radio Box ======-->
           <div class="radio-box">

            <input type="radio" id="address-2" name="default-address">
            <div class="radio-box__state radio-box__state--primary">

             <label class="radio-box__label" for="address-2"></label>
            </div>
           </div>
           <!--====== End - Radio Box ======-->
          </td>
          <td>Doe John</td>
          <td>1484 Abner Road</td>
          <td>Eau Claire WI - Wisconsin</td>
          <td>(+0) 7154419563</td>
          <td></td>
         </tr>
        </tbody>
       </table>
      </div>
      <div class="gl-modal-btn-group">

       <button class="btn btn--e-brand-b-2" type="submit">SAVE</button>

       <button class="btn btn--e-grey-b-2" type="button" data-dismiss="modal">CANCEL</button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>
<!--====== End - Shipping Address Add Modal ======-->


<!--====== Shipping Address Add Modal ======-->
<div class="modal fade" id="add-ship-address">
 <div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
   <div class="modal-body">
    <div class="checkout-modal1">
     <form class="checkout-modal1__form">
      <div class="u-s-m-b-30">
       <h1 class="gl-modal-h1">Add new Shipping Address</h1>
      </div>
      <div class="gl-inline">
       <div class="u-s-m-b-30">

        <label class="gl-label" for="address-fname">FIRST NAME *</label>

        <input class="input-text input-text--primary-style" type="text" id="address-fname" placeholder="First Name">
       </div>
       <div class="u-s-m-b-30">

        <label class="gl-label" for="address-lname">LAST NAME *</label>

        <input class="input-text input-text--primary-style" type="text" id="address-lname" placeholder="Last Name">
       </div>
      </div>
      <div class="gl-inline">
       <div class="u-s-m-b-30">

        <label class="gl-label" for="address-phone">PHONE *</label>

        <input class="input-text input-text--primary-style" type="text" id="address-phone">
       </div>
       <div class="u-s-m-b-30">

        <label class="gl-label" for="address-street">STREET ADDRESS *</label>

        <input class="input-text input-text--primary-style" type="text" id="address-street"
         placeholder="House Name and Street">
       </div>
      </div>
      <div class="gl-inline">
       <div class="u-s-m-b-30">

        <!--====== Select Box ======-->

        <label class="gl-label" for="address-country">COUNTRY *</label><select
         class="select-box select-box--primary-style" id="address-country">
         <option selected value="">Choose Country</option>
         <option value="uae">United Arab Emirate (UAE)</option>
         <option value="uk">United Kingdom (UK)</option>
         <option value="us">United States (US)</option>
        </select>
        <!--====== End - Select Box ======-->
       </div>
       <div class="u-s-m-b-30">

        <!--====== Select Box ======-->

        <label class="gl-label" for="address-state">STATE/PROVINCE *</label><select
         class="select-box select-box--primary-style" id="address-state">
         <option selected value="">Choose State/Province</option>
         <option value="al">Alabama</option>
         <option value="al">Alaska</option>
         <option value="ny">New York</option>
        </select>
        <!--====== End - Select Box ======-->
       </div>
      </div>
      <div class="gl-inline">
       <div class="u-s-m-b-30">

        <label class="gl-label" for="address-city">TOWN/CITY *</label>

        <input class="input-text input-text--primary-style" type="text" id="address-city">
       </div>
       <div class="u-s-m-b-30">

        <label class="gl-label" for="address-street">ZIP/POSTAL CODE *</label>

        <input class="input-text input-text--primary-style" type="text" id="address-postal"
         placeholder="Zip/Postal Code">
       </div>
      </div>
      <div class="gl-modal-btn-group">

       <button class="btn btn--e-brand-b-2" type="submit">SAVE</button>

       <button class="btn btn--e-grey-b-2" type="button" data-dismiss="modal">CANCEL</button>
      </div>
     </form>
    </div>
   </div>
  </div>
 </div>
</div>
<!--====== End - Shipping Address Add Modal ======-->
<!--====== End - Modal Section ======-->
