@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuData')

<div class="isi-konten">

    <div class="judul">
        <th>DATA BENGKEL SASTRA DAN BAHASA</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>TANGGAL</th>
                    <!-- <th>KATEGORI</th> -->
                    <th>KEGIATAN</th>
                    <th>PEMATERI</th>
                    <th>JUMLAH PESERTA</th>
                    <th>JUMLAH SEKOLAH</th>
                    <th>JUMLAH DIBINA</th>
                    <th>SEKOLAH YANG DIBINA</th>
                    <th>AKTIVITAS</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($bengkel_sastra_dan_bahasa as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> kota}}</td>
                        <td>{{ $a -> tanggal_awal_pelaksanaan}} <br> {{ $a -> tanggal_akhir_pelaksanaan}}</td>
                        <!-- <td></td> -->
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
                        <td colspan="16" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>

@endsection