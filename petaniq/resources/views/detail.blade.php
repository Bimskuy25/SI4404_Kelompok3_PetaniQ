@extends('layouts.layout')

@section('content')
{{-- {{dd($product->all())}} --}}
<section id='detail'>
    <div class="container col-10 mb-5 mt-4">
        <h1 class="detail mb-4" style="color:#238E68; font-weight:700">Detail Produk</h1>
        <div class="d-flex justify-content-center align-items-start gap-5 mt-3">
            <div class="container">
                <div class="row g-2">
                    <div class="col">
                        @if($product->id == '101' || $product->id == '102' || $product->id == '103')
                        <img src="../frontend/img/{{$product->foto_product}}" class="card-img-top" alt="...">
                        @else
                        <img src="{{asset('/storage/'.$product->foto_product)}}" class="card-img-top" alt="...">
                        {{-- <img src="storage/{{$p->foto_product}}" class="card-img-top" alt="..."> --}}
                        @endif
                    </div>
                    <div class="col">
                        <h2 class="panen mb-3">{{$product->nama_product}}</h2>
                        <h5 class="panen mb-4" style="color:#238E68">{{$product->user->name}}</h5>
                        <form action="/transaction/create" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label" style="font-weight:bold;">Harga</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Rp</span>
                                    <input type="number" class="form-control form-control-md" aria-describedby="basic-addon1" value="{{$product->harga}}" readonly>
                                </div>
                            </div>

                            <input type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ auth()->user()->id }}">
                            @error('user_id') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror

                            <input type="hidden" class="form-control @error('product_id') is-invalid @enderror" name="product_id" value="{{ $product->id }}">
                            @error('product_id') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror


                            <div class="mb-3">
                                <label for="deskripsi" class="form-label" style="font-weight:bold;">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" readonly>{{$product->deskripsi}}</textarea>
                            </div>
                            {{-- <div class="mb-3">
                                <label for="jumlah" class="form-label" style="font-weight:bold;">Quantity</label>
                                <input type="number" class="form-control form-control-md" id="jumlah" name="jumlah">
                            </div> --}}
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <input class="btn text-white" type="submit" value="Beli Hasil Panen" style="background-color: #238E68;">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


</section>
{{-- Footer --}}
<div class="text-center p-3 text-light" style="background-color: #238E68;">
    © Copyright 2022 PetaniQ
    <br>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, habitant aliquet proin id volutpat. Est suscipit augue donec laoreet nibh odio volutpat quam.
</div>
@endsection
