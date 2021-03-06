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
        <p>LAPORAN DATA INVENTARISASI BARANG MILIK NEGARA</p>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="table table-bordered dalam">
                <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">TANGGAL DIPERBAHARUI</th>
                    <!-- <th rowspan="2">BALAI/KANTOR</th> -->
                    <th rowspan="2">TAHUN ANGGARAN</th>
                    <th colspan="8">ELEKTRONIK</th>
                    <th rowspan="2">FURNITURE</th>
                    <th colspan="3">KENDARAAN</th>
                </tr>
                <tr>
                    <th>LAPTOP</th>
                    <th>KOMPUTER</th>
                    <th>PRINTER</th>
                    <th>FOTOCOPY</th>
                    <th>FAXIMILI</th>
                    <th>LCD PROJECTOR</th>
                    <th>TV</th>
                    <th>LAIN-LAIN</th>
                    <th>RODA 2</th>
                    <th>RODA 4</th>
                    <th>RODA 6</th>
                </tr>


                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> updated_at->format('m-d-Y')}}</td>
                        <!-- <td>{{ $a -> unit}}</td> -->
                        <td></td>
                        <td>{{ $a -> laptop}}</td>
                        <td>{{ $a -> komputer}}</td>
                        <td>{{ $a -> printer}}</td>
                        <td>{{ $a -> fotocopy}}</td>
                        <td>{{ $a -> faximili}}</td>
                        <td>{{ $a -> LCD}}</td>
                        <td>{{ $a -> TV}}</td>
                        <td>{{ $a -> lain}}</td>
                        <td>{{ $a -> furniture}}</td>
                        <td>{{ $a -> roda_dua}}</td>
                        <td>{{ $a -> roda_empat}}</td>
                        <td>{{ $a -> roda_enam}}</td>

                       
                    </tr>
                @empty
                    <tr>
                        <td colspan="15" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse


        </table>
        </div>

</body>
</html>