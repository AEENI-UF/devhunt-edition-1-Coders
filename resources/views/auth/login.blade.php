@extends('layouts.app')

@section('content')
<!-- Section: Design Block -->
<section class="vh-50" style="background-color: #450002;">
  <div class="container py-4 h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form  method="POST" action="{{ route('login') }}">
                   @csrf


                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login dans votre compte</h5>

                  <div class="form-outline mb-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  class="form-control form-control-lg" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    <label class="form-label" for="form2Example17">{{ __('Email Address') }}</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  class="form-control form-control-lg" name="password" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    <label class="form-label" for="form2Example27">{{ __('Password') }}</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-blue btn-lg btn-block" type="submit"> {{ __('Login') }}</button>
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

</section>
@endsection
