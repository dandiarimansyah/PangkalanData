<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">

        @auth
            @if (Auth::user()->level == 'operator')
                <link rel="stylesheet" type="text/css" href="{{ asset('stylecss/oindex.css') }}">
            @elseif (Auth::user()->level == 'validator')
                <link rel="stylesheet" type="text/css" href="{{ asset('stylecss/vindex.css') }}">
            @elseif (Auth::user()->level == 'tamu')
                <link rel="stylesheet" type="text/css" href="{{ asset('stylecss/guest.css') }}">
            @endif
        @endauth

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <nav>
            @auth
                @if (Auth::user()->level == 'operator')
                    <div class="logo"> Pangkalan Data <span style="color: rgb(255, 255, 81)">Operator</span> </div>
                @elseif (Auth::user()->level == 'validator')
                    <div class="logo"> Pangkalan Data <span style="color: rgb(255, 255, 81)">Validator</span> </div>
                @elseif (Auth::user()->level == 'tamu')
                    <div class="logo"> Pangkalan Data <span style="color: rgb(255, 255, 81)">Tamu</span> </div>
                @endif
            @endauth

            <ul>
                @auth
                    @if (auth()->user()->level == 'operator')
                        <li class="{{ (request()->is('operator/input*')) ? 'aktif' : '' }}"><a href="/operator/input">INPUT</a></li>    
                        <li class="{{ (request()->is('operator/edit*')) ? 'aktif' : '' }}"><a href="/operator/edit">EDIT</a></li>
                    @elseif (auth()->user()->level == 'validator')
                        <li class="{{ (request()->is('validator*')) ? 'aktif' : '' }}"><a href="/validator/validasi">VALIDASI</a></li>
                    @else
                        <li class="{{ (request()->is('/*')) ? 'aktif' : '' }}"><a href="/">DATA</a></li>
                    @endif
                    <li class="{{ (request()->is('media*')) ? 'aktif' : '' }}"><a href="/media">MEDIA</a></li>
                    <li class="{{ (request()->is('laporan*')) ? 'aktif' : '' }}"><a href="/laporan">LAPORAN</a></li>
                    <li class="{{ (request()->is('grafik*')) ? 'aktif' : '' }}"><a href="/grafik">GRAFIK</a></li>
                    <li class="{{ (request()->is('forum*')) ? 'aktif' : '' }}"><a href="/forum">FORUM</a></li>
                    <li><a href="#" class="logout" data-toggle="modal" data-target="#exampleModal">KELUAR</a></li>
                @endauth
            </ul>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Yakin ingin Keluar?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Klik "YA" untuk Keluar
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">BATAL</button>
                  <a href="{{ url("/logout")}}" type="button" class="btn btn-primary">YA</a>
                </div>
              </div>
            </div>
          </div>

        <div class="dalam-konten">
            @yield('content')
        </div>

        <footer class="footer">
            <h5>Balai Bahasa Provinsi Jawa Tengah</h5>
            <h5>Jalan Elang Raya No.1, Mangunharjo, Tembalang, Sendangmulyo, Tembalang, Kota Semarang, Jawa Tengah 50272</h5>
            <h5>Pos-el: balaibahasa.jateng@kemdikbud.go.id</h5>
        </footer>
        
        <script>
            $('.icon').click(function(){
            $('span').toggleClass("cancel");
            });
      
            function VALIDATOR() {
                var x = document.getElementById("valid");
                var y = document.getElementById("uncheck");
                var z = document.getElementById("check");
                if (y.style.display === "inline") {
                    y.style.display = "none";
                    z.style.display = "inline";
                } else {
                    y.style.display = "inline";
                    z.style.display = "none";
                }
            }

            function konfirmasi(){
                var tanya = confirm("Apakah Anda Yakin Menghapus Data ini?");
        
                if(tanya === true) {
                    return true;
                }else{
                    return false;
                }
        
                document.getElementById("pesan");
            }

            @stack('scripts')

        </script>

    </body>
</html>
