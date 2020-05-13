@extends('layouts.app')
@section('content')

<div class="container">
  <div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
      <!-- Nested Row within Card Body -->
      <div class="row">
        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
        <div class="col-lg-7">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Reset password</h1>
            </div>
            <form class="user" method="POST" action="{{ route('password.request') }}">
              {{ csrf_field() }}
              <input type="hidden" name="token" value="{{ $token }}">
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail email" name="email" placeholder="Email Address" value="{{ $email or old('email') }}" required autofocus>
                @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="exampleInputPassword" name="password" placeholder="Password">
                  @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="exampleRepeatPassword password-confirm" name="password_confirmation" placeholder="Repeat Password" name="password_confirmation" required>
                  @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block">
                Update password
              </button>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection