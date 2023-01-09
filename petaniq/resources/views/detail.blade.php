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
                        {{-- @if($product->id == '101' || $product->id == '102' || $product->id == '103')
                        <img src="../frontend/img/{{$product->foto_product}}" class="card-img-top" alt="...">
                        @else --}}
                        <img src="{{asset('/storage/'.$product->foto_product)}}" class="card-img-top" alt="...">
                        {{-- <img src="storage/{{$p->foto_product}}" class="card-img-top" alt="..."> --}}
                        {{-- @endif --}}
                    </div>
                    <div class="col">
                        <h2 class="panen mb-3">{{$product->nama_product}}</h2>
                        <h5 class="panen mb-4" style="color:#238E68">{{$product->user->name}}</h5>

                        {{-- FORMNYA DARI SINI YA --}}
                        <form action="/transaction" method="POST" enctype="multipart/form-data">
                            @csrf
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

                            {{-- <input type="hidden" class="form-control @error('nama_product') is-invalid @enderror" name="nama_product" value="{{ $product->nama_product }}">
                            @error('product_id') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror --}}


                            <div class="mb-3">
                                <label for="deskripsi" class="form-label" style="font-weight:bold;">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" readonly>{{$product->deskripsi}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label" style="font-weight:bold;">Alamat</label>
                                <input type="text" class="form-control form-control-md" id="alamat" name="alamat">
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_pesanan" class="form-label" style="font-weight:bold;">Quantity</label>
                                <input type="number" class="form-control form-control-md" id="jumlah_pesanan" name="jumlah_pesanan">
                            </div>
                            <div class="form-outline mb-3">
                                <label class="form-label" for="pembayaran" style="font-weight:bold;">Pembayaran</label>
                                <select class="form-select" name="pembayaran" id="pembayaran" aria-label="Default select example">
                                    <option selected>Pembayaran</option>
                                    <option value="Gopay">Gopay</option>
                                    <option value="Debit">Debit</option>
                                    <option value="Dana">Dana</option>
                                    <option value="Ovo">Ovo</option>
                                </select>
                            </div>
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
@endsection
