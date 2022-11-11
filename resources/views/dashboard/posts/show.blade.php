@extends('dashboard.layouts.main')


@section('container') 

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
        <h1 class="mb-3">{{ $post->title }}</h1>

        <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-box-arrow-left"></i> Kembali ke semua pos saya</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Ubah</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Pos')"><i class="bi bi-x-square"></i> Hapus</button>
        </form>
        @if($post->image)
        <div style="max-height: 350px; overflow:hidden;" class="mt-3">
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-3 ">
        </div>
        @else
            
        <img src="https://source.unsplash.com/1200x400/?blooddonor" class="img-fluid mb-3 "> 
        @endif
        <article>
            <div >{!! $post->body !!}</div>
        </article>
        </div>
    </div>
</div>
@endsection