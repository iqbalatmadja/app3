@extends('layouts.app',['pagetitle'=>'Dashboard'])

@section('content')
<style>
.center{
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 1px; 
}
</style>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('components.topnav')
    @include('components.sidebar')
    <div class="content-wrapper" >
      @include('components.pageheader',['pagetitle'=>'Register'])
      <div class="card-body">
        <div class="register-box">



          <div class="card card-outline card-primary center" style="top: 450px;">
            <div class="card-header text-center">
              <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
              <p class="login-box-msg">{{ __('Register a new membership') }}</p>

              <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="{{ __('Full name') }}" name="name" id="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-user"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email') }}" name="email" id="email" value="{{ old('email') }}">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-envelope"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror"" placeholder="{{ __('Password') }}" required autocomplete="new-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" placeholder="{{ __('Confirm Password') }}">
                  <div class="input-group-append">
                    <div class="input-group-text">
                      <span class="fas fa-lock"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="icheck-primary">
                      <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                        <label for="agreeTerms">
                        I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                  </div>
                </div>
              </form>
            <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
  </div><!-- /.card -->
  </div>
  </div>
  </div>
  </div>
  </div>
  @include('components.mainfooter')
  <script>
  $(document).ready(function(){
  });
  </script>
</body>
</html>
@endsection
