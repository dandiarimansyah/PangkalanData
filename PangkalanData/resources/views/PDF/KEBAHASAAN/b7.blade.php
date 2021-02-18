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
        <p>LAPORAN DATA DUTA BAHASA NASIONAL</p>
    </div>

    <!-- TABLE -->
    <div class="validasi">
    <table class="table table-bordered dalam">
                <tr>
                    <th>NO</th>
                    <th>TAHUN</th>
                    <th>ASAL PROVINSI</th>
                    <th>PEMENANG I</th>
                    <th>PEMENANG II</th>
                    <th>PEMENANG III</th>
                    <th>KETERANGAN</th>
                    <!-- <th>MEDIA</th> -->
                </tr>


                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tahun}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>1. {{ $a -> pemenang_1_1}} <br> 2. {{ $a -> pemenang_1_2}}</td>
                        <td>1. {{ $a -> pemenang_2_1}} <br> 2. {{ $a -> pemenang_2_2}}</td>
                        <td>1. {{ $a -> pemenang_3_1}} <br> 2. {{ $a -> pemenang_3_2}}</td>
                        <td>{{ $a -> keterangan}}</td>

                      
                    </tr>
                @empty
                    <tr>
                        <td colspan="16" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse


        </table>
        </div>

</body>
</html>