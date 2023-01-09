@extends('layouts.layout')

@section('content')

<section id='form'>
    <div class="container col-9 mb-5 mt-5">
        <h1 class="panen text-center mb-4" style="color:#238E68; font-weight: bold">Modal Tani</h1>
        <div class="text-center mb-3">
            <img src="./frontend/img/tani.jpg" alt="">
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
