@extends('layouts.layout')

@section('content')

<section id='modalku'>
    <div class="container col-10 mb-5 mt-5">
        <h1 class="transaksi-panen text-center mb-4" style="color:#238E68; font-weight: bold;">Modalku</h1>
            <div class="card recent-orders overflow-auto">
                    <div class="filter">
                        <a class="icon"><i class="bi bi-three-dots"></i></a>
                    </div>
                <div class="card-body pb-0">
                    <table class="table table-info">
                        <thead>
                            <tr>
                                <th scope="col">ID Modalin</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nama Paket</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Jumlah Lahan</th>
                                <th scope="col">Status Modalin</th>
                            </tr>
                            </thead>
                                <tbody>
                            <tr>
                                <th scope="row">1234</th>
                                <td>Maman Rusdi</td>
                                <td>Tani</td>
                                <td>15/12/1990</td>
                                <td>jl.braga...</td>
                                <td>2</td>
                                <td>Success</td>
                            </tr>
                            @foreach($modalku as $modal)
                                @if($modal->user_id == Auth::user()->id)
                                    <tr>
                                        <th scope="row">{{$modal->id}}</th>
                                        <td>{{$modal->name}}</td>
                                        <td>{{$modal->paket}}</td>
                                        <td>{{$modal->tanggal}}</td>
                                        <td>{{$modal->alamat}}</td>
                                        <td>{{$modal->jumlah_lahan}}</td>
                                        <td>{{$modal->status}}</td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
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
