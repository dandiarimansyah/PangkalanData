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

    <div class="judul">
        <th>LAPORAN DATA PESULUH</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>PROVINSI</th>
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
                        <td>{{ $a -> penyuluhan -> provinsi}}</td>
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