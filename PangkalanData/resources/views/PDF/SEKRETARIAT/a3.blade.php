<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        {{-- <link rel="stylesheet" type="text/css" href="{{ asset('stylecss/oindex.css') }}"> --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
        *{
            font-family: 'Times New Roman', Times, serif
        }
        body{
            margin: auto;
            width: max-content;
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
        .dalam th{
            vertical-align: middle;
            padding: 12px 6px 12px 6px;
            font-size: 12px;
        }
    </style>
    
    </head>
    <body>

    <div class="judul">
        <p>LAPORAN DATA KEPEGAWAIAN UNIT/SATUAN KERJA</p>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="table table-bordered dalam">
            <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">TANGGAL DIPERBAHARUI</th>
                    <th colspan="3">JUMLAH PEGAWAI</th>
                    <th colspan="7">TINGKAT PENDIDIKAN</th>
                    <th colspan="17">PANGKAT/GOLONGAN</th>
                </tr>
                <tr>
                    <th>K</th>
                    <th>L</th>
                    <th>P</th>
                    <th>S3</th>
                    <th>S2</th>
                    <th>S1</th>
                    <th>D3</th>
                    <th>SMA</th>
                    <th>SMP</th>
                    <th>SD</th>
                    <th>IV/e</th>
                    <th>IV/d</th>
                    <th>IV/c</th>
                    <th>IV/b</th>
                    <th>IV/a</th>
                    <th>III/d</th>
                    <th>III/c</th>
                    <th>III/b</th>
                    <th>III/a</th>
                    <th>II/d</th>
                    <th>II/c</th>
                    <th>II/b</th>
                    <th>II/a</th>
                    <th>I/d</th>
                    <th>I/c</th>
                    <th>I/b</th>
                    <th>I/a</th>
                </tr> 

                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> updated_at->format('m-d-Y')}}</td>
                        <td>{{ $a -> semua_kelamin}}</td>
                        <td>{{ $a -> laki}}</td>
                        <td>{{ $a -> perempuan}}</td>
                        <td>{{ $a -> S3}}</td>
                        <td>{{ $a -> S2}}</td>
                        <td>{{ $a -> S1}}</td>
                        <td>{{ $a -> D3}}</td>
                        <td>{{ $a -> SMA}}</td>
                        <td>{{ $a -> SMP}}</td>
                        <td>{{ $a -> SD}}</td>
                        <td>{{ $a -> T_4E}}</td>
                        <td>{{ $a -> T_4D}}</td>
                        <td>{{ $a -> T_4C}}</td>
                        <td>{{ $a -> T_4B}}</td>
                        <td>{{ $a -> T_4A}}</td>
                        <td>{{ $a -> T_3D}}</td>
                        <td>{{ $a -> T_3C}}</td>
                        <td>{{ $a -> T_3B}}</td>
                        <td>{{ $a -> T_3A}}</td>
                        <td>{{ $a -> T_2D}}</td>
                        <td>{{ $a -> T_2C}}</td>
                        <td>{{ $a -> T_2B}}</td>
                        <td>{{ $a -> T_2A}}</td>
                        <td>{{ $a -> T_1D}}</td>
                        <td>{{ $a -> T_1C}}</td>
                        <td>{{ $a -> T_1B}}</td>
                        <td>{{ $a -> T_1A}}</td>
                        
                    </tr>
                @empty
                    <tr>
                        <td colspan="29" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

        </table>

        </div>

</body>
</html>