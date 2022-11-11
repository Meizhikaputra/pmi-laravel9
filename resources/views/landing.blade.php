
@extends('home')
   


    @section('container')


  @include('cover')
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row more">
            <div class="col-lg">
              <img src="../img/icon.png" alt="Icon" class="float-left">
              <h4>Syarat Donor</h4>
              <p>Sangat mudah, ini syarat untuk jadi pendonor.</p>
              <a href="#" class="btn btn-danger">Lihat</a>
            </div>
            <div class="col-lg">
              <img src="../img/icon.png" alt="Icon" class="float-left">
              <h4>Profil Kami</h4>
              <p>Profil dan visi-misi UDD PMI Kota Lubuk linggau</p>
              <a href="#" class="btn btn-danger">Lihat</a>
            </div>
            <div class="col-lg">
              <img src="../img/icon.png" alt="Icon" class="float-left">
              <h4>Jadi Pendonor</h4>
              <p>Ayo, segera daftarkan diri anda untuk donor darah!!</p>
              <a href="/daftar" class="btn btn-danger">Daftar</a>
            </div>
          </div>

        </div>
      </div>
      <div class="workingspace text-center">

        <h3>Berita Terbaru <span>UDD PMI</span></h3>
      </div>
      <div class="row workingspace">
        <div class="col-lg-6">
          @if($posts[0]->image)
        <div class="gambar" style="max-height: 350px; overflow:hidden;">
            <img src="{{ asset('storage/' . $posts[0]->image) }}"  class="img-fluid ">
        </div>
        @else
        <img src="https://source.unsplash.com/1200x400/?blooddonor" class="card-img-top" >
        @endif
        </div>
        <div class="col-lg-5">
          <h2 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h2>
          <small class="text-muted">
            {{ $posts[0]->created_at->diffForHumans() }}
            </small>

            <p class="card-text">{{ $posts[0]->excerpt }}</p>
          <a href="/berita" class="btn btn-danger tombol">Semua Berita</a>
        </div>
      </div>

    </div>


  @endsection