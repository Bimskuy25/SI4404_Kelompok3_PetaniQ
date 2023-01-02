@extends('layouts.layout')

@section('content')

<section id='beli'>
    <div class="container col-10 mb-5 mt-5">
        <h1 class="transaksi-panen text-center" style="color:#238E68; font-weight: bold;">Transaksiku</h1>
        <div class="container col-12 mt-4">
            <div class="card recent-orders overflow-auto">
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
                            <tr>
                                <th scope="row">1234</th>
                                <td>Tomat Mantep</td>
                                <td>Anton</td>
                                <td>jl.Telkom...</td>
                                <td>2</td>
                                <td>15000</td>
                                <td>Gopay</td>
                                <td>Success</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- footer --}}
    <div class="text-center p-3 text-light fixed-bottom" style="background-color: #238E68;">
        © Copyright 2022 PetaniQ
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, habitant aliquet proin id volutpat. Est suscipit augue donec laoreet nibh odio volutpat quam.
    </div>
</section>

@endsection