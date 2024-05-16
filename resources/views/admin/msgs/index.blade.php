
@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
@endsection

@section('page-script')

@endsection

@section('content')
<div class="row">
  <!-- Website Analytics-->
  <div class="col-lg-12 col-md-12 mb-4">
    <div class="card">
      <h5 class="card-header">Mensajes</h5>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Email</th>
              <th>Cuerpo del mensaje</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @forelse ($msgs as $msg)
            <tr>
              <td><strong>{{ $msg->name_sender }}</strong></td>
              <td>
                <span class="badge bg-primary" >{{ $msg->mail_sender }}</span>
              </td>
              <td><span class="badge bg-label-primary me-1">{{ $msg->body_sender }}</span></td>
              <td>
                <a href="{{ route('admin.msgs.delete', $msg) }}"><button type="button" class="btn btn-danger">Eliminar</button></a>
                
              </td>
            </tr>
            @empty
                
            @endforelse
            
            
          </tbody>
        </table>
      </div>
    </div>

  </div>

  
</div>

@endsection
