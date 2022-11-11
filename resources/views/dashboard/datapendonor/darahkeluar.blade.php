@extends('dashboard.layouts.main')


@section('container') 
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Darah Yang Sudah di Ambil</h1>
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

  <div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Pasien</th>
          <th scope="col">Golongan Darah</th>
          <th scope="col">No. Kantong</th>
          <th scope="col">Rumahsakit</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Aksi</th>

        </tr>
      </thead>
      <tbody>
        @foreach($donors as $donor)
          
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $donor->namapasien }}</td>
          <td>{{ $donor->golongandarah }}</td>
          <td>{{ $donor->nokantong }}</td>
          <td>{{ $donor->rumahsakit }}</td>
          <td>{{ $donor->tanggalambil }}</td>
          
          <td>
            <a href="/dashboard/detailkeluar/{{ $donor->name }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection