@extends('layouts.admin_app')
@section('styles')

<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/vendors/css/tables/extensions/colReorder.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css') }}"
 href="{{ asset('admin_app/app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css"
 href="{{ asset('admin_app/app-assets/vendors/css/tables/extensions/fixedHeader.dataTables.min.css') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap-toggle.css">

<style>
/* Styles for the toggle switch icon */
/* .switch-icon {
 position: relative;
 display: inline-block;
 width: 40px;
 height: 20px;
 background-color: #ccc;
 border-radius: 20px;
 cursor: pointer;
 user-select: none;
}

.switch-icon.active {
 background-color: blue;
} */

/* .toggle-icon {
 position: absolute;
 top: 2px;
 left: 2px;
 width: 16px;
 height: 16px;
 background-color: white;
 border-radius: 50%;
 transition: transform 0.3s ease;
} */

/* Hide the actual input */
/* .hidden-input {
 display: none;
} */
</style>

@endsection
@section('content')
<div class="content-header row">
 <div class="content-header-light col-12">
  <div class="row">
   <div class="content-header-left col-md-9 col-12 mb-2">
    <h3 class="content-header-title">Responsive Datatable</h3>
    <div class="row breadcrumbs-top">
     <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
       </li>
       <li class="breadcrumb-item"><a href="{{ route('admin.products.create') }}">Create New Product</a>
       </li>
       <li class="breadcrumb-item active">New Product Responsive Datatable
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
      <a href="{{ route('admin.products.create') }}" class="btn btn-success btn-round">New Product Create</a>
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
      <p class="card-text">The Responsive
      </p>

      @if (session('success'))
      <div class="alert alert-success">
       {{ session('success') }}
      </div>
      @endif

      <table class="table table-striped table-bordered dataex-res-configuration">
       <thead>
        <tr>
         <th>ID</th>
         <th>ProductName</th>
         <th>Brand</th>
         <th>Scent</th>
         <th>Size</th>
         <th>Feature</th>
         <th>Popular</th>
         <th>Action</th>

        </tr>
       </thead>
       <tbody>
        @foreach ($products as $key=>$product)
        <tr>
         <td>{{ ++$key }}</td>
         <td>{{ $product->name }}</td>
         <td>{{ $product->brand->brand_name }}</td>
         <td>
          @foreach ($product->scents as $scent)
          <span class="badge text-bg-primary">{{ $scent->scent_name }}</span>
          @endforeach
         </td>
         <td>
          @foreach ($product->sizes as $size)
          <span class="badge text-bg-primary">{{ $size->name }}</span>

          @endforeach
         </td>
         <td>
          <form action="{{ url('change-feature/'. $product->id) }}" method="POST">
           @csrf
           <input type="hidden" name="feature" value="{{ $product->feature ? 0 : 1 }}">
           <button class="btn" type="submit">
                <i  style="color: blue;" class="fas fa-2x fa-toggle-{{ $product->feature === 1 ? "on" : "off" }}"></i>
            </button>
          </form>
         </td>
         <td>
          <form action="{{ url('change-popular/'. $product->id) }}" method="POST">
           @csrf
           <input type="hidden" name="popular" value="{{ $product->popular ? 0 : 1 }}">
           <label class="{{ $product->popular ? 'active' : '' }}">
            <button class="btn" type="submit">
                <i  style="color: blue;" class="fas fa-2x fa-toggle-{{ $product->popular === 1 ? "on" : "off" }}"></i>
            </button>
            {{-- <input type="submit" class="hidden-input">
            <span class="fas fa-toggle-on"></span> --}}
           </label>
          </form>
         </td>
         <td>
          <a href="{{ route('admin.products.show', ['product' => $product->id]) }}" class="btn btn-sm btn-warning"><i
            class="fas fa-eye"></i></a>
          <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}" class="btn btn-sm btn-success"><i
            class="fas fa-pen-to-square"></i></a>
          <form method="POST" action="{{ route('admin.products.destroy', ['product' => $product->id]) }}"
           style="display: inline;">
           @csrf
           @method('DELETE')
           <button type="submit" class="btn btn-sm btn-danger">
            <i class="fas fa-trash"></i>
           </button>
          </form>
         </td>
        </tr>
        @endforeach
       </tbody>

      </table>
     </div>
    </div>
   </div>
  </div>
 </div>
 @include('sweetalert::alert')

</section>
<!--/ Configuration option table -->
@endsection

@section('scripts')
<!-- <script src="{{ asset('admin_app/app-assets/vendors/js/material-vendors.min.js') }}"></script> -->

<script src="{{ asset('admin_app/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/tables/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/tables/datatable/dataTables.colReorder.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin_app/app-assets/vendors/js/tables/datatable/dataTables.fixedHeader.min.js') }}"></script>

<script src="{{ asset('admin_app/app-assets/js/scripts/tables/datatables-extensions/datatable-responsive.js') }}">
</script>

@endsection
