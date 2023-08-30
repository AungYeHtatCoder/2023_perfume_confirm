@include('user_layouts.header')

@yield('css')

<body class="config">
 <div class="preloader is-active">
  <div class="preloader__wrap">

   <img class="preloader__img" src="images/preloader.png" alt="">
  </div>
 </div>

 <!--====== Main App ======-->
 <div id="app">
    <!--====== Main Header ======-->
    @include('user_layouts.navbar')
    <!--====== End - Main Header ======-->


        @yield('content')


    <!--====== Main Footer ======-->
    @include('user_layouts.footer')
    <!--====== Modal Section ======-->


 </div>
 <!--====== End - Main App ======-->


 <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
 @include('user_layouts.js')


 @yield('script')
