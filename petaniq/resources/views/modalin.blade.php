@extends('layouts.layout')

@section('content')

<section id='modalin'>
    <div class="container mb-5 mt-5">
        <div class="text-center">
            <h1 class="panen mb-5" style="color:#238E68; font-weight: bold;">Modalin</h1>
        </div>
        <div class="container row justify-content-md-center">
            <div class="col-3 card-group">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4" style="color:#238E68">Tani</h2>
                        <div class="text-center mb-4">
                            <img src="./frontend/img/tani.jpg" alt="">
                        </div>
                        <h5 class="card-text text-center mb-4" style="color:#238E68">Benefit Paket Tani</h2>
                        <div class="mb-5">
                            <ul>
                                <li>Modal Senilai Rp 5.000.000</li>
                                <li>Mendapatkan Bibit Padi</li>
                                <li>Mendapatkan Obat Pertanian</li>
                            </ul>
                        </div>
                        <div class="card">
                            <a href="/modaltani" class="btn text-white" style="background-color: #238E68;">Pilih Paket</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 card-group">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4" style="color:#238E68">Mas Tani</h2>
                        <div class="text-center mb-4">
                            <img src="./frontend/img/mastani.jpg" alt="">
                        </div>
                        <h5 class="card-text text-center mb-4" style="color:#238E68">Benefit Paket Mas Tani</h2>
                        <div class="mb-5">
                            <ul>
                                <li>Modal Senilai Rp 7.500.000</li>
                                <li>Mendapatkan Bibit Padi</li>
                                <li>Mendapatkan Obat Pertanian</li>
                                <li>Mendapatkan Alat Pertanian</li>
                            </ul>
                        </div>
                        <div class="card">
                            <a href="/modalmastani" class="btn text-white" style="background-color: #238E68;">Pilih Paket</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 card-group">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h2 class="card-title text-center mb-4" style="color:#238E68">Pak Tani</h2>
                        <div class="text-center mb-4">
                            <img src="./frontend/img/paktani.jpg" alt="">
                        </div>
                        <h5 class="card-text text-center mb-4" style="color:#238E68">Benefit Paket Pak Tani</h2>
                        <div class="mb-2">
                            <ul>
                                <li>Modal Senilai Rp 10.000.000</li>
                                <li>Mendapatkan Bibit Padi</li>
                                <li>Mendapatkan Obat Pertanian</li>
                                <li>Mendapatkan Alat Pertanian</li>
                                <li>Mendapatkan Bantuan Jasa Pertanian</li>
                            </ul>
                        </div>
                        <div class="card">
                            <a href="/modalpaktani" class="btn text-white" style="background-color: #238E68;">Pilih Paket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</section>

@endsection
