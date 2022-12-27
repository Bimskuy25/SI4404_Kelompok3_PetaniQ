@extends('layouts.layoutnonavbar')

@section('content')

<section id='login'>
        <div class="container-fluid h-custom mt-5" >
          <div class="row d-flex justify-content-center align-items-center h-100 mt-5">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="./frontend/img/login.jpg"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">


                <form method="POST" action="/login">
                    @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <h1 style="color:#238E68">Login</h1>
                </div>

                {{-- <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">^w^</p>
                </div> --}}

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
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="rememberme" name="rememberme" />
                    <label class="form-check-label" for="rememberme">
                      Remember me
                    </label>
                  </div>
                  <a href="#!" class="text-body">Forgot password?</a>
                </div>


                <button type="submit" class="btn btn-lg text-white text-center text-lg-start mt-4 pt-2"
                    style="padding-left: 2.5rem; padding-right: 2.5rem; background: #238E68;">Login</button>
                  {{-- <a class="btn btn-lg text-white" style="padding-left: 2.5rem; padding-right: 2.5rem; background: #238E68;" href="home.html" role="button">Login</a> --}}
                  <p class="small fw-bold mt-2 pt-1 mb-0">Belum Memiliki Akun? <a href="/register" class="link-danger">Register</a></p>

              </form>


            </div>
          </div>
        </div>
      </section>
@endsection
