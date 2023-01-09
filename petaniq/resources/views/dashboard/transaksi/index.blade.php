@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Transaksi</h1>
</div>
@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
            <th scope="col">Number</th>
            <th scope="col">ID</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Nama Pembeli</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jumlah Pesanan</th>
            <th scope="col">Total Harga</th>
            <th scope="col">Pembayaran</th>
            <th scope="col">Status Pembayaran</th>
          {{-- <th scope="col"><a href="/dashboard/vendors/create" class="btn btn-info btn-sm">Add</a></th> --}}
        </tr>
      </thead>
      <tbody>

          @foreach ($transaksi as $t)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <th scope="row">{{$t->id}}</th>
                <td>{{$t->product->nama_product}}</td>
                <td>{{$t->user->name}}</td>
                <td>{{$t->alamat}}</td>
                <td>{{$t->jumlah_pesanan}}</td>
                <td>{{$t->total_harga}}</td>
                <td>{{$t->pembayaran}}</td>
                <td>{{$t->status}}</td>
                <td>
                    {{-- <a href="/dashboard/vendors/{{ $vendor->slug }}" class="btn btn-info">Menu</a> --}}
                    <a href="/dashboard/transaksi/{{ $t->id }}" class="btn btn-success btn-sm">See</a>
                    <a href="/dashboard/transaksi/{{ $t->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/dashboard/transaksi/{{ $t->id }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="btn btn-danger btn-sm" onclick="return confirm('Are u sure ?')">Delete</button>
                    </form>
                </td>
            </tr>
          @endforeach
      </tbody>
    </table>
  </div>


@endsection
