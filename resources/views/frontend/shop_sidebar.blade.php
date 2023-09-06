 <div class="shop-w-master">
  <h1 class="shop-w-master__heading u-s-m-b-30"><i class="fas fa-filter u-s-m-r-8"></i>

   <span>FILTERS</span>
  </h1>
  <div class="shop-w-master__sidebar">
   <div class="u-s-m-b-30">
    <div class="shop-w shop-w--style">
     <div class="shop-w__intro-wrap">
      <a href="{{ url('/shop')}}" style="text-decoration:none">
       <h1 class="shop-w__h">ALL</h1>
      </a>
     </div>
    </div>
   </div>
   <div class="u-s-m-b-30">
    <div class="shop-w shop-w--style">
     <div class="shop-w__intro-wrap">
      <h1 class="shop-w__h">SCENTS</h1>

      <span class="fas fa-minus shop-w__toggle" data-target="#s-category" data-toggle="collapse"></span>
     </div>
     <div class="shop-w__wrap collapse show" id="s-category">
      <ul class="shop-w__category-list gl-scroll">
       @foreach($scents as $scent)
       <li class="has-list">

        <a href="{{ url('/shop/scent/'.$scent->id) }}">{{ $scent->scent_name}}</a>
       </li>
       @endforeach
      </ul>
     </div>
    </div>
   </div>
   <div class="u-s-m-b-30">
    <div class="shop-w shop-w--style">
     <div class="shop-w__intro-wrap">
      <h1 class="shop-w__h">SIZES</h1>
      <span class="fas fa-minus collapsed shop-w__toggle" data-target="#s-size" data-toggle="collapse"></span>
     </div>
     <div class="shop-w__wrap collapse" id="s-size">
      <ul class="shop-w__category-list gl-scroll">
       @foreach ($sizes as $size)
       <li class="has-list">
        <a href="{{ url('/shop/size/'.$size->id) }}">{{ $size->name }}</a>
       </li>
       @endforeach
      </ul>
     </div>
    </div>
   </div>


   <div class="u-s-m-b-30">
    <div class="shop-w shop-w--style">
     <div class="shop-w__intro-wrap">
      <h1 class="shop-w__h">BRANDS</h1>

      <span class="fas fa-minus collapsed shop-w__toggle" data-target="#s-brand" data-toggle="collapse"></span>
     </div>
     <div class="shop-w__wrap collapse" id="s-brand">
      <ul class="shop-w__category-list gl-scroll">
       @foreach($brands as $brand)
       <li class="has-list">

        <a href="{{ url('/shop/brand/'.$brand->id) }}">{{ $brand->brand_name}}</a>
       </li>
       @endforeach
      </ul>
     </div>
    </div>
   </div>

  </div>
 </div>