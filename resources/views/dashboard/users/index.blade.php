@extends('dashboard.layouts.main')


@section('container') 
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pengguna Terdaftar</h1>
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
    <a href="/dashboard/users/create" class="btn btn-primary mb-3">Tambah Pengguna</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>
            <form action="/dashboard/users/{{ $user->name }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Anda Yakin Ingin Menghapus Pengguna?')"><i class="bi bi-x-square"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection