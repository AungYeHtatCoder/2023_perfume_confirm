   @extends('user_layouts.master')

   @section('title', 'About Us')

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

           <a href="{{ url('/aboutus') }}">About</a>
          </li>
         </ul>
        </div>
       </div>
      </div>
     </div>
    </div>
    <!--====== End - Section 1 ======-->


    <!--====== Section 2 ======-->
    <!-- <div class="u-s-p-b-60"> -->

     <!--====== Section Content ======-->
     <!-- <div class="section__content"> -->
         <div class="container">

            <div class="about__container row">

              {{-- <div class="col-lg-12 " style="margin-bottom:5rem;color:#000;">
                <h2>who are we</h2>
                <p class="about_p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div> --}}

              @if ($section1)
                <div class="col-lg-7 pic_res">
                    <img src="{{ asset('assets/img/aboutsections/'.$section1->image)}}"  alt="">
                </div>

                <div class="col-lg-5 text_res">
                    <h2 class="about__h2">{{ $section1->header }}</h2>
                    <p class="about__p">{{ $section1->paragraph }}</p>
                    <!-- <a class="about__link btn--e-secondary" href="shop-side-version-2.html">Shop Now</a> -->
                </div>
              @endif

            @if ($section2)
              <div class="col-lg-7 text_res" style="margin-top:5rem;">
                    <h2 class="about__h2">{{ $section2->header }}</h2>
                    <div class="about__p-wrap">
                    <p class="about__p">{{ $section2->paragraph }}</p>
                    </div>
                    <!-- <a class="about__link btn--e-secondary" href="shop-side-version-2.html">Shop Now</a> -->
                </div>

                <div class="col-lg-5 pic_res">
                    <img src="{{ asset('assets/img/aboutsections/'.$section2->image)}}" alt="contact">
                </div>
            @endif





        </div>



      </div>
      </div>
     <!--====== End - Section Content ======-->
    <!-- </div> -->
    <!--====== End - Section 2 ======-->





    <!--====== Section 4 ======-->
    <!-- <div class="u-s-p-b-90 u-s-m-b-30"> -->

     <!--====== Section Intro ======-->

     <!--====== End - Section Intro ======-->


     <!--====== Section Content ======-->

     <!--====== End - Section Content ======-->
    <!-- </div> -->
    <!--====== End - Section 4 ======-->
   </div>

   @endsection
