@extends('layouts.layout')

@section('content')
<section id="jualpanen">
    <div class="container col-9 mb-5 mt-5">
        <h3 class="panen" style="color:#238E68; font-weight: bold;">Jual Hasil Panen</h3>
        <p class="panen">Tambahkan jual hasil panen anda</p>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label" style="font-weight:bold;">Nama Hasil Panen</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Produk">
            </div>
            <div class="mb-3">
                <label for="penjual" class="form-label" style="font-weight:bold;">Nama Penjual</label>
                <input type="text" class="form-control" id="penjual" name="penjual" placeholder="Masukkan Nama Penjual">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label" style="font-weight:bold;">Harga</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Rp</span>
                    <input type="number" class="form-control" id="harga" aria-describedby="basic-addon1" placeholder="Masukkan Harga">
                </div> 
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label" style="font-weight:bold;">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label" style="font-weight:bold;">Foto Hasil Panen</label>
                <input class="form-control" type="file" id="gambar" name="gambar">
            </div>
            <div class="mb-1">
                <label for="status_pembayaran" style="font-weight:bold;">Kategori</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="statuspembayaran" id="beras" value="Beras">
                <label class="form-check-label" for="inlineRadio1">Beras</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="statuspembayaran" id="sayur" value="Sayur">
                <label class="form-check-label" for="inlineRadio2">Sayur</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="statuspembayaran" id="buah" value="Buah">
                <label class="form-check-label" for="inlineRadio2">Buah</label>
            </div>
            <div class="mt-4">
                <input class="btn text-white" type="submit" value="Tambahkan" style="background-color: #238E68;">
            </div>
        </form>
    </div>
    {{-- footer --}}
    <div class="text-center p-3 text-light" style="background-color: #238E68;">
        © Copyright 2022 PetaniQ
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, habitant aliquet proin id volutpat. Est suscipit augue donec laoreet nibh odio volutpat quam.
    </div>
</section>

@endsection