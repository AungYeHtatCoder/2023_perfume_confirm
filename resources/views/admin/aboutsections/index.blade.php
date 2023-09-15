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
@endsection
@section('content')
<div class="content-header row">
 <div class="content-header-light col-12">
  <div class="row">
   <div class="content-header-left col-md-9 col-12 mb-2">
    <h3 class="content-header-title">About Section Dashboard</h3>
    <div class="row breadcrumbs-top">
     <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a>
       </li>
       <li class="breadcrumb-item active">About Section Dashboard
       </li>
      </ol>
     </div>
    </div>
   </div>

  </div>
 </div>
</div>
<div class="content-overlay"></div>

<!-- table section start -->

<section id="configuration">
 <div class="row">
  <div class="col-12">
   <div class="card">
    <div class="card-header">
     <h4 class="card-title">
      <a href="{{ url('/admin/aboutsections/create') }}" class="btn btn-success btn-round">New About Section Create</a>
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
         <th>Image</th>
         <th>Header</th>
         <th>Paragraph</th>
         <th>1st</th>
         <th>2nd</th>
         <th>Created_At</th>
         <th>Action</th>
        </tr>
       </thead>
       <tbody>
        @foreach ($sections as $key => $aboutsection)
        <tr>
            <td>{{ ++$key }}</td>
            <td><img src="{{ asset('assets/img/aboutsections/'.$aboutsection->image) }}" width="200px" alt=""></td>
            <td>{{ $aboutsection->header }}</td>
            <td>{{ $aboutsection->paragraph }}</td>
            <td>
                <form action="{{ url('/admin/aboutsections/one/'.$aboutsection->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="one" value="{{ $aboutsection->one == 1 ? 0 : 1 }}">
                    <button class="btn" type="submit">
                        <i  style="color: blue;" class="fas fa-2x fa-toggle-{{ $aboutsection->one == 1 ? "on" : "off" }}"></i>
                    </button>
                </form>
            </td>
            <td>
                <form action="{{ url('/admin/aboutsections/two/'.$aboutsection->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="two" value="{{ $aboutsection->two == 1 ? 0 : 1 }}">
                    <button class="btn" type="submit">
                        <i  style="color: blue;" class="fas fa-2x fa-toggle-{{ $aboutsection->two == 1 ? "on" : "off" }}"></i>
                    </button>
                </form>
            </td>
            <td>{{ $aboutsection->created_at }}</td>
            <td>
                <a href="{{ url('/admin/aboutsections/edit/'.$aboutsection->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{ url('/admin/aboutsections/show/'.$aboutsection->id) }}" class="btn btn-primary btn-sm">Show</a>
                <a href="{{ url('/admin/aboutsections/delete/'.$aboutsection->id) }}" class="btn btn-danger btn-sm">Delete</a>
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
<!-- table section end -->

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
