<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('stylecss/vlogin2.css') }}">
    <title>Halaman Masuk</title>
  </head>

  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="{{url('proses_login')}}" method="POST" id="logForm">
            @csrf
            
            <h2 class="title">Masuk Validator / Operator</h2>
        
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Nama Pengguna" required/>
            </div>
        
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Kata Sandi" required/>
            </div>
        
            <button class="btn solid" type="submit">Masuk</button>

            <a href="{{url('/')}}" class="kembali"> 
                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                Kembali ke Laman Utama
            </a>

          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <img src="{{ asset("img/validator.svg")}}" class="image"/>
        </div>

    </div>

    <script src="{{ asset("js/app.js")}}"></script>
  </body>
</html>
