@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')

<div class="isi-konten">

@if ($errors->any())
    <div class="error">
        <p>----- Pesan Error -----</p>
    @foreach ($errors->all() as $error)
        <div class="errors">
        {{ $error }}
        </div>
    @endforeach
    </div>
@endif

    <div class="tombol-kembali">
        <button onclick="back()" type="button" class="btn">
            <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
            <span>KEMBALI</span>
        </button>
    </div>

    <div class="judul">
        <th>LAPORAN DATA INVENTARISASI TANAH DAN BANGUNAN BALAI/KANTOR BAHASA</th>
    </div>

    @auth
        @if (Auth::user()->level != 'tamu')
    <div class="judul" style="display:flex; justify-content:center">
        <a href="{{ url("/pdf/sekretariat/tanah_dan_bangunan?status_tanah={$status_tanah}&status_bangunan={$status_bangunan}")}}" target="_blank" type="button" class="btn btn-danger" style="border-radius: 5px;margin-right:15px;">
            <i style="margin-right: 4px" class="fa fa-file-pdf-o" aria-hidden="true"></i>
            EXPORT KE PDF
        </a>
        <a href="{{ url("/excel/sekretariat/tanah_dan_bangunan?status_tanah={$status_tanah}&status_bangunan={$status_bangunan}")}}" target="_blank" type="button" class="btn btn-success" style="border-radius: 5px;margin-right:15px;">
            <i style="margin-right: 4px" class="fa fa-file-excel-o" aria-hidden="true"></i>  
            EXPORT KE EXCEL
        </a>
    </div>
    @endif
    @endauth

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">TANGGAL DATA</th>
                    <!-- <th rowspan="2">BALAI/KANTOR</th> -->
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

              @forelse ($data as $key => $a)
                  <tr>
                      <td>{{ $key + 1}}</td>
                      <td>{{ $a -> updated_at->format('m-d-Y')}}</td>
                      <!-- <td>{{ $a -> kantor}}</td> -->
                      <td>{{ $a -> status_tanah}}</td>
                      <td>{{ $a -> sertif_tanah}}</td>
                      <td>{{ $a -> status_bangunan}}</td>
                      <td>{{ $a -> imb}}</td>
                      <td>{{ $a -> kondisi}}</td>
                      <td>{{ $a -> status_peroleh}}</td>
                      <td>{{ $a -> keterangan}}</td>
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

