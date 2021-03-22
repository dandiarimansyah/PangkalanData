@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuData')

<div class="isi-konten">

    <div class="judul">
        <th>DATA PENYULUHAN</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>TANGGAL</th>
                    <th>KEGIATAN</th>
                    <th>NARASUMBER</th>
                    <th>SASARAN</th>
                    <th>JUMLAH</th>
                    <th>MATERI</th>
                    <!-- <th>MEDIA</th> -->
                </tr>
            </thead>

            <tbody>

                @forelse ($penyuluhan as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> kota}}</td>
                        <td>{{ $a -> tanggal_awal}} - {{ $a -> tanggal_akhir}}</td>
                        <td>{{ $a -> nama_kegiatan}}</td>
                        <td>{{ $a -> narasumber}}</td>
                        <td>{{ $a -> sasaran}}</td>
                        <td>{{ $a -> jumlah_peserta}}</td>
                        <td>{{ $a -> materi}}</td>
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