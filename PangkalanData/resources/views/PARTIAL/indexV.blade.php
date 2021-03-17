<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="{{ asset('Gambar/icon2.png') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('stylecss/style.css') }}">

        @include('PARTIAL.StyleCSS')

        @yield('style')
            
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="{{ asset('sweetalert2/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

        <title>Balai Bahasa Provinsi Jawa Tengah</title>

    </head>

    <body>
        <div id="all-content">

        <nav>
            @auth
                @if (Auth::user()->level == 'operator')
                    <div class="logo"> Pangkalan Data <span style="color: rgb(255, 255, 81)">Operator</span> </div>
                @elseif (Auth::user()->level == 'validator')
                    <div class="logo"> Pangkalan Data <span style="color: rgb(255, 255, 81)">Validator</span> </div>
                @elseif (Auth::user()->level == 'tamu')
                    <div class="logo"> Pangkalan Data <span style="color: rgb(255, 255, 81)">Tamu</span> </div>
                @elseif (Auth::user()->level == 'admin')
                    <div class="logo"> Pangkalan Data <span style="color: rgb(255, 255, 81)">Admin</span> </div>
                @endif
            @endauth

            <ul>
            @auth
                <li class="{{ (request()->is('beranda*')) ? 'aktif' : 'nonaktif' }}"><a href="/beranda">BERANDA</a></li>    
                @if (auth()->user()->level == 'operator')
                    <li class="{{ (request()->is('operator/input*')) ? 'aktif' : 'nonaktif' }}"><a href="/operator/input">INPUT</a></li>    
                    <li class="{{ (request()->is('operator/edit*')) ? 'aktif' : 'nonaktif' }}"><a href="/operator/edit">EDIT</a></li>
                    <li class="{{ (request()->is('media*')) ? 'aktif' : 'nonaktif' }}"><a href="/media">DOKUMEN</a></li>
                    <li class="{{ (request()->is('laporan*')) ? 'aktif' : 'nonaktif' }}"><a href="/laporan">LAPORAN</a></li>
                    <li class="{{ (request()->is('grafik*')) ? 'aktif' : 'nonaktif' }}"><a href="/grafik">GRAFIK</a></li>
                    <li><a href="#" class="logout" data-toggle="modal" data-target="#exampleModal">KELUAR</a></li>

                @elseif (auth()->user()->level == 'validator')
                    <li class="{{ (request()->is('validator*')) ? 'aktif' : 'nonaktif' }}"><a href="/validator/validasi">VALIDASI</a></li>
                    <li class="{{ (request()->is('media*')) ? 'aktif' : 'nonaktif' }}"><a href="/media">DOKUMEN</a></li>
                    <li class="{{ (request()->is('laporan*')) ? 'aktif' : 'nonaktif' }}"><a href="/laporan">LAPORAN</a></li>
                    <li class="{{ (request()->is('grafik*')) ? 'aktif' : 'nonaktif' }}"><a href="/grafik">GRAFIK</a></li>
                    <li><a href="#" class="logout" data-toggle="modal" data-target="#exampleModal">KELUAR</a></li>

                @elseif (auth()->user()->level == 'tamu')
                    <li class="{{ (request()->is('data*')) ? 'aktif' : 'nonaktif' }}"><a href="/data">DATA</a></li>
                    <li class="{{ (request()->is('media*')) ? 'aktif' : 'nonaktif' }}"><a href="/media">DOKUMEN</a></li>
                    <li class="{{ (request()->is('laporan*')) ? 'aktif' : 'nonaktif' }}"><a href="/laporan">LAPORAN</a></li>
                    <li class="{{ (request()->is('grafik*')) ? 'aktif' : 'nonaktif' }}"><a href="/grafik">GRAFIK</a></li>
                    <li><a href="#" class="logout" data-toggle="modal" data-target="#exampleModal">KELUAR</a></li>

                @elseif (auth()->user()->level == 'admin')
                    <li class="{{ (request()->is('admin/akun*')) ? 'aktif' : 'nonaktif' }}"><a href="/admin/akun_operator">KELOLA AKUN</a></li>
                    <li class="{{ (request()->is('admin/kelola_foto*')) ? 'aktif' : 'nonaktif' }}"><a href="/admin/kelola_foto">KELOLA FOTO</a></li>
                    <li><a href="#" class="logout" data-toggle="modal" data-target="#exampleModal">KELUAR</a></li>
                @endif
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

    </div>


        <!-- Modal Import Data -->
        <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form id="import_form" action="" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="modal-body">
                        <div class="template">
                            <p>Import Data harus menggunakan template!</p>
                            <p>Jika belum mempunyai template,</p>
                            <p>Silahkan unduh template dibawah</p>
                            <p>
                                <a id="template_excel" href="" class="btn btn-success">Unduh Template</a>
                            </p>
                            
                        </div>
                        <input name="file" type="file" required='required' oninvalid="this.setCustomValidity('Silahkan Masukkan File!')"
                        oninput="this.setCustomValidity('')">
                        <p style="font-size: 16px; margin-top:5px">Pilih file yang akan diimport</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        
        @include('sweetalert::alert')

        <script>
            $(document).on('click','#tombol_validasi',function(e){
                e.preventDefault();
                let url = $(this).attr('href');

                Swal.fire({
                    title: 'Validasi Data?',
                    text: "Data yang telah dicentang akan divalidasi!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#028B40',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Validasi',
                    reverseButtons: true
                    }).then((result) => {
                    if (result.isConfirmed) {
                        let data = []
                        $(".check:checked").each((i, e) => data.push(e.getAttribute('data-id')))
                
                        $.ajax({
                            type: "post",
                            url: url,
                            data: {_token:'{{ csrf_token() }}', id: data},
                            dataType:"json",
                            complete: function(){
                                location.reload();
                            }
                        });
                    }
                })
            })
        </script>
        
        <script type="text/javascript" src="{{ URL::asset('js/index.js') }}"></script>

        <script src="{{ asset('sweetalert2/sweetalert2.min.js')}}"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>

        <script src="https://code.highcharts.com/highcharts.js"></script>
     
        @stack('scripts')

    </body>
</html>
