@extends('dashboard.layouts.main')


@section('container') 
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Pendonor</h1>
  </div>


  @if(session()->has('success'))
    <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
    </div>
  @endif
  @if(session()->has('hapus'))
    <div class="alert alert-danger col-lg-8" role="alert">
        {{ session('hapus') }}
    </div>
  @endif

  <a href="/dashboard/donors/create" class="btn btn-primary mb-3">Buat Data Darah</a>
  <div class="row">
    <div class="col">
        <form action="/dashboard/donors">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari.." name="search">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">Cari</button>
                </div>
              </div>
        </form>
    </div>
      <div class="col-lg-4">
        <button class="btn btn-primary bg-white text-primary mb-3 dropdown-toggle" type="button" id="filter" name="filter" data-bs-toggle="dropdown" aria-expanded="false">
          @if(Request::is('dashboard/pendaftaran/online'))
          Online
          @elseif(Request::is('dashboard/donors'))
          Semua
          @else
          Offline
          @endif
        </button>
        <ul class="dropdown-menu" aria-labelledby="filter">
          <li><a class="dropdown-item" href="/dashboard/donors">Semua</a></li>
          <li><a class="dropdown-item text-success" href="/dashboard/pendaftaran/online">Online</a></li>
          <li><a class="dropdown-item text-danger" href="/dashboard/pendaftaran/offline">Offline</a></li>
        </ul>
    </div>
  </div>
  <div class="table-responsive col-lg-10">
      
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Pendonor</th>
          <th scope="col">Golongan Darah</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Status</th>
          <th scope="col">Jenis pendaftaran</th>
          <th scope="col">Aksi</th>


        </tr>
      </thead>
      <tbody>
        @foreach($donors as $donor)
          
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $donor->name }}</td>
          <td>{{ $donor->golongandarah }}</td>
          <td>{{ $donor->tanggal }}</td>
          
          <td class="text-success">
            @if($donor->tekanandarah == 'belum')
            <a href="/dashboard/donors/{{ $donor->id }}/cektekanan" class="badge bg-success text-decoration-none">Mulai Periksa</a>
            @else
            Selesai
            @endif
          </td>
          <td @if($donor->pendaftaran == 'Online')
            class="text-success"
            @elseif($donor->pendaftaran == 'Offline')
            class="text-danger"
            @endif
            >{{ $donor->pendaftaran }}</td>
            <td>
              <a href="/dashboard/donors/{{ $donor->id }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
              <a href="/dashboard/donors/{{ $donor->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
              <form action="/dashboard/donors/{{ $donor->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Anda Yakin Ingin Menghapus Data?')"><i class="bi bi-x-square"></i></button>
              </form>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection