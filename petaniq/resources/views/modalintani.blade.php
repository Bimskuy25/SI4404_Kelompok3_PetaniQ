@extends('layouts.layout')

@section('content')

<section id='form'>
    <div class="container col-9 mb-5 mt-5">
        <h1 class="panen text-center mb-4" style="color:#238E68; font-weight: bold">Modal Tani</h1>
        <div class="text-center mb-3">
            <img src="./img/tani.jpg" alt="">
        </div>

        <form action="/modal" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" class="form-control @error('paket') is-invalid @enderror" name="paket" value="Tani">
                @error('paket') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror

            <input type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ auth()->user()->id }}">
                @error('user_id') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror

                {{-- untuk status sementara --}}
                <input type="hidden" class="form-control @error('status') is-invalid @enderror" name="status" value="Success">
                    @error('status') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror

            <div class="mb-3">
                <label for="name" class="form-label" style="font-weight:bold;">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Masukkan Nama Lengkap">
                @error('name') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label" style="font-weight:bold;">Tanggal Lahir</label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" placeholder="Masukkan Nama Pemilik">
                @error('tanggal') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror

            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label" style="font-weight:bold;">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" placeholder="Masukkan Alamat" rows="3"></textarea>
                @error('alamat') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror

            </div>

            <div class="mb-3">
                <label for="jumlah_lahan" class="form-label" style="font-weight:bold;">Jumlah Lahan (dalam meter persegi))</label>
                <input type="number" class="form-control @error('jumlah_lahan') is-invalid @enderror" id="jumlah_lahan" name="jumlah_lahan" placeholder="Masukkan Jumlah Lahan">
                @error('jumlah_lahan') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label" style="font-weight:bold;">Foto KTP</label>
                <input class="form-control @error('foto_ktp') is-invalid @enderror" type="file" id="foto_ktp" name="foto_ktp">
                @error('foto_ktp') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror

            </div>
            <div class="mt-4 text-center">
                <input class="btn text-white btn-lg" type="submit" value="Tambahkan" style="background-color: #238E68;">
            </div>
        </form>
    </div>
</section>

    {{-- footer --}}
    <div class="text-center p-3 text-light" style="background-color: #238E68;">
        © Copyright 2022 PetaniQ
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, habitant aliquet proin id volutpat. Est suscipit augue donec laoreet nibh odio volutpat quam.
    </div>
</section>

@endsection
