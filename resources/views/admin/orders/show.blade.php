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
    <h3 class="content-header-title">Order View</h3>
    <div class="row breadcrumbs-top">
     <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
       </li>
       <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Back To Products </a>
       </li>
       <li class="breadcrumb-item active">Order View
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
      <a href="{{ url('/admin/orders/') }}" class="btn btn-success btn-round">Back To Order | Lists </a>
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
       <div class="col-md-10">
        <div class="card">
         <div class="card-header">
          <h4 class="card-title" id="from-actions-top-bottom-center">Order View</h4>
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
            <div class="d-flex justify-content-between">
                <h3 class="mb-2">Customer -
                    @foreach ($users as $user)
                    {{ $order->user_id === $user->id ? $user->name : "" }}
                    @endforeach
                    <small>({{ date('M d, Y', strtotime($order->created_at)) }})</small>
                </h3>

                <div class="">
                    <button class="btn btn-sm btn-outline-secondary" id="print">Print</button>
                </div>
            </div>


            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product</th>
                        <th>Size</th>
                        <th>Qty</th>
                        <th>Unit Price</th>
                        <th>Total Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->order_products as $key => $order_product)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>
                            @foreach ($products as $p)
                            {{ $p->id === $order_product->product_id ? $p->name : "" }}
                            @endforeach
                        </td>
                        <td>
                            @foreach ($sizes as $s)
                            {{ $s->id === $order_product->size_id ? $s->name : "" }}
                            @endforeach
                        </td>
                        <td>
                            {{ $order_product->qty }}
                        </td>
                        <td>
                            @php
                                $product = App\Models\Admin\Product::find($order_product->product_id);
                            @endphp
                            @foreach ($product->sizes as $s)
                            @if ($s->id === $order_product->size_id)
                            {{ $s->pivot->discount_price ? number_format($s->pivot->discount_price) : number_format($s->pivot->normal_price) }} MMK
                            @endif
                            @endforeach
                        </td>
                        <td>
                            {{ number_format($order_product->total_price) }} MMK
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="5">
                            <b>Grand Total</b>
                        </td>
                        <td>
                            <b>{{ number_format($order->sub_total) }} MMK</b>
                        </td>
                    </tr>
                </tfoot>
            </table>
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
    // When the button with id "printButton" is clicked, call the printPage function
    $("#print").on("click", function() {
      window.print();
    });
</script>

@endsection
