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
        <p>LAPORAN DATA REALISASI ANGGARAN UNIT/SATUAN KERJA</p>
    </div>
    
    <!-- TABLE -->
    <div class="validasi">
        <table class="table table-bordered dalam">
                <tr>
                    <th>NO</th>
                    <th>TANGGAL REALISASI</th>
                    <!-- <th>UNIT/SATUAN KERJA</th> -->
                    <th>NILAI REALISASI(Rp.)</th>
                    <th>KETERANGAN</th>
                </tr>

                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tahun_realisasi}}</td>
                        <!-- <td>{{ $a -> unit}}</td> -->
                        <td>{{ $a -> besar_dana}}</td>
                        <td>{{ $a -> keterangan}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

        </table>

    </div>

</body>
</html>