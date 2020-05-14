@extends('layouts.auth.auth')
@section('content')

<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                </div>
                <form class="user" action="{{route('login')}}" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                    @if ($errors->has('email') || $errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <input type="email" class="form-control form-control-user form-group{{ $errors->has('email') ? ' has-error' : '' }}" id="exampleInputEmail email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user form-group{{ $errors->has('password') ? ' has-error' : '' }}" id="exampleInputPassword password" name="password" placeholder="Password">
                  </div>
                  <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                      <input type="checkbox" class="custom-control-input" id="customCheck">
                      <label class="custom-control-label" for="customCheck">Remember Me</label>
                      <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
                    </div>
                  </div> -->
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Login
                  </button>

                  <a href="home" class="btn btn-success btn-user btn-block">
                    <i>Go to home page without login</i>
                  </a>
                  
                  <hr>
                  <a href="{{ route('auth.google') }}" class="btn btn-google btn-user btn-block">
                    <i class="fab fa-google-plus-g fa-fw"></i> Login with Google 
                  </a>
                  <a href="index.html" class="btn btn-facebook btn-user btn-block">
                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                  </a>
                </form>
                <hr>
                <div class="text-center">
                  <a class="small" href="{{ route('password.request') }}">Forgot Password?</a>
                </div>
                <div class="text-center">
                  <a class="small" href="{{route('register')}}">Create an Account!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>

<?php if (isset($message)) { ?>
        <script>
          alertify.notify("{{ $message }}", "success", 4);
        </script>
<?php } ?>

@endsection
