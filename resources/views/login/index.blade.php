@extends('home')

@section('container')

<div class="container mb-5 mt-5">
<div class="row justify-content-center">
  
  <div class="col-lg-4 card mt-5">
    <h1 class="h3 mb-3 fw-normal text-center pt-3">Login</h1>
    
    
    
    @if(session('success'))
    <div class="alert alert-primary" role="alert">
      {{ session('success') }}
    </div>
    @endif
    @if(session('loginError'))
    <div class="alert alert-danger" role="alert">
      {{ session('loginError') }}
    </div>
    @endif
    @if(session('gagal'))
    <div class="alert alert-danger" role="alert">
      {{ session('gagal') }}
    </div>
    @endif
    <main class="form-signin">
      <form action="/login" method="post">
        @csrf
        
          <div class="form-floating">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control mb-2 @error('email') is-invalid @enderror" id="email"  placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" required placeholder="Password">
          </div>
          <button class="w-100 btn btn-lg btn-danger mt-2" type="submit">Login</button>
        </form>
      </main>
      <div class="text-center mt-2 pb-4">
        <a href="/login/forgotpassword" class="small">Lupa Password?</a>
      </div>
  </div>
</div>
</div>
@endsection