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
                    <img src="{{asset('/storage/'.$p->foto_product)}}" class="card-img-top" alt="...">
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
    <div class="text-center p-3 text-light" style="background-color: #238E68;">
        © Copyright 2022 PetaniQ
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, habitant aliquet proin id volutpat. Est suscipit augue donec laoreet nibh odio volutpat quam.
    </div>
</section>
@endsection
