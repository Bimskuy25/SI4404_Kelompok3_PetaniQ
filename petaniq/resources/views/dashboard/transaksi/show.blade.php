@extends('dashboard.layouts.main')

@section('container')
<div class="container">


            <h1 class="mt-3">{{ $vendor['name'] }}</h1>
            <h5>{{ $vendor['founder'] }}</h5>
            <a href="/dashboard/vendors" class="btn btn-success">Back to all Vendors</a>
            <a href="/dashboard/vendors/{{ $vendor->slug }}/edit" class="btn btn-warning">Edit</a>
            <form action="/dashboard/vendors/{{ $vendor->slug  }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger btn" onclick="return confirm('Are u sure ?')">Delete</button>
              </form>

              @if($vendor->image)
              <img class="mt-4" src="{{ asset('storage/'.$vendor->image) }}" style="width: 75vw" alt="Flyer">
              @else
              <img class="mt-4" src="/image/{{ $vendor->slug }}/flyer.png" style="width: 75vw" alt="Flyer">
              @endif
            
            <p class="mt-4">{{ $vendor['description'] }}</p>
            <h4 class="mt-2">Rating</h4>
            <h5>{{ $vendor['star'] }} Star</h5>
            <h2 class="mt-3"> Menu</h2>
           
            <div class="container">
                <div class="row">
                    @foreach ($menu as $m)
                    @if ($vendor->id==$m->vendors_id)
                    <div class="col-md-4 mt-3">
                        <div class="card" style="width: 18rem;">
                          @if($m->picture)
                          <img class="card-img-top" src="{{ asset('storage/'.$m->picture) }}"  alt="Flyer">
                          @else
                          <img class="card-img-top" src="/image/{{ $vendor->slug }}/{{ $m->picture }}" alt="{{ $m->name }}" >
                        @endif
                            <div class="card-body">
                              <h5 class="card-title">{{ $m->name }}</h5>
                              <p class="card-text">{{ $m->description }}</p>
                              <p>Rp{{ $m->price }},-</p>
                              <a href="#" class="btn btn-primary">Buy</a>
                            </div>
                          </div>
                    </div>
                    @endif
            @endforeach
                </div>
            </div>
        </div>


    
@endsection
