@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuMedia')

<div class="isi-konten">

    <div class="judul">
        <th>MEDIA DATA INVENTARISASI TANAH DAN BANGUNAN BALAI/KANTOR BAHASA</th>
    </div>

    <div class="" style=" display:flex; justify-content:center">
        <div class="input-group" style="width: 30%; padding:20px;">
            <input type="text" class="form-control" placeholder="Cari">
            <div class="input-group-append">
            <button class="btn btn-secondary" type="button">
                <i class="fa fa-search"></i>
            </button>
            </div>
        </div>
    </div>

  <!-- TABLE -->
  <div class="validasi">
    <table class="content-table">
        <thead>
            <tr>
                <th rowspan="2">NO</th>
                <th rowspan="2">TANGGAL DATA</th>
                <th rowspan="2">BALAI/KANTOR</th>
                <th colspan="2">TANAH</th>
                <th colspan="2">BANGUNAN</th>
                <th rowspan="2">KONDISI</th>
                <th rowspan="2">STATUS PEMEROLEHAN</th>
                <th rowspan="2">KETERANGAN</th>
                <th rowspan="2">MEDIA</th>
            </tr>
            <tr>
                <th>STATUS</th>
                <th>SERTIFIKAT</th>
                <th>STATUS</th>
                <th>IMB</th>
            </tr>
        </thead>

        <tbody>

          @forelse ($tanah_bangunan as $key => $a)
              <tr>
                  <td>{{ $key + 1}}</td>
                  <td></td>
                  <td>{{ $a -> kantor}}</td>
                  <!-- <td>{{ $a -> alamat}}</td> -->
                  <td>{{ $a -> status_tanah}}</td>
                  <td>{{ $a -> sertif_tanah}}</td>
                  <td>{{ $a -> status_bangunan}}</td>
                  <td>{{ $a -> imb}}</td>
                  <td>{{ $a -> kondisi}}</td>
                  <td>{{ $a -> status_peroleh}}</td>
                  <td>{{ $a -> keterangan}}</td>

                <td>
                    @if ($a->media == "")
                        <form role="form" action="" enctype="multipart/form-data">
                            <input type="file" name="media">
                        </form>
                    @else
                        {{ $a -> media}}
                    @endif
                    </td>
              </tr>
          @empty
              <tr>
                  <td colspan="16" align="center">Tidak ada Data</td>
              </tr>
          @endforelse

        </tbody>


    </table>

    </div>
</div>

    

@endsection