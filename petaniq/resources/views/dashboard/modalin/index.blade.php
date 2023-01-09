@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Modalin</h1>
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
            <th scope="col">User_id</th>
            <th scope="col">Name</th>
            <th scope="col">Alamat</th>
            <th scope="col">Paket</th>
            <th scope="col">Jumlah Lahan</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Foto KTP</th>
            <th scope="col">Status</th>
          {{-- <th scope="col"><a href="/dashboard/vendors/create" class="btn btn-info btn-sm">Add</a></th> --}}
        </tr>
      </thead>
      <tbody>

          @foreach ($modalin as $m)
            <tr>

                <td>{{ $m->id }}</td>
                <td>{{ $m->user_id }}</td>
                <td>{{ $m->name }}</td>
                <td>{{ $m->alamat }}</td>
                <td>{{ $m->paket }}</td>
                <td>{{ $m->jumlah_lahan }}</td>
                <td>{{ $m->tanggal }}</td>
                {{-- <td>{{ $m->foto_ktp }}</td> --}}
                <td><img src="{{asset('/storage/'.$m->foto_ktp)}}" class="card-img-top" style="width: 285px; height: 172px" alt="..."></td>
                <td>{{ $m->status }}</td>
                <td>
                    {{-- <a href="/dashboard/vendors/{{ $vendor->slug }}" class="btn btn-info">Menu</a> --}}
                    <a href="{{asset('/storage/'.$m->foto_ktp)}}" class="btn btn-success btn-sm">See</a>
                    <a href="/dashboard/modalin/{{ $m->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/dashboard/modalin/{{ $m->id }}" method="POST" class="d-inline">
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
