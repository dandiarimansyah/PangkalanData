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
        <p>LAPORAN DATA ANGGARAN UNIT/SATUAN KERJA</p>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="table table-bordered dalam">
            <tr>
                <th>NO</th>
                <th>TAHUN ANGGARAN</th>
                <!-- <th>UNIT/SATUAN KERJA</th> -->
                <th>NILAI ANGGARAN(Rp.)</th>
            </tr>

            @forelse ($data as $key => $a)
                <tr>
                    <td>{{ $key + 1}}</td>
                    <td>{{ $a -> tahun_anggaran}}</td>
                    <!-- <td>{{ $a -> unit}}</td> -->
                    <td>{{ $a -> nilai_anggaran}}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" align="center">Tidak ada Data</td>
                </tr>
            @endforelse

        </table>
    </div>

</body>
</html>