@extends('layouts.layout')

@section('content')
{{-- {{dd($product->all())}} --}}
<section id='detail'>
    <div class="container col-10 mb-5 mt-4">
        <h1 class="detail" style="color:#238E68; font-weight:bold;">Pesanan Produk</h1>
        <div class="d-flex justify-content-center align-items-start gap-5 mt-5">
            <div class="container">
                <div class="row g-2">
                    <div class="col">
                        <img src="{{asset('/storage/'.$p->foto_product)}}" alt="...">
                    </div>
                    <div class="col">
                        <form action="" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="produk" class="form-label" style="font-weight:bold;">Nama Produk</label>
                                <input type="text" class="form-control form-control-md" id="produk" name="produk" placeholder="Nama Produk">
                            </div>
                            <div class="form-group mb-3">
                                <label for="pembeli" class="form-label" style="font-weight:bold;">Nama Pembeli</label>
                                <input type="text" class="form-control form-control-md" id="pembeli" name="pembeli" placeholder="Nama Pembeli">
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat" class="form-label" style="font-weight:bold;">Alamat</label>
                                <input type="text" class="form-control form-control-md" id="alamat" name="alamat" placeholder="Alamat Kamu">
                            </div>
                            <div class="form-group mb-3">
                                <label for="pesanan" class="form-label" style="font-weight:bold;">Jumlah Pesanan</label>
                                <input type="number" class="form-control form-control-md" id="pesanan" name="pesanan" placeholder="jumlah pesanan">
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleFormControlInput1" class="form-label" style="font-weight:bold;">Total Harga</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Rp</span>
                                    <input type="number" class="form-control form-control-md" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label" for="jenis-mobil" style="font-weight:bold;">Pembayaran</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Pembayaran</option>
                                    <option value="gopay">Gopay</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label for="status" class="form-label" style="font-weight:bold;">Status Pembayaran</label>
                                <input type="number" class="form-control form-control-md" id="status" name="status" placeholder="Status Pembayaran">
                            </div>
                            <div class="d-grid gap-2">
                                <input class="btn text-white " type="submit" value="Bayar" style="background-color: #238E68; font-weight:bold;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</section>

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
@endsection
