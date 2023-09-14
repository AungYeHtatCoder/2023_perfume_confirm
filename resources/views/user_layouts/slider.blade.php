 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($banners as $key => $banner)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key++ }}" class="{{ $key===0 ? "active" : "" }}"></li>
            @endforeach

          {{-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
        </ol>
        <div class="carousel-inner">
            @foreach ($banners as $key => $banner)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <img class="d-block w-100" src="{{ asset('assets/img/banners/'.$banner->image)}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="u-c-brand">{{ $banner->text_1 }}</h5>
                        <h2>{{ $banner->text_2 }}</h2>
                        <h6>{{ $banner->text_3 }}</h6>
                        <a type="button" href="{{ url('/shop') }}" class="btn btn-info mt-3">Shop Now</a>
                    </div>
                </div>
            @endforeach

          {{-- <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('user_app/assets/images/banners/sample_2.png')}}"  alt="Second slide">
            <div class="carousel-caption d-none d-md-block"  style="color:black;">
                <h5 class="u-c-brand">Latest Update Stock</h5>
                <h2>Promotion on Perfume</h2>
                <h6>Find perfume on best prices, Also Discover most selling products of perfume</h6>
                <a type="button" href="#" class="btn btn-info mt-3">Shop Now</a>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('user_app/assets/images/banners/sample_3.png')}} " alt="Third slide" >
            <div class="carousel-caption d-none d-md-block">
                <h5 class="u-c-brand">Latest Update Stock</h5>
                <h2>Promotion on Perfume</h2>
                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham</p>

              </div>
          </div> --}}
        </div>
        {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> --}}
      </div>
