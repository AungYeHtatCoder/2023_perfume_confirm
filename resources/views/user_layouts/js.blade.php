<script>
window.ga = function() {
 ga.q.push(arguments)
};
ga.q = [];
ga.l = +new Date;
ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview')
</script>
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/sweetAlert.js') }}"></script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>

 <!-- bootstrap css1 js1 -->
     <!-- Include Bootstrap JS and jQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!--====== Vendor Js ======-->
<script src="{{ asset('user_app/assets/js/vendor.js')}}"></script>

<!--====== jQuery Shopnav plugin ======-->
<script src="{{ asset('user_app/assets/js/jquery.shopnav.js')}}"></script>

<!--====== App ======-->
<script src="{{ asset('user_app/assets/js/app.js')}}"></script>


@if (Session::has('success'))
<script>
showSweetAlert("Success!", "{{ Session::get('success') }}", "success");
</script>
@endif
@if (Session::has('error'))
<script>
showSweetAlert("Sorry!", "{{ Session::get('error') }}", "error");
</script>
@endif

<script>
// document.addEventListener('DOMContentLoaded', function() {
//  const addToCartButtons = document.querySelectorAll('.add-to-cart-button');
//  const totalItemElement = document.querySelector('.total-item-round');

//  let totalItems = 0;

//  addToCartButtons.forEach(button => {
//   console.log('hello');
//   button.addEventListener('click', function() {
//    totalItems++;
//    totalItemElement.textContent = totalItems;
//   });
//  });
// });
</script>

<script>
// footer section
$('#getyear').text(new Date().getUTCFullYear());
// end footer section
</script>



<!--====== Noscript ======-->
<noscript>
 <div class="app-setting">
  <div class="container">
   <div class="row">
    <div class="col-12">
     <div class="app-setting__wrap">
      <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

      <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a JavaScript-capable
       browser.</span>
     </div>
    </div>
   </div>
  </div>
 </div>
</noscript>
</body>

</html>