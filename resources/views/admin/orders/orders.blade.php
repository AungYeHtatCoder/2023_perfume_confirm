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
    <h3 class="content-header-title">Orders</h3>
    <div class="row breadcrumbs-top">
     <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a>
       </li>
       {{-- <li class="breadcrumb-item"><a href="#">Brand Category DataTables</a>
       </li> --}}
       <li class="breadcrumb-item active">Orders
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
      {{-- <a href="{{ route('admin.brand_categories.create') }}" class="btn btn-primary btn-round">New Brand Category
       Create</a> --}}
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
         <th>Username</th>
         <th>Subtotal</th>
         <th>Payment Method</th>
         <th>Payment Photo</th>
         <th>Status</th>
         <th>Created_At</th>
         <th>Updated_At</th>
         <th>Action</th>

        </tr>
       </thead>
       <tbody>
        @foreach ($orders as $key => $order)
        <tr>
         <td>{{ ++$key }}</td>
         <td>
            @foreach ($users as $user)
            {{ $order->user_id === $user->id ? $user->name : "" }}
            @endforeach
        </td>
         <td>{{ number_format($order->sub_total) }} MMK</td>
         <td>{{ $order->payment_method }}</td>
         <td>
            @if ($order->payment_photo)
            <img src="{{ asset('assets/img/payments/' . $order->payment_photo) }}" width="100px" alt="">
            @endif
        </td>
        <td>
            <span class="badge badge-{{ $order->status === "completed" ? "success" : "warning" }}">{{ $order->status }}</span>
            <form action="{{ url('/admin/orders/statusChange/'.$order->id) }}" method="post">
                @csrf
                <select name="status" id="" class="form-select mt-1">
                    <option value="pending">Pending</option>
                    <option value="delivering">Delivering</option>
                    <option value="completed">Completed</option>
                </select>
                <button class="btn btn-sm btn-primary mt-1" type="submit">Change</button>
            </form>
        </td>
         <td>{{ $order->created_at }}</td>
         <td>{{ $order->updated_at }}</td>
         <td>
          <a href="" class="btn btn-warning btn-sm">Edit</a>
          <a href="" class="btn btn-primary btn-sm">Show</a>
          <form action="" method="POST">
           @csrf
           @method('DELETE')
           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>

         </td>
        </tr>
        @endforeach
       </tbody>
      </table>
      {{ $orders->links() }}
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
