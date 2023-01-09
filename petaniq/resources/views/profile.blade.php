@extends('layouts.layout')

@section('content')

<section id="home">
   <!-- Profile -->
   <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="card w-60">
        <div class="container">
            <div class="text-center mt-4 mb-3" ?update=>
                <h1>Profile</h3>
            </div>
            <div class="mt-4 mb-4">
                <img src="./frontend/img/Profile.png" alt="" class="rounded mx-auto d-block" width="200px">
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group row mb-3">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9 col-form-label">
                            <input type="text" class="form-control" id="email" value="{{Auth::user()->email}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9 col-form-label">
                            <input type="text" class="form-control" id="email" value="{{Auth::user()->name}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="nohp" class="col-sm-3 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-9 col-form-label">
                            <input type="text" class="form-control" id="email" value="{{Auth::user()->phone}}" readonly>
                        </div>
                    </div>
                    <div class="clearfix mt-3">
                        <a href="login" type="button" class="btn btn-success float-end">Logout</a>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>

        {{-- Footer --}}
        <footer class="bg-cover">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-4">
                        <img src="./frontend/img/Logo23.png" class="mb-4" alt="">
                        <div class="social-links">
                            <a href="#"><i class="ri-linkedin-fill"></i></a>
                            <a href="#"><i class="ri-github-fill"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 ms-auto">
                        <h6 class="text-white mb-4">KONTAK</h6>
                        <p class="mb-1">Call us : (03) 9283 4726</p>
                        <p class="mb-1">Email : PetaniQ@gmail.com</p>
                        <p class="mb-0">Address : Jl. Tlogowono, Bono, Kec. Tulung, Kabupaten Klaten, Jawa Tengah</p>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="text-white mb-4">JAM KERJA</h6>
                        <p class="mb-1">Senin - Kamis : 08:00 - 22:00</p>
                        <p>Jum'at - Sabtu : 08:00 - 20:00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row gy-3 justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">Copyrights all rights reserved</p>
                    </div>
                    <div class="col-auto">
                        <p class="mb-0">Created By PetaniQ</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
@endsection
