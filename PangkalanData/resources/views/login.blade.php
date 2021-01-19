<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>
    <link rel="stylesheet" href="vlogin.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('stylecss/vlogin.css') }}">
    <title>Halaman Masuk</title>
  </head>

  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="{{url('proses_login')}}" method="POST" id="logForm" class="sign-in-form">
            @csrf
            <h2 class="title">Masuk sebagai Validator</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Nama Pengguna" />
            </div>
          
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Kata Sandi" />
            </div>
        
            <button class="btn" type="submit">Masuk</button>
          </form>

          <form action="{{url('proses_login')}}" method="POST" id="logForm" class="sign-up-form">
            @csrf
            <h2 class="title">Masuk sebagai Operator</h2>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Nama Pengguna" />
            </div>
            
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Kata Sandi" />
            </div>
            
            <button class="btn" type="submit">Masuk</button>
          </form>
        
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">

          <div class="content">
            <h3>Masuk sebagai Operator?</h3>
            <p>
              Tekan dibawah ini!
            </p>

            <button class="btn transparent" id="sign-up-btn">
              Operator
            </button>
          </div>

          <img src="{{ asset("img/validator.svg")}}" class="image"/>
        </div>

        <div class="panel right-panel" >

          <div class="content" style="margin-right:200px ;">
            <h3>Masuk sebagai Validator?</h3>
            <p>
              Tekan dibawah ini!
            </p>

            <button class="btn transparent" id="sign-in-btn">
              Validator
            </button>
          </div>
          
          <img src="{{ asset("img/operator.svg")}}" class="image"/>
        </div>
        
      </div>
    </div>

    <script src="{{ asset("js/app.js")}}"></script>
  </body>
</html>