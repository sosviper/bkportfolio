@php
$configData = Helper::appClasses();
$customizerHidden = 'customizer-hide';
@endphp

@extends('layouts/blankLayout')

@section('title', 'Login')

@section('page-style')
{{-- Page Css files --}}
<link rel="stylesheet" href="{{ asset(mix('assets/vendor/css/pages/page-auth.css')) }}">
@endsection

@section('content')
<div class="authentication-wrapper authentication-cover">
  <div class="m-0 authentication-inner row">
    <!-- /Left Text -->
    <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
      <div class="flex-row mx-auto text-center">
        <img src="{{asset('assets/img/pages/login-'.$configData['style'].'.png')}}" alt="Auth Cover Bg color" width="520" class="img-fluid authentication-cover-img" data-app-light-img="pages/login-light.png" data-app-dark-img="pages/login-dark.png">
        <div class="mx-auto">
          <h3>Discover the powerful BK Ingenieros 🥳</h3>
          <p>
            Perfectly suited for all level of developers which helps you to <br> kick start your next big projects & Applications.
          </p>
        </div>
      </div>
    </div>
    <!-- /Left Text -->

    <!-- Login -->
    <div class="p-4 d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5">
      <div class="mx-auto w-px-400">
        {{-- <!-- Logo -->
        <div class="mb-4 app-brand justify-content-center">
          <a href="{{url('/')}}" class="gap-2 mb-2 app-brand-link">
            <span class="app-brand-logo demo">@include('_partials.macros')</span>
            <span class="mb-0 app-brand-text demo h3 fw-bold">{{config('variables.templateName')}}</span>
          </a>
        </div>
        <!-- /Logo --> --}}
        <h4 class="mb-2">Welcome to your portfolio BK Ingenieros! 👋</h4>
        <p class="mb-4">Please sign-in to your account and start the adventure</p>

        @if (session('status'))
        <div class="mb-1 alert alert-success rounded-0" role="alert">
          <div class="alert-body">
            {{ session('status') }}
          </div>
        </div>
        @endif

        <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="login-email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="login-email" name="email" placeholder="john@example.com" autofocus value="{{ old('email') }}">
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
              <label class="form-label" for="login-password">Password</label>
              @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}">
                <small>Forgot Password?</small>
              </a>
              @endif
            </div>
            <div class="input-group input-group-merge">
              <input type="password" id="login-password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
              <span class="cursor-pointer input-group-text"><i class="bx bx-hide"></i></span>
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
          <div class="mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="remember-me" name="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember-me">
                Remember Me
              </label>
            </div>
          </div>
          <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
        </form>

        
      </div>
    </div>
    <!-- /Login -->
  </div>
</div>
@endsection