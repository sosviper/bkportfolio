
@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/flatpickr/flatpickr.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/pickr/pickr-themes.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/jquery-timepicker/jquery-timepicker.js')}}"></script>
<script src="{{asset('assets/vendor/libs/pickr/pickr.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/forms-pickers.js')}}"></script>
@endsection

@section('content')
<div class="row">
  <!-- Website Analytics-->
  <div class="col-lg-12 col-md-12 mb-4">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title mb-0"></h5>
        
      </div>
      <div class="card-body pb-2">
          <div class="card mb-4">
            <h5 class="card-header">Nuevo Blog</h5>
            
            <div class="card-body">
              <form id="formAccountSettings" action="{{ route('admin.blogs.save') }}" method="POST" enctype="multipart/form-data"  class="fv-plugins-bootstrap5 fv-plugins-framework" >
                @csrf
                <div class="row">
                 
                  <div class="mb-3 col-md-6">
                    <label  class="form-label">Titulo</label>
                    <input class="form-control" type="text"  name="title" >
                  </div>
                  
                  <div class="mb-3 col-md-6">
                    <label  class="form-label">Subcategoria</label>
                    <input class="form-control" type="text"  name="subcategory" >
                  </div>
                  <div class="mb-3 col-md-6">
                    <label  class="form-label">Logo</label>
                    <input class="form-control" type="file"  name="logo_url" >
                  </div>
                  <div class="mb-3 col-md-6">
                    <label  class="form-label">Color</label>
                    <input class="form-control" type="color"  name="color_hex" >
                  </div>
                  
                  <div class="mb-3 col-md-6">
                    <label  class="form-label">Body</label>
                    <textarea class="form-control" name="body">
                    </textarea>
                  </div>
                  
                  
                 
                  
                 
                 
                  
                </div>
                <div class="mt-2">
                  <button type="submit" class="btn btn-primary me-2">Save changes</button>
                  <button type="reset" class="btn btn-label-secondary">Cancel</button>
                </div>
              <input type="hidden"></form>
            </div>
            <!-- /Account -->
          </div>
      </div>
    </div>

  </div>

  
</div>

@endsection
