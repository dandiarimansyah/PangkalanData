<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('stylecss/oindex.css') }}"> --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style type="text/css">
            *{
                font-family: 'Times New Roman', Times, serif
            }
            .validasi {
                margin: auto;
                margin-top: 15px;
                text-align: center;
            }
            p{
                text-align: center;
                font-size: 15px;
                font-weight: bold;
            }
            .dalam td{
                font-size: 12px;
            }
    
            table{
                text-align: center;
            }
            tr th{
                font-size: 12px;
            }
        </style>

    </head>
    <body>
    <div class="judul">
        <p>LAPORAN DATA KAMUS / ENSIKLOPEDIA</p>
    </div>

    <!-- TABLE -->
    <div class="validasi">
    <table class="table table-bordered dalam">
                <tr>
                    <th>NO</th>
                    <th>KATEGORI</th>
                    <th>JUDUL</th>
                    <th>EDISI</th>
                    <th>TIM REDAKSI</th>
                    <th>ISBN</th>
                    <th>PENERBIT</th>
                    <th>TAHUN TERBIT</th>
                    <th>LINGKUP</th>
                    <th>KETERANGAN</th>
                    <!-- <th>UNIT/SATKER</th> -->
                    <th>INFO PRODUK</th>
                    <!-- <th>MEDIA</th> -->
                </tr>


              @forelse ($data as $key => $a)
                  <tr>
                      <td>{{ $key + 1}}</td>
                      <td>{{ $a -> kategori}}</td>
                      <td>{{ $a -> judul}}</td>
                      <td>{{ $a -> edisi}}</td>
                      <td>{{ $a -> tim_redaksi}}</td>
                      <td>{{ $a -> no_isbn}}</td>
                      <td>{{ $a -> penerbit}}</td>
                      <td>{{ $a -> tahun_terbit}}</td>
                      <td>{{ $a -> lingkup}}</td>
                      <td>{{ $a -> keterangan}}</td>
                      <!-- <td>{{ $a -> tahun_terbit}}</td> -->
                      <td>{{ $a -> info_produk}}</td>

                      
                  </tr>
              @empty
                  <tr>
                      <td colspan="11" align="center">Tidak ada Data</td>
                  </tr>
              @endforelse


        </table>
        </div>

</body>
</html>