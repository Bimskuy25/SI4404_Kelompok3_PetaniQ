@extends('layouts.layout')

@section('content')
{{-- {{dd($product->all())}} --}}
<section id="belipanan">
    <div class="container col-10 mb-5 mt-5">
        <h3 class="panen" style="color:#238E68; font-weight: bold;">Beli hasil panen</h3>
        <p class="panen">Beli Hasil Panen Yang Anda Minati</p>
        <div class="row row-cols-1 row-cols-md-4 mt-4 g-4">
            @foreach($product as $p)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    {{-- @if($p->id == '101' || $p->id == '102' || $p->id == '103')
                    <img src="./frontend/img/{{$p->foto_product}}" class="card-img-top" alt="...">
                    @else --}}
                    <img src="{{asset('/storage/'.$p->foto_product)}}" class="card-img-top" style="width: 285px; height: 172px" alt="...">
                    {{-- <img src="storage/{{$p->foto_product}}" class="card-img-top" alt="..."> --}}
                    {{-- @endif --}}
                    <div class="card-body">
                        <h5 class="card-title">{{$p->nama_product}}</h5>
                        <p class="card-text">{{$p->user->name}}</p>
                        <div class=" container row justify-content-center">
                            <a href="/product/{{$p->id}}" class="btn text-white" style="background-color: #238E68;">Lihat Produk</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
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
