@extends('layouts.admin_app')
@section('content')
<div class="content-header row">
 <div class="content-header-light col-12">
  <div class="row">
   <div class="content-header-left col-md-9 col-12 mb-2">
    <h3 class="content-header-title">Dashboard</h3>
    <div class="row breadcrumbs-top">
     <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
       <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a>
       </li>
       {{-- <li class="breadcrumb-item"><a href="#">DataTables</a>
       </li> --}}
       <li class="breadcrumb-item active">Dashboard
       </li>
      </ol>
     </div>
    </div>
   </div>
   {{-- <div class="content-header-right col-md-3 col-12">
    <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
     <button class="btn btn-primary round dropdown-toggle dropdown-menu-right box-shadow-2 px-2 mb-1" id="btnGroupDrop1"
      type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
     <div class="dropdown-menu"><a class="dropdown-item" href="component-alerts.html"> Alerts</a><a
       class="dropdown-item" href="material-component-cards.html"> Cards</a><a class="dropdown-item"
       href="component-progress.html"> Progress</a>
      <div class="dropdown-divider"></div><a class="dropdown-item" href="register-with-bg-image.html"> Register</a>
     </div>
    </div>
   </div> --}}
  </div>
 </div>
</div>
<div class="content-overlay"></div>
<!-- dashboard main content start -->
<div class="content-body">
 <!-- eCommerce statistic -->
 <div class="row">
  <div class="col-xl-3 col-lg-6 col-12">
   <div class="card pull-up">
    <div class="card-content">
     <div class="card-body">
      <div class="media d-flex">
       <div class="media-body text-left">
        <h3 class="info">{{ $soldProductsCount }} %</h3>
        <h3 class="info">{{ count($sold_out_orders) }}</h3>
        <h6>Products Sold</h6>
       </div>
       <div>
        <i class="icon-basket-loaded info font-large-2 float-right"></i>
       </div>
      </div>
      <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
       <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: {{ $progressPercentage }}%"
        aria-valuenow="{{ $progressPercentage }}" aria-valuemin="0" aria-valuemax="100"></div>
      </div>

     </div>
    </div>
   </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-12">
   <div class="card pull-up">
    <div class="card-content">
     <div class="card-body">
      <div class="media d-flex">
       <div class="media-body text-left">
        <h4 class="primary">Today Income</h4>
        <h3 class="warning" id="today_income"></h3>
        <h6 id="income_date">Net Profit</h6>
       </div>

       <div>
        <i class="icon-pie-chart warning font-large-2 float-right"></i>
       </div>
      </div>
      <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
       <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 65%" aria-valuenow="65"
        aria-valuemin="0" aria-valuemax="100" id="income_progressbar"></div>
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-12">
   <div class="card pull-up">
    <div class="card-content">
     <div class="card-body">
      <div class="media d-flex">
       <div class="media-body text-left">
        <h4 class="info">Week Income</h4>
        <h3 class="success" id="week_income"></h3> <!-- Note the id here -->
        <h6 id="week_income_date">Week of:</h6> <!-- Changed the label here -->
       </div>
       <div>
        <i class="icon-user-follow success font-large-2 float-right"></i>
       </div>
      </div>
      <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
       <div id="week_income_progressbar" class="progress-bar bg-gradient-x-success" role="progressbar"
        style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div> <!-- Note the id here -->
      </div>
     </div>

    </div>
   </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-12">
   <div class="card pull-up">
    <div class="card-content">
     <div class="card-body">
      <div class="media d-flex">
       <div class="media-body text-left">
        <h3 class="danger">99.89 %</h3>
        <h6>Customer Satisfaction</h6>
       </div>
       <div>
        <i class="icon-heart danger font-large-2 float-right"></i>
       </div>
      </div>
      <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
       <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 85%" aria-valuenow="85"
        aria-valuemin="0" aria-valuemax="100"></div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!--/ eCommerce statistic -->

 <!-- Products sell and New Orders -->
 <div class="row match-height">

  <!-- week  -->
  <!-- <div class="col-xl-8 col-12" id="ecommerceChartView">
   <div class="card card-shadow">
    <div class="card-header card-header-transparent py-20">
     <div class="btn-group dropdown">
      <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES By Week</a>
      <div class="dropdown-menu animate" role="menu">
      </div>
     </div>
     <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
     </ul>
    </div>
    <div class="widget-content tab-content bg-white p-20">
     <div class="ct-chart tab-pane active scoreLineShadow">
      <canvas id="scoreLineToWeek" width="100%" height="50">
     </div>

    </div>
   </div>
  </div> -->
  <!-- week end -->
  <!-- today -->
  <div class="col-xl-8 col-12" id="ecommerceChartView">
   <div class="card card-shadow">
    <div class="card-header card-header-transparent py-20">
     <div class="btn-group dropdown">
      <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES Monthly
       Income</a>
      <div class="dropdown-menu animate" role="menu">
       <a class="dropdown-item" href="#" role="menuitem">Sales</a>
       <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
       <a class="dropdown-item" href="#" role="menuitem">Profit</a>
      </div>
     </div>
    </div>
    <div class="widget-content tab-content bg-white p-20">
     <div class="ct-chart tab-pane active scoreLineShadow">
      <canvas id="monthly_sales" width="100%" height="50"></canvas>
     </div>
    </div>
   </div>
  </div>
  <!-- month  -->
  <!--<div class="col-xl-8 col-12" id="ecommerceChartView">
   <div class="card card-shadow">
    <div class="card-header card-header-transparent py-20">
     <div class="btn-group dropdown">
      <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES By Month</a>
      <div class="dropdown-menu animate" role="menu">
       <a class="dropdown-item" href="#" role="menuitem">Sales</a>
       <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
       <a class="dropdown-item" href="#" role="menuitem">profit</a> 
      </div>
     </div>
     <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
      <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
     </ul>
    </div>
    <div class="widget-content tab-content bg-white p-20">
     <div class="ct-chart tab-pane active scoreLineShadow">
      <canvas id="scoreLineToMonth" width="100%" height="50">
     </div>

    </div>
   </div>
  </div> -->
  <!-- month  -->
  <!-- new order start -->
  <div class="col-xl-4 col-lg-12">
   <div class="card">
    <div class="card-header">
     <h4 class="card-title">New Orders</h4>
     <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
     <div class="heading-elements">
      <ul class="list-inline mb-0">
       <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
      </ul>
     </div>
    </div>
    <div class="card-content">
     <div id="new-orders" class="media-list position-relative">
      <div class="table-responsive">
       <table id="new-orders-table" class="table table-hover table-xl mb-0">
        <thead>
         <tr>
          <th class="border-top-0">Product</th>
          <th class="border-top-0">Customers</th>
          <th class="border-top-0">Total</th>
         </tr>
        </thead>
        <tbody>
         @foreach ($orders as $order)
         @if($order->status === 'pending')
         <tr>
          <td class="text-truncate">
           @foreach($order->products as $product)

           {{ $product->name }}
           @endforeach

          </td>
          <td class="text-truncate p-1">
           <ul class="list-unstyled users-list m-0">
            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="{{ $order->user->name }}"
             class="avatar avatar-sm pull-up">
             <img class="media-object rounded-circle" src="{{ asset('assets/img/profile/'.$order->user->profile) }}"
              alt="Avatar">
            </li>
           </ul>
          </td>
          <td class="text-truncate">
           {{ $order->sub_total }} MMK
          </td>
         </tr>
         @endif
         @endforeach
        </tbody>
       </table>
      </div>
     </div>
    </div>
   </div>
  </div>
  <!-- new order end -->
 </div>
 <!--/ Products sell and New Orders -->

 <!-- Recent Transactions -->

 <!--/ Recent Transactions -->

 <!--Recent Orders & Monthly Sales -->
 <div class="row match-height mt-5">
  <div class="col-xl-10 col-lg-12">
   <div class="card">
    <div class="card-header">
     <h4 class="card-title">January Month Daily Order Income</h4>
     <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
     <div class="heading-elements">
      <ul class="list-inline mb-0">
       <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
      </ul>
     </div>
    </div>
    <div class="card-content ">
     <canvas id="January_sales" class="height-250 position-relative"></canvas>
    </div>
    <div class="card-footer">
     <div class="row mt-1">
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Products</h6>
       <h2 class="block font-weight-normal">18.6 k</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 70%" aria-valuenow="70"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Sales</h6>
       <h2 class="block font-weight-normal">64.54 M</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow="60"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Cost</h6>
       <h2 class="block font-weight-normal">24.38 B</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 40%" aria-valuenow="40"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Revenue</h6>
       <h2 class="block font-weight-normal">36.72 M</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="90"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>

  <!--/Recent Orders & Monthly Sales -->

  <!-- Basic Horizontal Timeline -->

  <!--/ Basic Horizontal Timeline -->
 </div>
 <!-- second  -->
 <div class="row match-height">
  <div class="col-xl-10 col-lg-12">
   <div class="card">
    <div class="card-header">
     <h1>
      February Month Daily Order Income
     </h1>
    </div>
    <div class="card-content ">
     <canvas id="February_sales" class="height-250 position-relative"></canvas>
    </div>

   </div>
  </div>

  <!--/Recent Orders & Monthly Sales -->

  <!-- Basic Horizontal Timeline -->

  <!--/ Basic Horizontal Timeline -->
 </div>
 <!-- second end -->
 <!-- third -->
 <div class="row match-height">
  <div class="col-xl-10 col-lg-12">
   <div class="card">
    <div class="card-header">
     <h1>
      March Month Daily Order Income
     </h1>
    </div>
    <div class="card-content ">
     <canvas id="March_sales" class="height-250 position-relative"></canvas>
    </div>

   </div>

   <!-- first card -->
   <div class="card">
    <div class="card-header">
     <h1>
      April Month Daily Order Income
     </h1>
    </div>
    <div class="card-content ">
     <canvas id="April_sales" class="height-250 position-relative"></canvas>
    </div>

   </div>
   <!-- first card -->
   <!-- second -->
   <div class="card">
    <div class="card-header">
     <h1>
      May Month Daily Order Income
     </h1>
    </div>
    <div class="card-content ">
     <canvas id="May_sales" class="height-250 position-relative"></canvas>
    </div>
    <div class="card-footer">
     <div class="row mt-1">
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Products</h6>
       <h2 class="block font-weight-normal">18.6 k</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 70%" aria-valuenow="70"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Sales</h6>
       <h2 class="block font-weight-normal">64.54 M</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow="60"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Cost</h6>
       <h2 class="block font-weight-normal">24.38 B</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 40%" aria-valuenow="40"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Revenue</h6>
       <h2 class="block font-weight-normal">36.72 M</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="90"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <!-- second end -->
   <!-- third -->
   <div class="card">
    <div class="card-header">
     <h1>
      June Month Daily Order Income
     </h1>
    </div>
    <div class="card-content ">
     <canvas id="June_sales" class="height-250 position-relative"></canvas>
    </div>
    <div class="card-footer">
     <div class="row mt-1">
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Products</h6>
       <h2 class="block font-weight-normal">18.6 k</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 70%" aria-valuenow="70"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Sales</h6>
       <h2 class="block font-weight-normal">64.54 M</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow="60"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Cost</h6>
       <h2 class="block font-weight-normal">24.38 B</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 40%" aria-valuenow="40"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Revenue</h6>
       <h2 class="block font-weight-normal">36.72 M</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="90"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <!-- third end -->
   <!-- forth -->
   <div class="card">
    <div class="card-header">
     <h1>
      July Month Daily Order Income
     </h1>
    </div>
    <div class="card-content ">
     <canvas id="July_sales" class="height-250 position-relative"></canvas>
    </div>
    <div class="card-footer">
     <div class="row mt-1">
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Products</h6>
       <h2 class="block font-weight-normal">18.6 k</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-info" role="progressbar" style="width: 70%" aria-valuenow="70"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Sales</h6>
       <h2 class="block font-weight-normal">64.54 M</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-warning" role="progressbar" style="width: 60%" aria-valuenow="60"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Cost</h6>
       <h2 class="block font-weight-normal">24.38 B</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-danger" role="progressbar" style="width: 40%" aria-valuenow="40"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
      <div class="col-3 text-center">
       <h6 class="text-muted">Total Revenue</h6>
       <h2 class="block font-weight-normal">36.72 M</h2>
       <div class="progress progress-sm mt-1 mb-0 box-shadow-2">
        <div class="progress-bar bg-gradient-x-success" role="progressbar" style="width: 90%" aria-valuenow="90"
         aria-valuemin="0" aria-valuemax="100"></div>
       </div>
      </div>
     </div>
    </div>
   </div>
   <!-- forth end -->
   <!-- fifth -->
   <div class="card">
    <div class="card-header">
     <h1>
      August Month Daily Order Income
     </h1>
    </div>
    <div class="card-content ">
     <canvas id="August_sales" class="height-250 position-relative"></canvas>
    </div>

   </div>
   <!-- fith end -->
   <!-- sixth  -->
   <div class="card">
    <div class="card-header">
     <h1>
      September Month Daily Order Income
     </h1>
    </div>
    <div class="card-content ">
     <canvas id="September_sales" class="height-250 position-relative"></canvas>
    </div>

   </div>
   <!-- sixth end -->
   <!-- sevent -->
   <div class="card">
    <div class="card-header">
     <h1>
      October Month Daily Order Income
     </h1>
    </div>
    <div class="card-content ">
     <canvas id="October_sales" class="height-250 position-relative"></canvas>
    </div>

   </div>
   <!-- sevent end -->
   <!-- eight -->
   <div class="card">
    <div class="card-header">
     <h1>
      November Month Daily Order Income
     </h1>
    </div>
    <div class="card-content ">
     <canvas id="November_sales" class="height-250 position-relative"></canvas>
    </div>

   </div>
   <!-- eight end -->
   <!-- nine -->
   <div class="card">
    <div class="card-header">
     <h1>
      December Month Daily Order Income
     </h1>
    </div>
    <div class="card-content ">
     <canvas id="December_sales" class="height-250 position-relative"></canvas>
    </div>

   </div>
   <!-- nine end -->
  </div>
 </div>
</div>
<!-- third -->
<!-- dashboard main content end -->
@endsection
@section('scripts')
@include('layouts.chart')
@include('layouts.today_chart')
@include('layouts.cost_chart')

@endsection