@extends('layouts.app')
  
@section('content')
<div class="col-12 col-sm-6 offset-sm-3 col-md-6 offset-md-3 col-lg-6 offset-lg-3">
  <div class="login-brand">
      L &nbsp; i &nbsp; <img src="{{ asset('assets/landing/dist/images/logo.svg') }}" alt="logo" /> &nbsp; r &nbsp; a
  </div> 
  
  @include('components.alert')
  @if ($errors->any())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
      </div>
  @endif
   <div class="card card-primary">
      <div class="card-header"><h4>{{ __('Reset Password') }}</h4></div>

      <div class="card-body">
        @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
        @endif

        <p class="text-muted">We will send a link to reset your password</p>
        <form method="POST" action="{{ route('password.email') }}">
          @csrf

          <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" tabindex="1" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                {{ __('Send Password Reset Link') }}
            </button>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection