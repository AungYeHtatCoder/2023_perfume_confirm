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
    <h3 class="content-header-title">New Product Create Dashboard</h3>
    <div class="row breadcrumbs-top">
     <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
       </li>
       <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Back To Products </a>
       </li>
       <li class="breadcrumb-item active">New Product Create Dashboard
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
          <h4 class="card-title" id="from-actions-top-bottom-center">New Product Create</h4>
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


           <form class="form" method="post" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-body">
             <div class="row">
              <div class="form-group col-12 mb-2">
               <label for="product_name">Product Name</label>
               <input type="text" id="product_name" class="form-control" placeholder="Product Name" name="name">
              </div>
             </div>
             <div class="row">
              <div class="form-group col-12 mb-2">
               <label for="brand">Brand</label>
               <select name="brand_id" id="brand_id" class="form-control select2" required>
                <option value="">Select Brand</option>
                @foreach($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                @endforeach
               </select>
              </div>
             </div>
             <div class="row">
              <div class="form-group col-12 mb-2">
               <label for="sample">Choose Product Image</label>
               <input type="file" placeholder="" name="image" class="form-control">
              </div>
             </div>
             <div class="row">
              <div class="form-group col-12 mb-2">
               <label for="description">Product Description</label>
               <textarea type="text" id="description" class="form-control" placeholder="Product Description"
                name="description"></textarea>
              </div>
             </div>

             <div class="row">
                <div class="form-group col-12 mb-2">
                 <!-- Product publish with checkbox -->
                 <label for="publish">Product Publish</label>
                 <div class="custom-control custom-checkbox">
                  <input type="radio" class="custom-control-input" id="publish" name="published" value="1">
                  <label class="custom-control-label" for="publish">Publish</label>
                 </div>
                 <div class="custom-control custom-checkbox">
                  <input type="radio" class="custom-control-input" id="unpublish" name="published" value="0">
                  <label class="custom-control-label" for="unpublish">Unpublish</label>
                 </div>
                </div>
               </div>
             <div class="row">
              <div class="form-group col-12 mb-2">
               <label for="scents">Product Scent</label>
               <span class="btn btn-info btn-sm select-all">Select All</span>
               <span class="btn btn-info btn-sm deselect-all">Deselect</span>
               <select name="scents[]" id="scents" class="form-control select2" multiple="multiple" required>
                <option value="" disabled>Select Scent</option>
                @foreach($scents as $id => $scent)
                <option value="{{ $id }}">{{ $scent }}</option>
                @endforeach
               </select>
              </div>
             </div>
             <div class="row">
              <div class="form-group col-12 mb-2">
                <label for="" class="form-label">Product Sizes</label>
                @foreach($sizes as $size)
                <div class="d-flex justify-content-between mb-1">
                        @php
                            $inputName = "sizes[{$size->id}]";
                            $sizeValue = $size->value ?? null;
                            $qtyValue = $size->value ?? null;
                            $priceValue = $size->value ?? null;
                            $discountValue = $size->value ?? null;
                        @endphp
                    <div>
                        <input {{ $size->value ? 'checked' : null }} data-id="{{ $size->id }}" type="checkbox"
                        class="service-enable" id="size-{{ $size->id }}" value="{{ $size->id }}" name="{{ $inputName }}[size_id]">
                        <label for="size-{{ $size->id }}" class="form-label">{{ $size->name }}</label>
                    </div>
                    <div>

                        <input value="{{ $qtyValue }}" {{ $qtyValue ? null : 'disabled' }}
                        data-id="{{ $size->id }}" name="{{ $inputName }}[qty]" type="number"
                        class="product-qty form-control" placeholder="Quantity">
                    </div>
                    <div>
                        <input value="{{ $priceValue }}" {{ $priceValue ? null : 'disabled' }}
                        data-id="{{ $size->id }}" name="{{ $inputName }}[normal_price]" type="number"
                        class="product-price form-control" placeholder="Normal Price">
                    </div>
                    <div>
                        <input value="{{ $discountValue }}" {{ $discountValue ? null : 'disabled' }}
                        data-id="{{ $size->id }}" name="{{ $inputName }}[discount_price]" type="number"
                        class="product-discount form-control" placeholder="Discount Price">
                    </div>
                </div>
                @endforeach

              </div>
             </div>

                {{-- <div class="mb-1">
                    <label for="normal_price" class="form-label">Normal Price</label>
                    <input type="number" name="normal_price" id="normal_price" class="form-control" placeholder="Enter Normal Price">
                </div>

                <div class="mb-1">
                    <label for="discount_price" class="form-label">Discount Price</label>
                    <input type="number" name="discount_price" id="discount_price" class="form-control" placeholder="Enter Discount Price">
                </div>

                <div class="mb-1">
                    <label for="qty" class="form-label">Qty</label>
                    <input type="number" name="qty" id="qty" class="form-control" placeholder="Enter Quantity">
                </div> --}}

            </div>

            <div class="form-actions text-center">
             <a href="{{ route('admin.products.index') }}" class="btn btn-warning mr-1">
              <i class="ft-x"></i> Cancel
             </a>
             <button type="submit" class="btn btn-primary">
              <i class="la la-check-square-o"></i> Save
             </button>
            </div>
           </form>

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
