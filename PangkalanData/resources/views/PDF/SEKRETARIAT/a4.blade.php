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
        <p>LAPORAN DATA KERJA SAMA</p>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="table table-bordered dalam">
                <tr>
                    <th>NO</th>
                    <th>TANGGAL KERJA SAMA</th>
                    <th>INSTANSI</th>
                    <th>KATEGORI</th>
                    <th>NO. KERJA SAMA</th>
                    <th>PERIHAL</th>
                    <th>KETERANGAN</th>
                    <th>DITANDATANGANI</th>
                </tr>

                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>
                            Mulai: {{ \Carbon\Carbon::parse($a->tanggal_awal)->format('d-m-Y')}} 
                            <br> 
                            @if ($a -> tanggal_akhir == null)
                                Berakhir: - </td>
                            @else
                                Berakhir: {{ \Carbon\Carbon::parse($a->tanggal_akhir)->format('d-m-Y')}}
                            @endif
                        <td>{{ $a -> instansi}}</td>
                        <td>{{ $a -> kategori}}</td>
                        <td>{{ $a -> nomor}}</td>
                        <td>{{ $a -> perihal}}</td>
                        <td>{{ $a -> keterangan}}</td>
                        <td>1. {{ $a -> ttd_1}} <br>2. {{ $a -> ttd_2}}</td>
                        <!-- <td>{{ $a -> instansi_1}}{{ $a -> instansi_2}}</td> -->

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