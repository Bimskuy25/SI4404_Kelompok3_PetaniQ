@extends('layouts.layout')

@section('content')

<section id="jualpanen">
    <div class="container col-9 mb-5 mt-5">
        <h3 class="panen" style="color:#238E68; font-weight: bold;">Jual Hasil Panen</h3>
        <p class="panen">Tambahkan jual hasil panen anda</p>
        <form action="/product" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_product" class="form-label" style="font-weight:bold;">Nama Hasil Panen</label>
                <input type="text" class="form-control @error('nama_product') is-invalid @enderror" id="nama_product" name="nama_product" placeholder="Masukkan Nama Produk">
                @error('nama_product') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
            </div>

            <input type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ auth()->user()->id }}">
            @error('user_id') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror

            {{-- keknya ga kepake deh penjual --}}
            {{-- <div class="mb-3">
                <label for="penjual" class="form-label" style="font-weight:bold;">Nama Penjual</label>
                <input type="text" class="form-control" id="penjual" name="penjual" placeholder="Masukkan Nama Penjual">
            </div> --}}
            <div class="mb-3">
                <label for="harga" class="form-label" style="font-weight:bold;">Harga</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Rp</span>
                    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" aria-describedby="basic-addon1" placeholder="Masukkan Harga">
                    @error('harga') <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong> </span> @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label" style="font-weight:bold;">Deskripsi</label>
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" rows="3"></textarea>
                @error('deskripsi') <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong> </span> @enderror
            </div>
            <div class="mb-3">
                <label for="foto_product" class="form-label" style="font-weight:bold;">Foto Hasil Panen</label>
                <input class="form-control @error('foto_product') is-invalid @enderror" type="file" id="foto_product" name="foto_product">
                @error('foto_product') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
            </div>
            <div class="mb-1">
                <label for="kategori" style="font-weight:bold;">Kategori</label>
            </div>
            <div class="form-check form-check-inline @error('kategori') is-invalid @enderror">
                <input class="form-check-input" type="radio" name="kategori" id="beras" value="Beras">
                <label class="form-check-label" for="inlineRadio1">Beras</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kategori" id="sayur" value="Sayur">
                <label class="form-check-label" for="inlineRadio2">Sayur</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="kategori" id="buah" value="Buah">
                <label class="form-check-label" for="inlineRadio2">Buah</label>
            </div>
            @error('kategori') <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong> </span> @enderror

            <div class="mt-4">
                <input class="btn text-white" type="submit" value="Tambahkan" style="background-color: #238E68;">
            </div>
        </form>
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
