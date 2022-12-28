@extends('layouts.layout')

@section('content')

<section id='konsultasi'>
    <div class="container mb-5 mt-5">
        <div class="text-center">
            <h1 class="panen mb-5" style="color:#238E68; font-weight: bold;">Konsultasikan</h1>
        </div>
        <div class="text-center mb-5">
            <img src="./frontend/img/konsultasi.jpg" alt="">
        </div>
        <div class="text-center mb-3">
            <h4 class="konsultasi" style="font-weight: bold;">Ayo Konsultasikan pertanianmu</h4>
        </div>
        <div class="text-center">
            <input class="btn btn-lg text-white" type="submit" value="Konsultasi" style="padding-left: 4rem; padding-right: 4rem; background-color: #238E68;">
        </div>
    </div>
</section>

{{-- footer --}}
<div class="text-center p-3 text-light" style="background-color: #238E68;">
    © Copyright 2022 PetaniQ
    <br>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, habitant aliquet proin id volutpat. Est suscipit augue donec laoreet nibh odio volutpat quam.
</div>

@endsection