<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"> </script>
    <link rel="stylesheet" type="text/css" href="{{ asset('stylecss/vlogin.css') }}">
    <title>Halaman Masuk</title>
  </head>

  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <form action="{{url('proses_login')}}" method="POST" class="sign-in-form">
            @csrf

            <h2 class="title">Masuk sebagai Validator</h2>

            @if (session('error'))
              <div class="salah-login">{{ session('error') }}</div>
            @endif

            @error('username')
                <span class="wajib-diisi" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Nama Pengguna"/>
            </div>
          
            @error('password')
                  <span class="wajib-diisi" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            <div class="input-field">
              

              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Kata Sandi"/>
            </div>
        
            <button class="btn" type="submit">Masuk</button>

            <a href="{{url('/')}}" class="btn kembali"> 
              {{-- <i class="fa fa-arrow-left" aria-hidden="true"></i> --}}
              Masuk Sebagai Tamu
            </a>
          </form>

          <form action="{{url('proses_login')}}" method="POST" class="sign-up-form">
            @csrf

            <h2 class="title">Masuk sebagai Operator</h2>

            @if (session('error'))
              <div class="salah-login">{{ session('error') }}</div>
            @endif

            @error('username')
                <span class="wajib-diisi" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Nama Pengguna" />
            </div>

            @error('password')
                <span class="wajib-diisi" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="input-field">              
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Kata Sandi" />

              
            </div>
            
            <button class="btn" type="submit">Masuk</button>

            <a href="{{url('/')}}" class="btn kembali"> 
              {{-- <i class="fa fa-arrow-left" aria-hidden="true"></i> --}}
              Masuk Sebagai Tamu
            </a>
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

          <img src="{{ asset("img/validator.png")}}" class="image"/>
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