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
    <h3 class="content-header-title">Responsive Datatable</h3>
    <div class="row breadcrumbs-top">
     <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
       </li>
       <li class="breadcrumb-item"><a class="btn btn-info" href="{{ route('admin.users.index') }}">Back To User</a>
        <span>
        <a class="btn btn-primary" href="{{ route('admin.diamond-user') }}">Back To Diamond User Dashboard</a>
        </span>
       </li>
       <li class="breadcrumb-item active">User | Customers Responsive Datatable
       </li>
      </ol>
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
      <a href="{{ route('admin.users.create') }}" class="btn btn-success btn-round">New User (OR) Customer Create</a>
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
      <p class="card-text">User Detail Dashboard
      </p>

      

      <table class="table table-striped table-bordered dataex-res-configuration">
       <tr>
        <th>ID</th>
        <td>{{ $user_detail->id }}</td>
       </tr>
       <tr>
        <th>Name</th>
        <td>{{ $user_detail->name }}</td>
       </tr>
       <tr>
        <th>Email</th>
        <td>{{ $user_detail->email }}</td>
       </tr>
       <tr>
        <th>Phone</th>
        <td>{{ $user_detail->phone }}</td>
       </tr>
       <tr>
        <th>Address</th>
        <td>{{ $user_detail->address }}</td>
       </tr>
       <tr>
        <th>Role</th>
        <td>
         @foreach ($user_detail->roles as $role)
             <span class="badge badge-primary">
              {{ $role->title }}
             </span>
         @endforeach
        </td>
       </tr>
       <tr>
        <th>Created At</th>
        <td>{{ $user_detail->created_at }}</td>
       </tr>
       <tr>
        <th>Updated At</th>
        <td>{{ $user_detail->updated_at }}</td>
       </tr>
      </table>
     </div>
    </div>
   </div>
  </div>
 </div>

</section>
<!--/ Configuration option table -->
@endsection

