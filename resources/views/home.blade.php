<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/landing.css">

    <title>{{ $title }}</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container">
            <img class="logo" src="../img/logo.png" alt="Logo">
            <a class="navbar-brand" href="#">PMI KOTA LUBUKLINGGAU</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="/berita">Berita</a>
                <a class="nav-link" href="/daftar">jadi pendonor</a>
                <a class="nav-link" href="/about">Tentang</a>
                <a class="btn btn-danger tombol" href="/login">Login</a>
              </div>
            </div>
        </div>
      </nav>
    

    
        @yield('container')



        
        
        
        
        @include('footer')
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        
      </body>
</html>