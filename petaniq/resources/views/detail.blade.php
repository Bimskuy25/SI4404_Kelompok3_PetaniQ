@extends('layouts.layout')

@section('content')

<section id='detail'>
    <div class="container col-10 mb-5 mt-4">
        <h1 class="detail" style="color:#238E68">Detail Produk</h1>
        <div class="d-flex justify-content-center align-items-start gap-5 mt-3">
            <div class="container">
                <div class="row g-2">
                    <div class="col">
                        <img src="./frontend/img/rice.jpg" alt="...">
                    </div>
                    <div class="col">
                        <h2 class="panen mb-3">Tomat Segar</h2>
                        <h5 class="panen mb-4" style="color:#238E68">Pak Slamet</h5>
                        <form action="" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label" style="font-weight:bold;">Harga</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Rp</span>
                                    <input type="number" class="form-control form-control-md" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label" style="font-weight:bold;">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="penjual" class="form-label" style="font-weight:bold;">Quantity</label>
                                <input type="number" class="form-control form-control-md" id="penjual" name="penjual" placeholder="Masukkan Nama Pemilik">
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <input class="btn text-white" type="submit" value="Beli Hasil Panen" style="background-color: #238E68;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
    <div class="text-center p-3 text-light" style="background-color: #238E68;">
        © Copyright 2022 PetaniQ
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, habitant aliquet proin id volutpat. Est suscipit augue donec laoreet nibh odio volutpat quam.
    </div>
</section>
@endsection