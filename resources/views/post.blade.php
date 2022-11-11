@extends('home')

@section('container')

<div class="container">

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3 mt-4">{{ $post->title }}</h1>
                <p>
                    Dibuat oleh : {{ $post->author->name }}</a>
                </p>
                @if($post->image)
                <div style="max-height: 350px; overflow:hidden;" class="mt-3">
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-3 ">
                </div>
                @else
                    
                <img src="https://source.unsplash.com/1200x400/?blooddonor " class="img-fluid mb-3 "> 
                @endif
                {!! $post->body !!}
                </article>
                <a href="/berita" class="mt-3 btn btn-danger">Kembali ke berita</a>
            </div>
        </div>
    </div>



</div>

@endsection