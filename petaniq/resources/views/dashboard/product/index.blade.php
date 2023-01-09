@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Products</h1>
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

            <th scope="col">Id</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Foto Produk</th>
          {{-- <th scope="col"><a href="/dashboard/vendors/create" class="btn btn-info btn-sm">Add</a></th> --}}
        </tr>
      </thead>
      <tbody>

          @foreach ($product as $p)
            <tr>

                <th>{{ $p->id }}</th>
                <td>{{ $p->nama_product }}</td>
                <td>{{ $p->kategori }}</td>
                <td>{{ $p->harga }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td>{{ $p->foto_product }}</td>
                <td>
                    {{-- <a href="/dashboard/vendors/{{ $vendor->slug }}" class="btn btn-info">Menu</a> --}}
                    <a href="/dashboard/product/{{ $p->id }}" class="btn btn-success btn-sm">See</a>
                    <a href="/dashboard/product/{{ $p->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/dashboard/product/{{ $p->id }}" method="POST" class="d-inline">
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
