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
        <p>LAPORAN DATA PENELITIAN</p>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="table table-bordered dalam">
                <tr>
                    <th>NO</th>
                    <th>TGL.MULAI</th>
                    <th>TGL.SELESAI</th>
                    <!-- <th>UNIT/SATUAN KERJA</th> -->
                    <th>JUDUL</th>
                    <th>PENELITI</th>
                    <th>KERJA SAMA</th>
                    <th>ABSTRAK</th>
                    <th>LAMA PENELITIAN</th>
                    <th>PUBLIKASI</th>
                    <th>TAHUN TERBIT</th>
                    <!-- <th>MEDIA</th> -->
                </tr>


                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>
                            @if ($a -> tanggal_awal != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_awal)->format('d-m-Y')}}
                            @else
                                -
                            @endif 
                        </td>
                        <td>
                            @if ($a -> tanggal_akhir != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_akhir)->format('d-m-Y')}}
                            @else
                                -
                            @endif 
                        </td>
                        <!-- <td>{{ $a -> unit}}</td> -->
                        <td>{{ $a -> judul}}</td>
                        <td>{{ $a -> peneliti}}</td>
                        <td>{{ $a -> kerja_sama}}</td>
                        <td>{{ $a -> abstrak}}</td>
                        <td>{{ $a -> lama_penelitian}} {{ $a -> tipe_waktu}}</td>
                        <td>{{ $a -> publikasi}}</td>
                        <td>{{ $a -> tahun_terbit}}</td>
                        <!-- <td>{{ $a -> media}}</td> -->
                    
                    </tr>
                @empty
                    <tr>
                        <td colspan="10" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

        </table>
        </div>

</body>
</html>