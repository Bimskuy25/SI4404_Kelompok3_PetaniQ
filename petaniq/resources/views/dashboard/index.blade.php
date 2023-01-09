@extends('dashboard.layouts.main')
@section('container')
<div class="justify-content-between text-center align-items-center pt-3 pb-2 mb-3 mt-5">
    <h1 class="h2">Selamat Datang {{ Auth::user()->name }}</h1>
    <h1>Semoga harimu menyenangkan</h1>
</div>
<div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <img src="./frontend/img/Banner.jpg" class="d-block w-100" alt="...">
</div>
@endsection
