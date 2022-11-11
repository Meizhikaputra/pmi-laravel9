@extends('main')

@section('container')
<div class="row justify-content-center">
  <h1 class="h3 mb-3 fw-normal text-center">Hai, {{ $name }} </h1> 
  <h1 class="h3 mb-3 fw-normal text-center">Silahkan Buat Password Baru Anda </h1> 

  
  <div class="col-lg-4">
    @if(session('status'))
    <div class="alert alert-primary" role="alert">
          {{ session('status') }}
          </div>
      @endif


    <main class="form-signin">
        <form action="/login/newpassword" method="post">
          @method('put')
          @csrf
          
          <input type="hidden" name="email" id="email" value="{{ $email }}">
          <div class="form-floating">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" required placeholder="Password">
          </div>
          <div class="form-floating">
            <label for="konfirmasipassword">Konfirmasi Password</label>
            <input type="password" name="konfirmasipassword" class="form-control" id="konfirmasipassword" required placeholder="Konfirmasi Password">
          </div>
          <button class="w-100 btn btn-lg btn-primary mt-2" type="submit">Login</button>
        </form>
      </main>
      <div class="text-center mt-2">
      </div>
  </div>
</div>

@endsection