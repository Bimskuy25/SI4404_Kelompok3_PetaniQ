@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 mt-5 ">
    <h1 class="h2">Transaksi - Edit</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/transaksi/{{$transaksi->id }}" enctype="multipart/form-data">
        @csrf
        @method('put')
          <div class="mb-3">
            <input name="user_id" type="hidden" value="{{$transaksi->user_id}}" class="form-control"  >
            <input name="product_id" type="hidden" value="{{$transaksi->product_id}}" class="form-control"  >
            {{-- <input name="product_id" type="hidden" value="{{$transksi->product_id}}" class="form-control"  > --}}
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input value="{{ old('name',$transaksi->user->name) }}" name="name" type="text" class="form-control" readonly>
          </div>

          <div class="mb-3">
            <label for="jumlah_pesanan" class="form-label ">Jumlah Pesanan</label>
            <input type="number" name="jumlah_pesanan" id="jumlah_pesanan" class="form-control @error('jumlah_pesanan') is-invalid @enderror" value="{{ old('jumlah_pesanan',$transaksi->jumlah_pesanan) }}" >
          </div>

          <div class="mb-3">
            <label for="alamat" class="form-label ">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat',$transaksi->alamat) }}" >
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="status" style="font-weight:bold;">Status</label>
            <select class="form-select" name="status" id="status" aria-label="Default select example">
                <option selected>{{old('status',$transaksi->status)}}</option>
                <option value="Checking">Checking</option>
                <option value="Success">Success</option>
                <option value="Failed">Failed</option>
            </select>
        </div>

        <div class="form-outline mb-3">
            <label class="form-label" for="pembayaran" style="font-weight:bold;">Pembayaran</label>
            <select class="form-select" name="pembayaran" id="pembayaran" aria-label="Default select example">
                <option selected>{{old('pembayaran',$transaksi->pembayaran)}}</option>
                <option value="Gopay">Gopay</option>
                <option value="Debit">Debit</option>
                <option value="Dana">Dana</option>
                <option value="Ovo">Ovo</option>
            </select>
        </div>
          <button type="submit" class="btn btn-primary">Edit</button>
        </form>
</div>
@endsection

