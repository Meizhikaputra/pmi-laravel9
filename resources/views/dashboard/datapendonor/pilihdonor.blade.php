@extends('dashboard.layouts.main')


@section('container') 
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Silahkan Pilih Darah</h1>

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
  <div class="col-md-6 justify-content-end d-block">
    <form action="/dashboard/pilihdonor">
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari.." name="search">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit">Cari</button>
            </div>
          </div>
    </form>
</div>
  <div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Pendonor</th>
          <th scope="col">Golongan Darah</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Ambil</th>

        </tr>
      </thead>
      <tbody>
        @foreach($donors as $donor)
          
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $donor->name }}</td>
          <td>{{ $donor->golongandarah }}</td>
          <td>{{ $donor->tanggal }}</td>
          <td class="text-danger"> 
            @if($donor->nokantong !== 'belum')
            <a href="/dashboard/donors/{{ $donor->id }}/ambil" class="badge bg-success text-decoration-none" >Ambil</a>
            @else
            Belum Selesai
            @endif
            
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection