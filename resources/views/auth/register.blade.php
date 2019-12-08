@extends('layouts.app')

@section('content')
<div class="col-12 col-sm-8 offset-sm-2 col-md-8 offset-md-2 col-lg-8 offset-lg-2">
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
        <div class="card-header"><h4>Register {{ ucfirst($role->name) }}</h4></div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="role_id" value="{{ $role->id }}">
                <div class="form-group">
                    <label for="name">{{ __('Name') }}</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="email">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                    <input id="password_confirmation" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required>
                    @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-12">
                      Already have account? <a href="{{ url('login') }}"> Login here </a>
                    </div>
                </div> <br />

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
    $('#dob').datepicker({
          keyboardNavigation: false,
          forceParse: false,
          autoclose: true,
          todayHighlight: true,
          // startDate: Date(),
          clearBtn: true
    });
</script>
@endsection
