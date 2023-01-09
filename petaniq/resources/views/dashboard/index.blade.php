@extends('dashboard.layouts.main')
@section('container')
<div class="justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat Datang {{ Auth::user()->name }}</h1>
    <h5>Semoga harimau menyenangkan</h5>
</div>
@endsection
