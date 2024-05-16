
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
      <h5 class="card-header">Trabajos</h5>
      <a href="{{ route('admin.jobs.create') }}"><button type="button" class="btn btn-primary">Crear nuevo trabajo</button></a>
      <div class="table-responsive text-nowrap">
        <table class="table">
          <thead>
            <tr>
              <th>Titulo</th>
              <th>Color</th>
              <th>Creado</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @forelse ($jobs as $job)
            <tr>
              <td><img src="{{ $job->logo_url }}" alt="Avatar" class="avatar  "> <strong>{{ $job->title }}</strong></td>
              <td>
                <span class="badge bg-primary" >{{ $job->color_hex }}</span>
              </td>
              <td><span class="badge bg-label-primary me-1">{{ $job->created_at }}</span></td>
              <td>
                <a href="{{ route('admin.jobs.edit', $job) }}"><button type="button" class="btn btn-warning">Editar</button></a>
                <a href="{{ route('admin.jobs.delete', $job) }}"><button type="button" class="btn btn-danger">Eliminar</button></a>
                
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
