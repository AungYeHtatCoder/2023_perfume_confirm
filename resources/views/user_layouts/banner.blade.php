<div class="banner-bg">

 <!--====== Section Content ======-->
 <div class="section__content">
  <div class="container">
   <div class="row">
    <div class="col-lg-12">
     <div class="banner-bg__countdown">
      <div class="countdown countdown--style-banner" id="countdown" data-countdown="2023/08/27"></div>
     </div>
     <div class="countdown__content">
      <div>
        <span class="countdown__value">%D</span>
        <span class="countdown__key">Days</span>
      </div>
    </div>
    <div class="countdown__content">
      <div>
        <span class="countdown__value">%H</span>
        <span class="countdown__key">Hours</span>
      </div>
    </div>
    <div class="countdown__content"><div>
      <span class="countdown__value">%M</span>
      <span class="countdown__key">Mins</span>
    </div>
  </div>
  <div class="countdown__content">
      <div>
        <span class="countdown__value">%S</span>
        <span class="countdown__key">Secs</span>
      </div>
    </div>
     <div class="banner-bg__wrap">
      <div class="banner-bg__text-1">

       <span class="u-c-white">Global</span>

       <span class="u-c-brand">Offers</span>
      </div>
      <div class="banner-bg__text-2">

       <span class="u-c-secondary">Official Launch</span>

       <span class="u-c-white">Don't Miss!</span>
      </div>

      <span class="banner-bg__text-block banner-bg__text-3 u-c-secondary">Enjoy Free Shipping when you buy 2 items
       and above!</span>

      <a class="banner-bg__shop-now btn--e-brand" href="{{url('/shop')}}">Shop Now</a>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!--====== End - Section Content ======-->
</div>

<script>
  // Set the date and time for the countdown
  const countdownDate = new Date("2023/08/27").getTime();

  // Update the countdown every second
  const countdownInterval = setInterval(function() {
    const now = new Date().getTime();
    const timeRemaining = countdownDate - now;

    const days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
    const hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerHTML = `
      <div><span class="countdown__value">${days}</span><span class="countdown__key">Days</span></div>
      <div><span class="countdown__value">${hours}</span><span class="countdown__key">Hours</span></div>
      <div><span class="countdown__value">${minutes}</span><span class="countdown__key">Mins</span></div>
      <div><span class="countdown__value">${seconds}</span><span class="countdown__key">Secs</span></div>
    `;

    // If the countdown is over, clear the interval
    if (timeRemaining < 0) {
      clearInterval(countdownInterval);
      document.getElementById("countdown").innerHTML = "EXPIRED";
    }
  }, 1000);
</script>