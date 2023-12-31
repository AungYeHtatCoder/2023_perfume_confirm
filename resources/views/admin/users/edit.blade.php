@extends('layouts.admin_app')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
<div class="content-header row">
 <div class="content-header-light col-12">
  <div class="row">
   <div class="content-header-left col-md-9 col-12 mb-2">
    <h3 class="content-header-title">User Update Dashboard</h3>
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
       <li class="breadcrumb-item active">User Update Dashboard
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
      <a href="{{ route('admin.users.create') }}" class="btn btn-success btn-round">New User Create</a>
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
          <h4 class="card-title" id="from-actions-top-bottom-center">User Update</h4>
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


           <form class="form" method="post" action="{{ route('admin.users.update', $user_edit['id']) }}">
            @csrf
            @method('PUT')
            <div class="form-body">
             <div class="row">
              <div class="form-group col-12 mb-2">
               <label for="eventInput2"> Name</label>
               <input type="text" id="name" class="form-control" placeholder="Role Name" name="name"
                value="{{ $user_edit->name }}">
              </div>
             </div>

             <div class="row">
              <div class="form-group col-12 mb-2">
               <label for="email">Email</label>
               <input type="email" id="email" class="form-control" placeholder="Email" name="email"
                value="{{ $user_edit->email }}">
              </div>
             </div>

             <div class="row">
              <div class="form-group col-12 mb-2">
               <label for="eventInput2">Password</label>
               <input type="password" id="email" class="form-control"
                placeholder="Enter your current password or New Password" name="password">
              </div>
             </div>
             <div class="row">
              <div class="form-group col-12 mb-2 {{ $errors->has('roles') ? 'has-error' : '' }}">
               <label for="roles">Role</label>
               <span class="btn btn-info btn-sm select-all">Select All</span>
               <span class="btn btn-info btn-sm deselect-all">Deslect</span></label>
               <select name="roles[]" id="roles" class="form-control select2" multiple="multiple" required>
                @foreach($roles as $id => $role)
                <option value="{{ $id }}"
                 {{ (in_array($id, old('roles', [])) || $user_edit->roles->contains($id)) ? 'selected' : '' }}>
                 {{ $role }}
                </option>
                @endforeach
               </select>

              </div>
             </div>

            </div>

            <div class="form-actions text-center">
             <button type="button" class="btn btn-warning mr-1">
              <i class="ft-x"></i> Cancel
             </button>
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
 @include('sweetalert::alert')

</section>
<!--/ Configuration option table -->
@endsection

@section('scripts')
<!-- <script src="{{ asset('admin_app/app-assets/vendors/js/material-vendors.min.js') }}"></script> -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
<script>
$(document).ready(function() {
 $('.select2').select2({
  multiple: true
 });

 $('.select-all').click(function() {
  $('#permissions option').prop('selected', true);
  $('#permissions').trigger('change.select2');
 });

 $('.deselect-all').click(function() {
  $('#permissions option').prop('selected', false);
  $('#permissions').trigger('change.select2');
 });

 // Initialize Select2
 $('#permissions').select2();
});
</script>
@endsection