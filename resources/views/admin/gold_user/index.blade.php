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
    <h3 class="content-header-title">Gold User  Dashboard Datatable</h3>
    <div class="row breadcrumbs-top">
     <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
       </li>
       <li class="breadcrumb-item"><a href="{{ route('admin.users.create') }}">Create User | Customer</a>
       </li>
       <li class="breadcrumb-item active">Gold User  Dashboard Datatable
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
      <p class="card-text">Gold User  Dashboard
      </p>

      @if (session('success'))
      <div class="alert alert-success">
       {{ session('success') }}
      </div>
      @endif

@if(count($usersWithDiamondRole) > 0)

    <table class="table table-striped table-bordered dataex-res-configuration">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roles</th>
                <th>Order Count</th>
                <th>Total Order Price</th>
                <th>Sub Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usersWithDiamondRole as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>
                      <p class="badge badge-info">
                      {{ $assignedRoles[$user->id] ?? 'None' }}
                      </p>
                    </td>

                    <td>{{ optional($userOrderCounts->firstWhere('id', $user->id))->order_count }}</td>
                    <td>{{ optional($userOrderStats->firstWhere('id', $user->id))->total_price_sum }}</td>
                    <td>{{ $userSubTotals[$user->id] ?? '0' }}</td>
                     <td>
          <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
          <a href="{{ route('admin.users.show', $user->id) }}" class="btn btn-primary btn-sm">Show</a>
          <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
           @csrf
           @method('DELETE')
           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>
         </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@else

    <p>No Gold Users found.</p>

@endif
     </div>
    </div>
   </div>
  </div>
 </div>
 @include('sweetalert::alert')

</section>
<!--/ Configuration option table -->

{{-- order count --}}
<div class="content-overlay"></div>



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