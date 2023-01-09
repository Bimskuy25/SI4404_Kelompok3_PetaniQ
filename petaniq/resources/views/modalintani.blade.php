@extends('layouts.layout')

@section('content')

<section id='form'>
    <div class="container col-9 mb-5 mt-5">
        <h1 class="panen text-center mb-4" style="color:#238E68; font-weight: bold">Modal Tani</h1>
        <div class="text-center mb-3">
            <img src="./img/tani.jpg" alt="">
        </div>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nama" class="form-label" style="font-weight:bold;">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Lengkap">
            </div>
            <div class="mb-3">
                <label for="penjual" class="form-label" style="font-weight:bold;">Tanggal Lahir</label>
                <input type="date" class="form-control" id="penjual" name="penjual" placeholder="Masukkan Nama Pemilik">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label" style="font-weight:bold;">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="lahan" class="form-label" style="font-weight:bold;">Jumlah Lahan</label>
                <input type="number" class="form-control" id="lahan" name="lahan" placeholder="Masukkan Nama Pemilik">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label" style="font-weight:bold;">Foto KTP</label>
                <input class="form-control" type="file" id="foto_ktp" name="foto_ktp">
            </div>
            <div class="mt-4 text-center">
                <input class="btn text-white btn-lg" type="submit" value="Tambahkan" style="background-color: #238E68;">
            </div>
        </form>
    </div>
</section>

    {{-- footer --}}
    <div class="text-center p-3 text-light" style="background-color: #238E68;">
        © Copyright 2022 PetaniQ
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, habitant aliquet proin id volutpat. Est suscipit augue donec laoreet nibh odio volutpat quam.
    </div>
</section>

@endsection
