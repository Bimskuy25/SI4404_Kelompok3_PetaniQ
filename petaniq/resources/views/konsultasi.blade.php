@extends('layouts.layout')

@section('content')

<section id='konsultasi'>
    <div class="container mb-5 mt-5">
        <div class="text-center">
            <h1 class="panen mb-5" style="color:#238E68; font-weight: bold;">Konsultasikan</h1>
        </div>
        <div class="text-center mb-5">
            <img src="./frontend/img/konsultasi.jpg" alt="">
        </div>
        <div class="text-center mb-3">
            <h4 class="konsultasi" style="font-weight: bold;">Ayo Konsultasikan pertanianmu</h4>
        </div>
        <div class="text-center">
            <a class="btn btn-lg text-white" role="button" aria-pressed="true" style="padding-left: 4rem; padding-right: 4rem; background-color: #238E68;" href="https://wa.me/6281232463681" target="_blank">Konsultasi</a>
        </div>
    </div>
</section>

{{-- Footer --}}
    <!-- footer -->
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

@endsection
