@extends('layouts.layout')

@section('content')

<section id='beli'>
    <div class="container col-10 mb-5 mt-5">
        <h1 class="transaksi-panen text-center" style="color:#238E68; font-weight: bold;">Transaksiku</h1>
        <div class="container col-12 mt-4 mb-5">
            <div class="card recent-orders overflow-auto ">
                    <div class="filter">
                        <a class="icon"><i class="bi bi-three-dots"></i></a>
                    </div>
                    <div class="card-body pb-0">
                        <table class="table table-info">
                            <thead>
                            <tr>
                                <th scope="col">ID Pembelian</th>
                                <th scope="col">Nama Produk</th>
                                <th scope="col">Nama Pembeli</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jumlah Pesanan</th>
                                <th scope="col">Total Harga</th>
                                <th scope="col">Pembayaran</th>
                                <th scope="col">Status Pembayaran</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($transaction as $t)
                                @if($t->user_id == Auth::user()->id)
                                    <tr>
                                        <th scope="row">{{$t->id}}</th>
                                        {{-- <td>{{$t->product_id}}</td> --}}
                                        <td>{{$t->product->nama_product}}</td>
                                        <td>{{$t->user->name}}</td>
                                        <td>{{$t->alamat}}</td>
                                        <td>{{$t->jumlah_pesanan}}</td>
                                        <td>{{$t->total_harga}}</td>
                                        <td>{{$t->pembayaran}}</td>
                                        <td>{{$t->status}}</td>
                                    </tr>
                                @endif
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
