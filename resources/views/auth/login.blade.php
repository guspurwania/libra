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
      <div class="card-header"><h4>Login Panel</h4></div>

      <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
          @csrf

          <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" tabindex="1" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </div>

          <div class="form-group">
            <div class="d-block">
              <label for="password" class="control-label">{{ __('Password') }}</label>
              @if (Route::has('password.request'))
                <div class="float-right">
                  <a href="{{ route('password.request') }}" class="text-small">
                      {{ __('Forgot Your Password?') }}
                  </a>
                </div>
              @endif
            </div>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" tabindex="2" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="custom-control-label" for="remember">{{ __('Remember Me') }}</label>
                </div>
              </div>
            </div>
            <div class="col-md-8" align="right">
              Dont have account? <br /> 
              <a href="{{ url('register/lecture') }}"> Register as a Lecture </a> | <a href="{{ url('register/student') }}"> Register as a Student </a>
            </div>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                {{ __('Login') }}
            </button>
          </div>
        </form>
      </div>
    </div>
</div>
@endsection