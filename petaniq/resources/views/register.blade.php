@extends('layouts.layoutnonavbar')

@section('content')
      
<section class="vh-100" style="background-image: url(./frontend/img/Banner.jpg); background-position: center !important;
    background-size: cover !important;
    background-repeat: no-repeat !important;">
  <div class="container py-0 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="./frontend/img/registrasi.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 2rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="POST" action="/register">
                @csrf
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <h1 class="mb-2" style="color:#238E68">Register</h1>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="form-control  @error('email') is-invalid @enderror"
                    placeholder="Enter a valid email address"/>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <!-- Nama input -->
                <div class="form-outline mb-2">
                  <label class="form-label" for="name">Nama</label>
                  <input type="name" id="name" name="name" value="{{ old('name') }}"
                    class="form-control  @error('name') is-invalid @enderror"
                    placeholder="Enter your name" />
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Nomor Handphone Input -->
                <div class="form-outline mb-2">
                  <label class="form-label" for="phone">Nomor Handphone</label>
                  <input type="string" id="phone" name="phone" value="{{ old('phone') }}"
                    class="form-control  @error('phone') is-invalid @enderror "
                    placeholder="Enter phone number" />
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-outline mb-2">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" name="password"
                    required autocomplete="new-password"
                    value="{{ old('password') }}" class="form-control  @error('password') is-invalid @enderror"
                    placeholder="Enter password" />
                    @error('password') <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong> </span> @enderror
                </div>

                <!-- Konfirmasi Password -->
                <div class="form-outline mb-2">
                  <label class="form-label" for="passwordkonf">Konfirmasi Password</label>
                  <input type="password" id="passwordkonf" name="passwordkonf"
                    required autocomplete="new-password"
                    value="{{ old('passwordkonf') }}" class="form-control  @error('passwordkonf') is-invalid @enderror"
                    placeholder="Enter password confirmation" />
                    @error('passowrdkonf') <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong> </span> @enderror
                </div>

                <!-- Kategory -->
                <div class="mb-1">
                    <label for="status_pembayaran">Kategori</label>
                </div>
                <div class="form-check form-check-inline @error('kategori') is-invalid @enderror">
                    <input class="form-check-input" type="radio" name="kategori" id="kategori" value="petani">
                    <label class="form-check-label" for="inlineRadio1">Petani</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="kategori" id="kategori" value="pembeli">
                    <label class="form-check-label" for="inlineRadio2">Pembeli</label>
                </div>
                @error('kategori') <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong> </span> @enderror

                <!-- Register button -->
                <div class='mt-3'>
                  <button type="submit" class="btn btn-lg text-white"
                    style="padding-left: 2.5rem; padding-right: 2.5rem; background: #238E68;">Register</button>
                </div>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Sudah Memiliki Akun? <a href="/login"
                      class="link-danger">Login</a></p>
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
