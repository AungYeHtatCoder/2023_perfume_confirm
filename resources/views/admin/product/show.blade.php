@extends('layouts.admin_app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
<div class="content-header row">
 <div class="content-header-light col-12">
  <div class="row">
   <div class="content-header-left col-md-9 col-12 mb-2">
    <h3 class="content-header-title">Product View Dashboard</h3>
    <div class="row breadcrumbs-top">
     <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
       </li>
       <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Back To Products </a>
       </li>
       <li class="breadcrumb-item active">Product View Dashboard
       </li>
      </ol>
     </div>
    </div>
   </div>
   <div class="content-header-right col-md-3 col-12">
    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
     <button class="btn btn-primary round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1"
      type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
     <div class="dropdown-menu"><a class="dropdown-item" href="component-alerts.html"> Alerts</a><a
       class="dropdown-item" href="material-component-cards.html"> Cards</a><a class="dropdown-item"
       href="component-progress.html"> Progress</a>
      <div class="dropdown-divider"></div><a class="dropdown-item" href="register-with-bg-image.html"> Register</a>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
<div class="content-overlay"></div>

<!-- Configuration option table -->
<section id="configuration">
 <div class="row">
  <div class="col-12">
   <div class="card">
    <div class="card-header">
     <h4 class="card-title">
      <a href="{{ route('admin.products.index') }}" class="btn btn-success btn-round">Back To Product | Lists </a>
     </h4>
     <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
     <div class="heading-elements">
      <ul class="list-inline mb-0">
       <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
       <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
       <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
       <li><a data-action="close"><i class="ft-x"></i></a></li>
      </ul>
     </div>
    </div>
    <div class="card-content collapse show">
     <div class="card-body card-dashboard">
      <div class="row justify-content-md-center">
       <div class="col-md-8">
        <div class="card">
         <div class="card-header">
          <h4 class="card-title" id="from-actions-top-bottom-center">Product View</h4>
          <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
          <div class="heading-elements">
           <ul class="list-inline mb-0">
            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            <li><a data-action="close"><i class="ft-x"></i></a></li>
           </ul>
          </div>
         </div>
         <div class="card-content collpase show">
          <div class="card-body">
            <h3 class="mb-1">Product Name - {{ $product->name }}</h3>
            <div>
                <span class="badge text-bg-secondary my-2">{{ $product->brand->brand_name }}</span>
            </div>

            <div>
                <img src="{{ asset('assets/img/products/'.$product->image) }}" width="200px" alt="">
            </div>
            <h3 class="my-2">Product Description</h3>
            <p>{!! $product->description !!}</p>

            @if ($product->sizes)
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Size</th>
                        <th>Qty</th>
                        <th>Normal Price</th>
                        <th>Discount Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product->sizes as $key=>$size)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $size->name}}</td>
                        <td>{{ $size->pivot->qty }}</td>
                        <td>{{ $size->pivot->normal_price }}</td>
                        <td>{{ $size->pivot->discount_price }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @endif
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

</section>
<!--/ Configuration option table -->
@endsection

@section('scripts')
<!-- <script src="{{ asset('admin_app/app-assets/vendors/js/material-vendors.min.js') }}"></script> -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $('#description').summernote({
      placeholder: 'Enter Product Description',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        // ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
</script>
<script>
$(document).ready(function() {
 // Initialize Select2 for both "scents" and "perfumeSizes"
 $('#scents, #perfumeSizes').select2({
  multiple: true
 });

 // Click event for "Select All" and "Deselect All" buttons
 $('.select-all').click(function() {
  $(this).siblings('select').find('option').prop('selected', true);
  $(this).siblings('select').trigger('change.select2');
 });

 $('.deselect-all').click(function() {
  $(this).siblings('select').find('option').prop('selected', false);
  $(this).siblings('select').trigger('change.select2');
 });
});
</script>
<script>
    $('document').ready(function() {
     $('.service-enable').on('click', function() {
      let id = $(this).attr('data-id')
      let enabled = $(this).is(":checked")
      $('.product-qty[data-id="' + id + '"]').attr('disabled', !enabled)
      $('.product-qty[data-id="' + id + '"]').val(null)

      $('.product-price[data-id="' + id + '"]').attr('disabled', !enabled)
      $('.product-price[data-id="' + id + '"]').val(null)

      $('.product-discount[data-id="' + id + '"]').attr('disabled', !enabled)
      $('.product-discount[data-id="' + id + '"]').val(null)
     })
    });
</script>

@endsection
