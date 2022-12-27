@extends('layouts.layout')

@section('content')

<section id="belipanan">
    <div class="container col-10 mb-5 mt-5">
        <h3 class="panen" style="color:#238E68; font-weight: bold;">Beli hasil panen</h3>
        <p class="panen">Beli Hasil Panen Yang Anda Minati</p>
        <div class="row row-cols-1 row-cols-md-4 mt-4 g-4">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./frontend/img/rice.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Beras Enak</h5>
                        <p class="card-text">Pak Ahmad</p>
                        <div class=" container row justify-content-center">
                            <a href="detail.html" class="btn text-white" style="background-color: #238E68;">Lihat Produk</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./frontend/img/Tomat.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Tomat Segar</h5>
                        <p class="card-text">Pak Slamet</p>
                        <div class=" container row justify-content-center">
                            <a href="detail.html" class="btn text-white" style="background-color: #238E68;">Lihat Produk</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./frontend/img/Semangka.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Semangka Klaten</h5>
                        <p class="card-text">Pak Broto</p>
                        <div class=" container row justify-content-center">
                            <a href="detail.html" class="btn text-white" style="background-color: #238E68;">Lihat Produk</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./frontend/img/rice.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Beras Enak</h5>
                        <p class="card-text">Ibu Ratmini</p>
                        <div class=" container row justify-content-center">
                            <a href="detail.html" class="btn text-white" style="background-color: #238E68;">Lihat Produk</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="./frontend/img/rice.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Beras Enak</h5>
                        <p class="card-text">Pak Broto</p>
                        <div class=" container row justify-content-center">
                            <a href="detail.html" class="btn text-white" style="background-color: #238E68;">Lihat Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center p-3 text-light" style="background-color: #238E68;">
        © Copyright 2022 PetaniQ
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, habitant aliquet proin id volutpat. Est suscipit augue donec laoreet nibh odio volutpat quam.
    </div>
</section>
@endsection
