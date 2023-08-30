<script>
window.ga = function() {
 ga.q.push(arguments)
};
ga.q = [];
ga.l = +new Date;
ga('create', 'UA-XXXXX-Y', 'auto');
ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>

<!--====== Vendor Js ======-->
<script src="{{ asset('user_app/assets/js/vendor.js')}}"></script>

<!--====== jQuery Shopnav plugin ======-->
<script src="{{ asset('user_app/assets/js/jquery.shopnav.js')}}"></script>

<!--====== App ======-->
<script src="{{ asset('user_app/assets/js/app.js')}}"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
 const addToCartButtons = document.querySelectorAll('.add-to-cart-button');
 const totalItemElement = document.querySelector('.total-item-round');

 let totalItems = 0;

 addToCartButtons.forEach(button => {
  console.log('hello');
  button.addEventListener('click', function() {
   totalItems++;
   totalItemElement.textContent = totalItems;
  });
 });
});
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