  @extends('user_layouts.master')

  @section('title', 'Shop')

  @section('content')
  <!--====== App Content ======-->
  <div class="app-content">

   <!--====== Section 1 ======-->
   <div class="u-s-p-y-90">
    <div class="container">
     <div class="row">
      <div class="col-lg-12 col-md-12">
       <div class="shop-p">
        <div class="shop-p__toolbar u-s-m-b-30">
         <div class="shop-p__meta-wrap u-s-m-b-60">
          <span class="shop-p__meta-text-1">" {{ count($products) }} RESULTS FOUND"</span>
         </div>
         <div class="shop-p__tool-style">
          <div class="tool-style__group u-s-m-b-8">
           <span class="js-shop-grid-target is-active">Grid</span>
          </div>
          <form>
           <div class="tool-style__form-wrap">
            <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
              <option>Show: 8</option>
              <option selected>Show: 12</option>
              <option>Show: 16</option>
              <option>Show: 28</option>
             </select></div>
            <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
              <option selected>Sort By: Newest Items</option>
              <option>Sort By: Latest Items</option>
              <option>Sort By: Best Selling</option>
              <option>Sort By: Best Rating</option>
              <option>Sort By: Lowest Price</option>
              <option>Sort By: Highest Price</option>
             </select></div>
           </div>
          </form>
         </div>
        </div>
        <div class="shop-p__collection">
         <div class="row is-grid-active">

          @if(count($products) > 0)
          @foreach($products as $product)
          <div class="col-lg-4 col-md-6 col-sm-6" id="results">
           <div class="product-m">
            <div class="product-m__thumb">

             <a class="aspect aspect--bg-grey aspect--square u-d-block" href="{{ url('/product_detail') }}">

              <img class="aspect__img" src="{{ asset('assets/img/products/'.$product->image)}}" alt=""></a>
             <div class="product-m__quick-look">

              <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip"
               data-placement="top" title="Quick Look"></a>
             </div>
             <div class="product-m__add-cart">

              <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">Add to Cart</a>
             </div>
            </div>
            <div class="product-m__content">
             <div class="product-m__category">
              <p class="badge rounded-pill text-bg-primary">
               <strong>
                Product Name : {{ $product->name }}

               </strong>
              </p>
              <!-- <a href="shop-side-version-2.html"></a> -->
             </div>
             <div class="product-m__name">
              <p>
               Brand: {{ $product->brand->brand_name }}
              </p>
              <!-- <a href="{{ url('/product_detail') }}">New Fashion B Nice Elegant</a> -->
             </div>
             <div class="product-m__rating gl-rating-style">
              @foreach($product->scents as $scent)
              <p>Scent: {{ $scent->scent_name }}</p>
              @endforeach
              <!-- <i class="fas fa-star"></i><i class="fas fa-star"></i><i
               class="fas fa-star-half-alt"></i><i class="far fa-star"></i><i class="far fa-star"></i>

              <span class="product-m__review">(23)</span> -->
             </div>
             <div class="product-m__price">
              @foreach($product->sizes as $size)
              <p>Size: {{ $size->name }}, Normal Price: {{ $size->pivot->normal_price }}, Discount Price:
               {{ $size->pivot->discount_price }}</p>
              @endforeach
             </div>
             <div class="product-m__hover">
              <div class="product-m__preview-description">

               <span>{{ $product->description }}</span>
              </div>
              <div class="product-m__wishlist">

               <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
              </div>
             </div>
            </div>
           </div>
          </div>
          @endforeach
          @else
          <p>
           No results found for your query.
          </p>
          @endif
         </div>
        </div>
        <div class="u-s-p-y-60">

         <!--====== Pagination ======-->
         <ul class="shop-p__pagination">
          <li>
           <span>Page {{ $products->currentPage() }} of {{ $products->lastPage() }}</span>
          </li>

          @foreach(range(1, $products->lastPage()) as $i)
          <li class="{{ ($products->currentPage() == $i) ? 'is-active' : '' }}">
           <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
          </li>
          @endforeach

          <li>
           <a class="fas fa-angle-right {{ !$products->hasMorePages() ? 'disabled' : '' }}"
            href="{{ $products->nextPageUrl() }}"></a>
          </li>
         </ul>

         <!--====== End - Pagination ======-->
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <!--====== End - Section 1 ======-->
  </div>
  <!--====== End - App Content ======-->

  @endsection

  @section('script')
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script>
// Assume that this function is triggered when the search form is submitted
function performSearch() {
 $.ajax({
  url: '/search', // Replace with your actual search URL
  method: 'GET',
  data: {
   brand_id: $('#main-search').val() // assuming you have an input field with id "brand_id"
  },
  success: function(response) {
   // Update the HTML content
   $('#product-list').html(response);
  }
 });
}
  </script>
  @endsection