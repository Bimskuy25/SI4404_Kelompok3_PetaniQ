@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User</h1>

</div>
<div class="table-responsive col">
    <table class="table table-striped table-sm">
      <thead>
        <tr>

          <th scope="col">Id</th>
          <th scope="col">Nama</th>
          <th scope="col">Kategori</th>
          <th scope="col">email</th>
          <th scope="col">phone</th>
        </tr>
      </thead>
      <tbody>

          @foreach ($user as $s)
            <tr>
                <th scope="row">{{$s->id}}</th>
                <td>{{$s->name}}</td>
                <td>{{$s->kategori}}</td>
                <td>{{$s->email}}</td>
                <td>{{$s->phone}}</td>
                <td>
                    <a href="/dashboard/user/{{ $s->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <form action="/dashboard/user/{{ $s->id }}" method="POST" class="d-inline">
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
