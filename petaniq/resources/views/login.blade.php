@extends('layouts.layoutnonavbar')

@section('content')

<section class="vh-100" style="background-image: url(./frontend/img/Banner.jpg); background-position: center !important;
    background-size: cover !important;
    background-repeat: no-repeat !important;">
  <div class="container py-3 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="./frontend/img/logintest.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" action="/login">
                    @csrf
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <span class="h1 fw-bold mb-0">Login</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email address</label>
                    <input type="email" name="email" id="email"
                      class="form-control form-control-lg @error('email') is-invalid @enderror"
                      placeholder="Enter a valid email address" />
                  </div>
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                      @enderror

                  <!-- Password input -->
                  <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">Password</label>
                    <input type="password" name="password" id="password"
                      class="form-control form-control-lg @error('password') is-invalid @enderror"
                      placeholder="Enter password" />
                  </div>
                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror

                  <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-3">
                    <input class="form-check-input me-2" type="checkbox" value="" id="rememberme" name="rememberme" />
                    <label class="form-check-label" for="rememberme">
                      Remember me
                    </label>
                  </div>
                </div>

                <button type="submit" class="btn btn-lg text-white text-center text-lg-start mt-2 pt-2 mb-4"
                    style="padding-left: 2.5rem; padding-right: 2.5rem; background: #238E68;">Login</button>
                  {{-- <a class="btn btn-lg text-white" style="padding-left: 2.5rem; padding-right: 2.5rem; background: #238E68;" href="home.html" role="button">Login</a> --}}
                  <p class="small fw-bold mt-2 pt-1 mb-0">Belum Memiliki Akun? <a href="/register" class="link-danger">Register</a></p>
                
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
