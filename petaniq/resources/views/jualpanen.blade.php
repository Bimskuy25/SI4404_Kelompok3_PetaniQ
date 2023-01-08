@extends('layouts.layout')

@section('content')
<section id="jualpanen">
    <div class="container col-9 mb-5 mt-5">
        <h3 class="panen" style="color:#238E68; font-weight: bold;">Jual Hasil Panen</h3>
        <p class="panen">Tambahkan jual hasil panen anda</p>
        <form action="/product/create" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama_product" class="form-label" style="font-weight:bold;">Nama Hasil Panen</label>
                <input type="text" class="form-control" id="nama_product" name="nama_product" placeholder="Masukkan Nama Produk">
            </div>

            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

            {{-- keknya ga kepake deh penjual --}}
            {{-- <div class="mb-3">
                <label for="penjual" class="form-label" style="font-weight:bold;">Nama Penjual</label>
                <input type="text" class="form-control" id="penjual" name="penjual" placeholder="Masukkan Nama Penjual">
            </div> --}}
            <div class="mb-3">
                <label for="harga" class="form-label" style="font-weight:bold;">Harga</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Rp</span>
                    <input type="number" class="form-control" id="harga" name="harga" aria-describedby="basic-addon1" placeholder="Masukkan Harga">
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
                <input class="form-check-input" type="radio" name="status_pembayaran" id="beras" value="Beras">
                <label class="form-check-label" for="inlineRadio1">Beras</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_pembayaran" id="sayur" value="Sayur">
                <label class="form-check-label" for="inlineRadio2">Sayur</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="status_pembayaran" id="buah" value="Buah">
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
