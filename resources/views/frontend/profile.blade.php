@extends('user_layouts.master')

@section('title', 'Shop')

@section('content')

<!--====== App Content ======-->
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

        <a href="index.html">Home</a>
       </li>
       <li class="is-marked">

        <a href="dash-my-profile.html">My Account</a>
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

  <!--====== Section Content ======-->
  <div class="section__content">
   <div class="dash">
    <div class="container">
     <div class="row">
      <div class="col-lg-3 col-md-12">

       <!--====== Dashboard Features ======-->
       <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
        <div class="dash__pad-1">

         <span class="dash__text u-s-m-b-16">Hello, {{ Auth::user()->name }}</span>
         <ul class="dash__f-list">
          <li>

           <a href="/dashboard">Manage My Account</a>
          </li>
          <li>

           <a class="dash-active" href="/profile">My Profile</a>
          </li>
          <li>

           <a href="/delivary-info">Delivary Info</a>
          </li>
          <li>

           <a href="/track-order">Track Order</a>
          </li>
          <li>

           <a href="/my-orders">My Orders</a>
          </li>
          <li>

           <a href="/my-payment">My Payment Options</a>
          </li>
          <li>

           <a href="/order-cancellation">My Returns & Cancellations</a>
          </li>
         </ul>
        </div>
       </div>
       <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
        <div class="dash__pad-1">
         <ul class="dash__w-list">
          <li>
           <div class="dash__w-wrap">

            <span class="dash__w-icon dash__w-icon-style-1"><i class="fas fa-cart-arrow-down"></i></span>

            <span class="dash__w-text">4</span>

            <span class="dash__w-name">Orders Placed</span>
           </div>
          </li>
          <li>
           <div class="dash__w-wrap">

            <span class="dash__w-icon dash__w-icon-style-2"><i class="fas fa-times"></i></span>

            <span class="dash__w-text">0</span>

            <span class="dash__w-name">Cancel Orders</span>
           </div>
          </li>
          <li>
           <div class="dash__w-wrap">

            <span class="dash__w-icon dash__w-icon-style-3"><i class="far fa-heart"></i></span>

            <span class="dash__w-text">0</span>

            <span class="dash__w-name">Wishlist</span>
           </div>
          </li>
         </ul>
        </div>
       </div>
       <!--====== End - Dashboard Features ======-->
      </div>
      <div class="col-lg-9 col-md-12">
       <div class="dash__box dash__box--shadow dash__box--radius dash__box--bg-white u-s-m-b-30">
        <div class="dash__pad-2">
         <h1 class="dash__h1 u-s-m-b-14">My Profile</h1>

         <span class="dash__text u-s-m-b-30">Look all your info, you could customize your profile.</span>
         <div class="row">
          <div class="col-lg-4 u-s-m-b-30">
           <h2 class="dash__h2 u-s-m-b-8">Full Name</h2>

           <span class="dash__text">{{ Auth::user()->name }}</span>
          </div>
          <div class="col-lg-4 u-s-m-b-30">
           <h2 class="dash__h2 u-s-m-b-8">E-mail</h2>

           <span class="dash__text">{{ Auth::user()->email }}</span>
           <div class="dash__link dash__link--secondary">

            <a href="#">Change</a>
           </div>
          </div>
          <div class="col-lg-4 u-s-m-b-30">
           <h2 class="dash__h2 u-s-m-b-8">Phone</h2>

           <span class="dash__text">{{ Auth::user()->phone }}</span>
           <div class="dash__link dash__link--secondary">

            <!-- <a href="#">Add</a> -->
           </div>
          </div>
          <div class="col-lg-4 u-s-m-b-30">
           <h2 class="dash__h2 u-s-m-b-8">Address</h2>

           <span class="dash__text">{{ Auth::user()->address }}</span>
          </div>
          <div class="col-lg-4 u-s-m-b-30">
           <!-- <h2 class="dash__h2 u-s-m-b-8">Gender</h2>

           <span class="dash__text">Male</span> -->
          </div>
         </div>
         <div class="row">
          <div class="col-lg-12">
           <div class="dash__link dash__link--secondary u-s-m-b-30">

            <a data-modal="modal" data-modal-id="#dash-newsletter">Update Your Information</a>
           </div>
           <div class="u-s-m-b-16">

            <!-- update information -->

            <form action="{{ route('user.customerchangePhoneAddress', Auth::user()->id) }}" method="post">
             @csrf
             @method('PUT')
             <div class="u-s-m-b-30">
              <label class="gl-label" for="phone">Phone *</label>
              <input class="input-text input-text--primary-style" type="text" id="login-email" name="phone"
               value="{{ Auth::user()->phone }}">
              @error('phone')
              <span style="color: red;">*{{ $message }}</span>
              @enderror
             </div>
             <div class="u-s-m-b-30">
              <label class="gl-label" for="address">Address *</label>
              <input class="input-text input-text--primary-style" name="address" type="text" id="login-password"
               value="{{ Auth::user()->address }}">
              @error('password')
              <span style="color: red;">*{{ $message }}</span>
              @enderror
             </div>

             <button class="dash__custom-link btn--e-transparent-brand-b-2" type="submit">Update Profile</button>
            </form>
            <!-- update information end -->


           </div>
           <div>
            <!-- password change -->
            <div class="dash__link dash__link--secondary u-s-m-b-30">

             <a data-modal="modal" data-modal-id="#dash-newsletter">Update Your Information</a>
            </div>

            <form action="{{ route('user.customerchangePassword', Auth::user()->id) }}" method="post">
             @csrf
             @method('PUT')
             <div class="u-s-m-b-35">
              <label class="gl-label" for="phone">CurrentPassword *</label>
              <input class="input-text input-text--primary-style" type="text" id="login-email" name="old_password"
               placeholder="Enter Your Current Password"">
              @error('old_password')
              <span style=" color: red;">*{{ $message }}</span>
              @enderror
             </div>
             <div class="u-s-m-b-35">
              <label class="gl-label" for="address">NewPassword *</label>
              <input class="input-text input-text--primary-style" name="password" type="text" id="login-password"
               placeholder="Enter Your New Password">
              @error('password')
              <span style="color: red;">*{{ $message }}</span>
              @enderror
             </div>

             <div class="u-s-m-b-35">
              <label class="gl-label" for="address">ConfirmPassword *</label>
              <input class="input-text input-text--primary-style" name="password_confirmation" type="text"
               id="login-password" placeholder="Confirm New Password">
             </div>
             <button class="dash__custom-link btn--e-brand-b-2" type="submit">Change Password</button>

            </form>

            <!-- password change end -->
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
  @include('sweetalert::alert')

  <!--====== End - Section Content ======-->
 </div>
 <!--====== End - Section 2 ======-->

</div>
<!--====== End - App Content ======-->

@endsection