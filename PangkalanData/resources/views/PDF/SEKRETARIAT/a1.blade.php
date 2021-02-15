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

        h5{
            text-align: center
        }
        .atas td{
            font-weight: bold;
            font-size: 14px;
        }
        .dalam td{
            font-size: 12px;
        }

        table{
            text-align: center
        }

    </style>
    </head>
    <body>
    
    <div class="judul">
        <h5>LAPORAN DATA ANGGARAN UNIT/SATUAN KERJA</h5>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="table table-bordered dalam">
            <tr class="atas">
                <td>NO</td>
                <td>TAHUN ANGGARAN</td>
                <td>UNIT/SATUAN KERJA</td>
                <td>NILAI ANGGARAN(Rp.)</td>
            </tr>

            @forelse ($anggaran as $key => $a)
                <tr>
                    <td>{{ $key + 1}}</td>
                    <td>{{ $a -> tahun_anggaran}}</td>
                    <td>{{ $a -> unit}}</td>
                    <td>{{ $a -> nilai_anggaran}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" align="center">Tidak ada Data</td>
                </tr>
            @endforelse

        </table>
    </div>

</body>
</html>