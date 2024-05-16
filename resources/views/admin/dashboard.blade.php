
@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('vendor-style')
@endsection

@section('vendor-script')
@endsection

@section('page-script')
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
        <div class="d-flex justify-content-around align-items-center flex-wrap mb-4">
            <h1>Bienvenido {{ Auth::user()->name }} 👋</h1>
        </div>
      </div>
    </div>

  </div>

  
</div>
@endsection
