@extends('layouts.app')

@section('content')
<div id="container">
<!-- Section: Design Block -->
<section class="vh-50" style="background-color: #D2D2CF;">
  <div class="container py-4 h-40">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="assets/img/why-us.png"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <h5 class="fw-normal mb-2 pb-2" style="letter-spacing: 1px;">Se connecter dans votre compte</h5>
                <form  method="POST" action="{{ route('login') }}">
                   @csrf
                  <div class="form-outline mb-4">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"  class="form-control form-control-lg" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    <label class="form-label" for="form2Example17">{{ __('Email Address') }}</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  class="form-control form-control-lg" name="password" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    <label class="form-label" for="form2Example27">{{ __('Password') }}</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit"> {{ __('Se connecter') }}</button>
                  </div>

                  <a class="small text-muted" href="#!">Oublier votre mot de passe?</a>
                  
                </form>
              </div>
            </div>
            <div>
</div>
</section>
</div>
@endsection
