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
        <th>LAPORAN DATA PESULUH</th>
    </div>

    @auth
        @if (Auth::user()->level != 'tamu')
    <div class="judul" style="display:flex; justify-content:center">
        <a href="{{ url("/pdf/kebahasaan/pesuluh?tingkat={$tingkat}&nama={$nama}&instansi={$instansi}")}}" target="_blank" type="button" class="btn btn-danger" style="border-radius: 5px;margin-right:15px;">
            <i style="margin-right: 4px" class="fa fa-file-pdf-o" aria-hidden="true"></i>
            EXPORT KE PDF
        </a>
        <a href="{{ url("/excel/kebahasaan/pesuluh?tingkat={$tingkat}&nama={$nama}&instansi={$instansi}")}}" target="_blank" type="button" class="btn btn-success" style="border-radius: 5px;margin-right:15px;">
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
                    <th>NO</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>KEGIATAN</th>
                    <th>TAHUN</th>
                    <th>NAMA</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TGL LAHIR</th>
                    <th>INSTANSI</th>
                    <th>TINGKAT</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> penyuluhan -> kota}}</td>
                        <td>{{ $a -> penyuluhan -> nama_kegiatan}}</td>
                        <td>Tahun</td>
                        <td>{{ $a -> nama}}</td>
                        <td>{{ $a -> tempat_lahir}}</td>
                        <td>{{ $a -> tanggal_lahir}}</td>
                        <td>{{ $a -> instansi}}</td>
                        <td>{{ $a -> tingkat}}</td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="11" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>

@endsection