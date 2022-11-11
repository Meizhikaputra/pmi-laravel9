@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Password</h1>
  </div>
    <div class="col-lg-8">
    <form method="post" action="/dashboard/ubahpassword" class="mb-5">
        @csrf
        @if(session('status'))
            <div class="alert alert-danger" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if(session('berhasil'))
            <div class="alert alert-success" role="alert">
                {{ session('berhasil') }}
            </div>
        @endif
        
        <div class="mb-3">
        <label for="old_password" class="form-label">Password Lama</label>
        <input type="password" class="form-control @error('old_password') is-invalid @enderror"  id="old_password" name="old_password" required>
        @error('old_password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Paassword Baru</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror"  id="password" name="password" required>
        @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <div class="mb-3">
        <label for="confirm_password" class="form-label">Konfirmasi Password Baru</label>
        <input type="password" class="form-control @error('confirm_password') is-invalid @enderror"  id="confirm_password" name="confirm_password" required>
        @error('confirm_password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>          
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Ubah Password</button>
    </form>

</div>
@endsection