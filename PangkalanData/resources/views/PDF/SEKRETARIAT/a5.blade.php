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
        <p>LAPORAN DATA INVENTARISASI TANAH DAN BANGUNAN BALAI/KANTOR BAHASA</p>
    </div>

    <!-- TABLE -->
    <div class="validasi">
      <table class="table table-bordered dalam">
                <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">TANGGAL DATA</th>
                    <th rowspan="2">BALAI/KANTOR</th>
                    <th colspan="2">TANAH</th>
                    <th colspan="2">BANGUNAN</th>
                    <th rowspan="2">KONDISI</th>
                    <th rowspan="2">STATUS PEMEROLEHAN</th>
                    <th rowspan="2">KETERANGAN</th>
                    <!-- <th rowspan="2">MEDIA</th> -->
                </tr>
                <tr>
                    <th>STATUS</th>
                    <th>SERTIFIKAT</th>
                    <th>STATUS</th>
                    <th>IMB</th>
                </tr>


              @forelse ($data as $key => $a)
                  <tr>
                      <td>{{ $key + 1}}</td>
                      <td>{{ $a -> updated_at->format('m-d-Y')}}</td>
                      <td>{{ $a -> kantor}}</td>
                      <td>{{ $a -> status_tanah}}</td>
                      <td>{{ $a -> sertif_tanah}}</td>
                      <td>{{ $a -> status_bangunan}}</td>
                      <td>{{ $a -> imb}}</td>
                      <td>{{ $a -> kondisi}}</td>
                      <td>{{ $a -> status_peroleh}}</td>
                      <td>{{ $a -> keterangan}}</td>

                      <!-- <td>
                        @if ($a->media != null)
                          <a class="btn btn-info btn-sm" href={{ Storage::url($a->media) }} target="_blank">Media</a>
                        @else
                          Tidak ada media
                        @endif
                        {{-- {{ $a -> media}} --}}
                      </td> -->

                  
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