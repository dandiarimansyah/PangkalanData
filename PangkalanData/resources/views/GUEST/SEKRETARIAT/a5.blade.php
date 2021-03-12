@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuData')

<div class="isi-konten">

    <div class="judul">
        <th>DATA INVENTARISASI TANAH DAN BANGUNAN BALAI/KANTOR BAHASA</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
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
                    <!-- <th rowspan="2">MEDIA</th> -->
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
                      <!-- <td></td> -->
                  </tr>
              @empty
                  <tr>
                      <td colspan="16" align="center">Tidak ada Data</td>
                  </tr>
              @endforelse

            </tbody>


        </table>

    </div>

@endsection