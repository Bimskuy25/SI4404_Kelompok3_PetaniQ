@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 mt-5 ">
    <h1 class="h2">Modalin - Edit</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/modalin/{{$modalin->id }}" enctype="multipart/form-data">
        @csrf
        @method('put')
          <div class="mb-3">
            <input name="user_id" type="hidden" value="{{$modalin->user_id}}" class="form-control"  >
            {{-- <input name="product_id" type="hidden" value="{{$transaksi->product_id}}" class="form-control"  > --}}
            {{-- <input name="product_id" type="hidden" value="{{$transksi->product_id}}" class="form-control"  > --}}
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input value="{{ old('name',$modalin->name) }}" name="name" type="text" class="form-control">
          </div>

          <div class="mb-3">
            <label for="alamat" class="form-label ">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat',$modalin->alamat) }}" >
          </div>

          <div class="mb-3">
            <label for="tanggal" class="form-label" style="font-weight:bold;">Tanggal Lahir</label>
            <input type="date" value="{{ old('tanggal',$modalin->tanggal) }}" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal">
            @error('tanggal') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror
        </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="paket" style="font-weight:bold;">Paket</label>
            <select class="form-select" name="paket" id="paket" aria-label="Default select example">
                <option selected>{{old('paket',$modalin->paket)}}</option>
                <option value="Tani">Tani</option>
                <option value="Mas Tani">Mas Tani</option>
                <option value="Pak Tani">Pak Tani</option>
            </select>
        </div>

          <div class="mb-3">
            <label for="jumlah_lahan" class="form-label" style="font-weight:bold;">Jumlah Lahan</label>
            <input type="number" class="form-control form-control-md" name="jumlah_lahan" id="jumlah_lahan" aria-describedby="basic-addon1" value="{{ old('jumlah_lahan',$modalin->jumlah_lahan) }}">
            </div>

            <div class="form-outline mb-3">
                <label class="form-label" for="status" style="font-weight:bold;">Status</label>
                <select class="form-select" name="status" id="status" aria-label="Default select example">
                    <option selected>{{old('status',$modalin->status)}}</option>
                    <option value="Sucess">Success</option>
                    <option value="Failed">Failed</option>
                    <option value="Checking">Checking</option>
                </select>
            </div>

        <div class="mb-3">
            <label for="oldImage" class="form-label" style="font-weight:bold;">Foto Produk</label>
          <input type="hidden" name="oldImage" value="{{ $modalin->foto_ktp }}">
          @if ($modalin->foto_ktp)
          <img src="{{ asset('storage/'.$modalin->foto_ktp) }}" class="img-preview img-fluid" alt="">
          @else
          <img class="img-preview img-fluid mb-3 col-sm-5 d-block" src="" alt="">
          @endif
          <input class="form-control @error('foto_ktp') is-invalid @enderror" type="file" id="image" name="foto_ktp" onchange="previewImage()">
          @error('foto_ktp')
        <div class="invalid-feedback"> {{ $message }} </div>
        @enderror
        </div>
      <button type="submit" class="btn btn-primary mb-4">Update Product</button>
    </form>
</div>

<script>
  const name = document.querySelector('#name');
  const slug = document.querySelector('#slug');

  name.addEventListener('change',function(){
    fetch('/dashboard/vendors/checkSlug?name=' + name.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });

  document.addEventListener('trix-file-accept',function(e){
    e.preventDefault()
  });

  function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview')

    imgPreview.style.display = 'block';
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src=oFREvent.target.result;
    }
  }
</script>
@endsection

