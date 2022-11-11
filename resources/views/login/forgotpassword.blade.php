@extends('home')

@section('container')
<div class="container forgot">
<div class="row justify-content-center">

  
  <div class="col-lg-4 card mt-5 mb-5">
    <h1 class="h3 mb-3 fw-normal text-center pt-3">Anda Lupa Password?</h1>
    
    @if(session('info'))
    <div class="alert alert-primary" role="alert">
          {{ session('info') }}
          </div>
      @endif
    @if(session('gagal'))
    <div class="alert alert-danger" role="alert">
          {{ session('gagal') }}
          </div>
      @endif
    <main class="form-signin">
      <form action="/login/kirimemail" method="post">
        @csrf


          <div class="form-floating">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control mb-3 @error('email') is-invalid @enderror" id="email"  placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <button class="w-100 btn btn-lg btn-danger mt-2" type="submit">Kirim Email</button>
        </form>
      </main>
      <div class="text-center mt-2 pb-3">
        <a href="/login" class="small">Login</a>
      </div>
  </div>
</div>
</div>
@endsection