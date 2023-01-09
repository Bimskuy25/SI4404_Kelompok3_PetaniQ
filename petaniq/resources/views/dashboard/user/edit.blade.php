@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User - Edit</h1>
</div>
<div class="col-lg-8">
  <form method="post" action="/dashboard/user/{{ $user->id }}" enctype="multipart/form-data">
    @csrf
    @method('put')
      <div class="mb-3">
        <input name="id" type="hidden" value="{{$user->id}}" class="form-control"  >
        <input name="password" type="hidden" value="{{$user->password}}" class="form-control"  >
      </div>
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input value="{{ old('name',$user->name) }}" name="name" type="text" class="form-control"  >
      </div>

      <div class="mb-3">
        <label for="email" class="form-label ">Email</label>
        <input type="text" name="email" id="email" class="form-control @error('description') is-invalid @enderror" value="{{ old('email',$user->email) }}" >
      </div>

        <div class="form-outline mb-3">
            <label class="form-label" for="kategori" style="font-weight:bold;">Pembayaran</label>
            <select class="form-select" name="kategori" id="kategori" aria-label="Default select example">
                <option selected>{{old('kategori',$user->kategori)}}</option>
                <option value="petani">petani</option>
                <option value="pembeli">pembeli</option>
                <option value="admin">admin</option>
            </select>
        </div>

      <div class="mb-3">
        <label for="phone" class="form-label ">Phone</label>
        <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone',$user->phone) }}" >
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

@endsection
