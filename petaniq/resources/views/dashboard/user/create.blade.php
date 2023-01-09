@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Menu - add</h1>   
</div>
<div class="col-lg-8">
  <form method="post" action="/dashboard/menu" enctype="multipart/form-data">
    @csrf
      <div class="mb-3">
        
        @if(Auth::guard('vendors')->check())
        <input name="vendors_id" type="hidden" value="{{ Auth::guard('vendors')->user()->id }}" class="form-control"  >
        
        @elseif(Auth::guard('user')->check() )
        <label class="form-label">Vendor</label>
        <select class="form-control" name="vendors_id" >
          <option selected>Pilih Vendor</option>
          @foreach ($vendors as $v)
          <option value="{{ $v->id }}">{{ $v->name }}</option>
          @endforeach
        </select>
        @endif
      </div>
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input name="name" type="text" class="form-control"  >
      </div>

      <div class="mb-3">
        <label for="description" class="form-label ">Description</label>
        <input type="hidden" name="description" id="description" class="@error('description') is-invalid @enderror" required value="{{ old('description') }}" >
        <trix-editor input="description"></trix-editor>
      </div>

      <div class="mb-3">
          <label class="form-label">price</label>
          <input name="price" type="number" class="form-control"  >
        </div>

        <div class="mb-3">
          <label for="formFile" class="form-label">Foto Makanan</label>
          <img class="img-preview img-fluid" src="" alt="">
          <input class="form-control @error('picture') is-invalid @enderror" type="file" id="picture" name="picture" onchange="previewImage()">
          @error('picture')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        </div>

      <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>

<script>
  const name = document.querySelector('#name');

  document.addEventListener('trix-file-accept',function(e){
    e.preventDefault()
  });


  function previewImage(){
    const image = document.querySelector('#picture');
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