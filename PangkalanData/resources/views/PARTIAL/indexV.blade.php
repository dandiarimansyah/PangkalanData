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

        <link rel="stylesheet" type="text/css" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

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
                        <li class="{{ (request()->is('operator/input*')) ? 'aktif' : 'nonaktif' }}"><a href="/operator/input">INPUT</a></li>    
                        <li class="{{ (request()->is('operator/edit*')) ? 'aktif' : 'nonaktif' }}"><a href="/operator/edit">EDIT</a></li>
                    @elseif (auth()->user()->level == 'validator')
                        <li class="{{ (request()->is('validator*')) ? 'aktif' : 'nonaktif' }}"><a href="/validator/validasi">VALIDASI</a></li>
                    @else
                        <li class="{{ (request()->is('data*')) ? 'aktif' : '' }}"><a href="/data">DATA</a></li>
                    @endif
                    <li class="{{ (request()->is('media*')) ? 'aktif' : 'nonaktif' }}"><a href="/media">MEDIA</a></li>
                    <li class="{{ (request()->is('laporan*')) ? 'aktif' : 'nonaktif' }}"><a href="/laporan">LAPORAN</a></li>
                    <li class="{{ (request()->is('grafik*')) ? 'aktif' : 'nonaktif' }}"><a href="/grafik">GRAFIK</a></li>
                    <li class="{{ (request()->is('forum*')) ? 'aktif' : 'nonaktif' }}"><a href="/forum">FORUM</a></li>
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
        
        @include('sweetalert::alert')

        <script src="{{ asset('sweetalert2/sweetalert2.min.js')}}"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

        @stack('scripts')

        <script type="text/javascript">
            $('.icon').click(function(){
            $('span').toggleClass("cancel");
            });


            $('#valid').click(function() {
                if ($(this).prop('checked')) {
                    $('.check').prop('checked', true);
                } else {
                    $('.check').prop('checked', false);
                }
            });

            $(document).ready(function () {
                var table = $('#datatable').DataTable();
            })
      
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

            // function konfirmasi(){
            //     var tanya = confirm("Apakah Anda Yakin Menghapus Data ini?");
        
            //     if(tanya === true) {
            //         return true;
            //     }else{
            //         return false;
            //     }
        
            //     document.getElementById("pesan");
            // }

            $(document).on('click', '#pesan', function(e){
                e.preventDefault();
                var link = $(this).attr('href');
                
                Swal.fire({
                    title: 'Yakin Dihapus?',
                    text: "Data akan dihapus!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Hapus',
                    reverseButtons: true
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = link;
                    }
                })
            })

            $(document).on('click', '#hapus_media', function(e){
                e.preventDefault();
                var link = $(this).attr('href');
                
                Swal.fire({
                    title: 'Yakin Dihapus?',
                    text: "Media akan dihapus!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Hapus',
                    reverseButtons: true
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = link;
                    }
                })
            })

            $(document).on('click', '#tombol_validasi', function(e){
                e.preventDefault();
                
                Swal.fire({
                    title: 'Validasi Data Terpilih?',
                    text: "Data yang telah dicentang akan tervalidasi",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#008A67',
                    cancelButtonColor: '#3085d6',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Validasi',
                    reverseButtons: true
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = link;
                    }
                })
            })

            function jenis_lain(val){
                var element=document.getElementById('jenis_buku_2');
                var element2=document.getElementById('a');
                if(val=='Lain'){
                    element.style.display='block';
                    element2.style.display='none';
                }
                else {
                    element.style.display='none';
                    element2.style.display='block';
                }
            }

            
        </script>
        

    </body>
</html>
