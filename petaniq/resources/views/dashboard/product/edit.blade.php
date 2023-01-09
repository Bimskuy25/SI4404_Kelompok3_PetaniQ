@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Product - Edit</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/product/{{$product->id }}" enctype="multipart/form-data">
        @csrf
        @method('put')
          <div class="mb-3">
            <input name="user_id" type="hidden" value="{{$product->user_id}}" class="form-control"  >
            {{-- <input name="product_id" type="hidden" value="{{$transaksi->product_id}}" class="form-control"  > --}}
            {{-- <input name="product_id" type="hidden" value="{{$transksi->product_id}}" class="form-control"  > --}}
          </div>

          <div class="mb-3">
            <label for="nama_product" class="form-label">Nama Produk</label>
            <input value="{{ old('nama_product',$product->nama_product) }}" name="nama_product" type="text" class="form-control">
          </div>

          <div class="form-outline mb-3">
            <label class="form-label" for="kategori" style="font-weight:bold;">Pembayaran</label>
            <select class="form-select" name="kategori" id="kategori" aria-label="Default select example">
                <option selected>{{old('kategori',$product->kategori)}}</option>
                <option value="Beras">Beras</option>
                <option value="Sayur">Sayur</option>
                <option value="Buah">Buah</option>
            </select>
        </div>

          <div class="mb-3">
            <label for="harga" class="form-label" style="font-weight:bold;">Harga</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Rp</span>
                <input type="number" class="form-control form-control-md" name="harga" id="harga" aria-describedby="basic-addon1" value="{{ old('harga',$product->harga) }}">
            </div>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label" style="font-weight:bold;">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5" >{{$product->deskripsi}}</textarea>
            </div>

        <div class="mb-3">
            <label for="oldImage" class="form-label" style="font-weight:bold;">Foto Produk</label>
          <input type="hidden" name="oldImage" value="{{ $product->foto_product }}">
          @if ($product->foto_product)
          <img src="{{ asset('storage/'.$product->foto_product) }}" class="img-preview img-fluid" alt="">
          @else
          <img class="img-preview img-fluid mb-3 col-sm-5 d-block" src="" alt="">
          @endif
          <input class="form-control @error('foto_product') is-invalid @enderror" type="file" id="image" name="foto_product" onchange="previewImage()">
          @error('foto_product')
        <div class="invalid-feedback"> {{ $message }} </div>
        @enderror
        </div>



      <button type="submit" class="btn btn-primary">Update Product</button>
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

