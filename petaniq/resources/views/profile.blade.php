@extends('layouts.layout')

@section('content')

<section id="home">
   <!-- Profile -->
   <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="card w-60">
        <div class="container">
            <div class="text-center mt-4 mb-3" ?update=>
                <h1>Profile</h3>
            </div>
            <div class="mt-4 mb-4">
                <img src="./frontend/img/Profile.png" alt="" class="rounded mx-auto d-block" width="200px">
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group row mb-3">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9 col-form-label">
                            <input type="text" class="form-control" id="email" value="{{Auth::user()->email}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9 col-form-label">
                            <input type="text" class="form-control" id="email" value="{{Auth::user()->name}}" readonly>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="nohp" class="col-sm-3 col-form-label">Nomor Handphone</label>
                        <div class="col-sm-9 col-form-label">
                            <input type="text" class="form-control" id="email" value="{{Auth::user()->phone}}" readonly>
                        </div>
                    </div>
                    <div class="clearfix mt-3">
                        <a href="login" type="button" class="btn btn-success float-end">Logout</a>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>

        {{-- Footer --}}
        <div class="text-center p-3 text-light" style="background-color: #238E68;">
            © Copyright 2022 PetaniQ
            <br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, habitant aliquet proin id volutpat. Est suscipit augue donec laoreet nibh odio volutpat quam.
        </div>
</section>
@endsection
