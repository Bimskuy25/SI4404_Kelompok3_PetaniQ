@extends('layouts.layout')

@section('content')

<section id='beli'>
    <div class="container col-10 mb-5 mt-5">
        <h1 class="transaksi-panen text-center" style="color:#238E68; font-weight: bold;">Transaksimu</h1>
        <div class="row row-cols-2 mt-4 g-4">
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./frontend/img/rice.jpg" class="img-fluid rounded-start" alt="..." style="height: 220px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">Beras Enak</h5>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mb-2">
                                    <label for="nama" class="form-label">Jumlah</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Produk">
                                </div>
                                <div class="mb-2">
                                    <label for="nama" class="form-label">Total Harga</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Produk">
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="./frontend/img/rice.jpg" class="img-fluid rounded-start" alt="..." style="height: 220px">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">Beras Enak</h5>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mb-2">
                                    <label for="nama" class="form-label">Jumlah</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Produk">
                                </div>
                                <div class="mb-2">
                                    <label for="nama" class="form-label">Total Harga</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Produk">
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- footer --}}
    <div class="text-center p-3 text-dark fixed-bottom" style="background-color: #238E68;">
        © Copyright 2022 PetaniQ
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, habitant aliquet proin id volutpat. Est suscipit augue donec laoreet nibh odio volutpat quam.
    </div>
</section>

@endsection