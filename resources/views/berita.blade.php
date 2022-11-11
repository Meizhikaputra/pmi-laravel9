@extends('home')

@section('container')
<div class="container">
<h1 class="mb-3 text-center mt-2">{{ $title }} </h1>

<div class="row justify-content-center mb-3">
    <div class="col-md-6">
        <form action="/berita">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari.." name="search">
                <div class="input-group-append">
                  <button class="btn btn-danger" type="submit">Cari</button>
                </div>
              </div>
        </form>
    </div>
</div>

@if($posts->count())

    <div class="card mb-3">
        @if($posts[0]->image)
        <div class="gambar" style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset('storage/' . $posts[0]->image) }}"  class="img-fluid ">
        </div>
        @else
        <img src="https://source.unsplash.com/1200x400/?blooddonor" class="card-img-top" >
        @endif
        
        <div class="card-body text-center">
        <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
        <p>
            <small class="text-success">
            Dibuat oleh. {{ $posts[0]->author->name }} {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>

        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-danger">Selengkapnya.</a>
        </div>
    </div>


<div class="container">
    <div class="row">
        @foreach($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                @if($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid ">
                </div>
                @else
                <img src="https://source.unsplash.com/500x400/?blooddonor" class="card-img-top">
                @endif
                
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p>
                    <small class="text-muted">
                    Dibuat oleh. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>  {{ $post->created_at->diffForHumans() }}
                    </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>

                    <a href="/posts/{{ $post->slug }}" class="btn btn-danger">Selengkapnya..</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

</div>
@else
    <p class="text-center fs-4">Tidak Ada Berita</p>
    
@endif

    <div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>
@endsection