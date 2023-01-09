@extends('dashboard.layouts.main')

@section('container')
<div class="container mt-4">


            
            <a href="/dashboard/menu" class="btn btn-success">Back to menu list</a>
            <a href="/dashboard/menu/{{ $menu->id }}/edit" class="btn btn-warning">Edit</a>
            <form action="/dashboard/menu/{{ $menu->id  }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger btn" onclick="return confirm('Are u sure ?')">Delete</button>
              </form>

              <h1 class="mt-3">{{ $menu->name}}</h1>
              
              @if($menu->picture)
              <img class="card-img-top" src="{{ asset('storage/'.$menu->picture) }}"  alt="Flyer">
              @else
              <img class="card-img-top" src="/image/{{ $vendor->slug }}/{{ $menu->picture }}" alt="{{ $m->name }}" >
            @endif

            <h3 class="mt-3">Price : Rp{{ $menu['price'] }},-</h3>
            
            <p class="mt-1">{{ $menu['description'] }}</p>
            <h4 class="mt-2">Rating</h4>
            <h5>{{ $vendor['star'] }} Star</h5>
           
        </div>


    
@endsection
