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
        <p>LAPORAN DATA PERPUSTAKAAN</p>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="table table-bordered dalam">
                <tr>
                    <th>NO</th>
                    <th>TANGGAL DIPERBAHARUI</th>
                    <th>PROVINSI</th>
                    <!-- <th>UNIT KERJA</th> -->
                    <th>JUMLAH BUKU</th>
                    <th>JUMLAH JUDUL</th>
                    <th>JENIS</th>
                    <th>JUMLAH PENGUNJUNG</th>
                    <th>SUMBER DATA</th>
                </tr>


                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> updated_at->format('m-d-Y')}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <!-- <td>{{ $a -> unit}}</td> -->
                        <td>{{ $a -> jumlah_buku}}</td>
                        <td>{{ $a -> jumlah_judul}}</td>
                        <td>{{ $a -> jenis_buku}}</td>
                        <td>{{ $a -> jumlah_pengunjung}}</td>
                        <td>{{ $a -> sumber_data}}</td>

                     
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse


        </table>
        </div>

</body>
</html>