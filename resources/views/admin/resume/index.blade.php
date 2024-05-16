
@extends('layouts/layoutMaster')

@section('title', 'Home')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/typography.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/katex.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/quill/editor.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/tagify/tagify.css')}}" />

@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/quill/katex.js')}}"></script>
<script src="{{asset('assets/vendor/libs/quill/quill.js')}}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script src="{{asset('assets/vendor/libs/tagify/tagify.js')}}"></script>

@endsection

@section('page-script')
<script src="{{asset('assets/js/forms-tagify.js')}}"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

  
</script>
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
          <form id="formAccountSettings" action="{{ route('admin.resume.save') }}" method="POST"  class="fv-plugins-bootstrap5 fv-plugins-framework" >
            @csrf
            <div class="row">
            @foreach ($educations as $edu)
              <h1>Educacion {{ $edu->id }}</h1>
              <div class="mb-3 col-md-4">
                <label  class="form-label">Date</label>
                <input class="form-control" type="text"  name="e{{ $edu->id }}_date" value="{{ $edu->dates }}" >
              </div>
              <div class="mb-3 col-md-4">
                <label  class="form-label">Title</label>
                <input class="form-control" type="text"  name="e{{ $edu->id }}_title" value="{{ $edu->title }}" >
              </div>
              <div class="mb-3 col-md-4">
                <label  class="form-label">Where</label>
                <input class="form-control" type="text"  name="e{{ $edu->id }}_where" value="{{ $edu->description }}" >
              </div>
                
            @endforeach
            <hr>
            @foreach ($experiences as $experience)
              <h1>Experiencia {{ $experience->id }}</h1>
              <div class="mb-3 col-md-4">
                <label  class="form-label">Date</label>
                <input class="form-control" type="text"  name="j{{ $experience->id }}_date" value="{{ $experience->dates }}" >
              </div>
              <div class="mb-3 col-md-4">
                <label  class="form-label">Title</label>
                <input class="form-control" type="text"  name="j{{ $experience->id }}_title" value="{{ $experience->title }}" >
              </div>
              <div class="mb-3 col-md-4">
                <label  class="form-label">Where</label>
                <input class="form-control" type="text"  name="j{{ $experience->id }}_where" value="{{ $experience->description }}" >
              </div>
                
            @endforeach
            <hr>
            @foreach ($workingSkills as $skill)
              <h1>Working Skill {{ $skill->id }}</h1>
              <div class="mb-3 col-md-6">
                <label  class="form-label">Title</label>
                <input class="form-control" type="text"  name="w{{ $skill->id }}_title" value="{{ $skill->title }}" >
              </div>
              <div class="mb-3 col-md-6">
                <label  class="form-label">Percentage</label>
                <input class="form-control" type="text"  name="w{{ $skill->id }}_percentage" value="{{ $skill->percentage }}" >
              </div>
              
                
            @endforeach
            <hr>
            <h1>Experiencia</h1>
            <div class="col-md-6 mb-4">
              <input id="TagifyBasic" class="form-control" name="tags" value="
              @foreach ( $knows as $tag )
                {{ $tag->title }},
              @endforeach" />
            </div>

              
             
              
             
             
              
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-primary me-2">Save changes</button>
              <button type="reset" class="btn btn-label-secondary">Cancel</button>
            </div>
          <input type="hidden"></form>
      </div>
    </div>

  </div>

  
</div>

@endsection
