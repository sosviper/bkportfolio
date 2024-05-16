
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
        <div class="d-flex justify-content-around align-items-center flex-wrap mb-4">
          <div class="card mb-4">
            <h5 class="card-header">About me</h5>
            
            <div class="card-body">
              <form id="formAccountSettings" action="{{ route('admin.saveAboutme') }}" method="POST"  class="fv-plugins-bootstrap5 fv-plugins-framework" enctype="multipart/form-data">
                @csrf
                <div class="row">
                 
                  <div class="mb-3 col-md-6">
                    <label  class="form-label">Facebook Url</label>
                    <input class="form-control" type="text" " name="facebook_url" value="{{ Auth::user()->facebook_url }}" placeholder="john.doe@example.com">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label  class="form-label">Twitter Url</label>
                    <input class="form-control" type="text" " name="twitter_url" value="{{ Auth::user()->twitter_url }}" placeholder="john.doe@example.com">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label  class="form-label">Dribbble Url</label>
                    <input class="form-control" type="text" " name="dribbble_url" value="{{ Auth::user()->dribbble_url }}" placeholder="john.doe@example.com">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label  class="form-label">Linkedin Url</label>
                    <input class="form-control" type="text" " name="linkedin_url" value="{{ Auth::user()->linkedin_url }}" placeholder="john.doe@example.com">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label  class="form-label">Teléfono</label>
                    <input class="form-control" type="text" " name="phone" value="{{ Auth::user()->phone }}" placeholder="john.doe@example.com">
                  </div><div class="mb-3 col-md-6">
                    <label  class="form-label">Dirección</label>
                    <input class="form-control" type="text" " name="address" value="{{ Auth::user()->address }}" placeholder="john.doe@example.com">
                  </div><div class="mb-3 col-md-6">
                    <label  class="form-label">Año de nacimiento</label>
                    <input class="form-control" type="text" " name="birthdate" value="{{ Auth::user()->birthdate }}" placeholder="john.doe@example.com">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label  class="form-label">CV</label>
                    <input class="form-control" type="file"  name="cv_url" >
                  </div>
                  <hr>
                  <div class="mb-3 col-md-12">
                    <textarea name="bio" id="editor" >
                      {{ Auth::user()->bio }}
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

  
</div>

@endsection
