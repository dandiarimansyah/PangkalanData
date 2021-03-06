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
        <p>LAPORAN DATA BENGKEL SASTRA DAN BAHASA</p>
    </div>

    <!-- TABLE -->
    <div class="validasi">
    <table class="table table-bordered dalam">
                <tr>
                    <th>NO</th>
                    <th>PROVINSI</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>TANGGAL</th>
                    <th>KEGIATAN</th>
                    <th>PEMATERI</th>
                    <th>JUMLAH PESERTA</th>
                    <th>JUMLAH SEKOLAH</th>
                    <th>JUMLAH DIBINA</th>
                    <th>SEKOLAH YANG DIBINA</th>
                    <th>AKTIVITAS</th>
                </tr>


                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> kota}}</td>
                        <td>
                            @if ($a -> tanggal_awal_pelaksanaan != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_awal_pelaksanaan)->format('d-m-Y')}}
                            @else
                                -
                            @endif
                            <br>
                            @if ($a -> tanggal_akhir_pelaksanaan != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_akhir_pelaksanaan)->format('d-m-Y')}}
                            @else
                                -
                            @endif 
                        <td>{{ $a -> nama_kegiatan}}</td>
                        <td>{{ $a -> pemateri}}</td>
                        <td>{{ $a -> jumlah_peserta}}</td>
                        <td>{{ $a -> jumlah_sekolah}}</td>
                        <td>{{ $a -> jumlah_sekolah_yang_dibina}}</td>
                        <td>{{ $a -> nama_sekolah_yang_dibina}}</td>
                        <td>{{ $a -> aktivitas}}</td>

                     
                    </tr>
                @empty
                    <tr>
                        <td colspan="12" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse


        </table>
        </div>

</body>
</html>