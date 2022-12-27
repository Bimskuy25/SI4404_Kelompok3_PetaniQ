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
                            <a href="modaltani.html" class="btn text-white" style="background-color: #238E68;">Pilih Paket</a>
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
                            <a href="modalmastani.html" class="btn text-white" style="background-color: #238E68;">Pilih Paket</a>
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
                            <a href="modalpaktani.html" class="btn text-white" style="background-color: #238E68;">Pilih Paket</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- footer --}}
    <div class="text-center p-3 text-light" style="background-color: #238E68;">
        © Copyright 2022 PetaniQ
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, habitant aliquet proin id volutpat. Est suscipit augue donec laoreet nibh odio volutpat quam.
    </div>
</section>

@endsection