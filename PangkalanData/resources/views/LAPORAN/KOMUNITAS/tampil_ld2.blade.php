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
        <th>LAPORAN DATA KOMUNITAS SASTRA</th>
    </div>

    @auth
        @if (Auth::user()->level != 'tamu')
    <div class="judul" style="display:flex; justify-content:center">
        <a href="{{ url("/pdf/komunitas/komunitas_sastra?kota={$kota}&nama_komunitas={$nama_komunitas}&alamat={$alamat}&provinsi={$provinsi}")}}" target="_blank" type="button" class="btn btn-danger" style="border-radius: 5px;margin-right:15px;">
            EXPORT KE PDF
        </a>
        <a href="{{ url("/excel/komunitas/komunitas_sastra?kota={$kota}&nama_komunitas={$nama_komunitas}&alamat={$alamat}&provinsi={$provinsi}")}}" target="_blank" type="button" class="btn btn-success" style="border-radius: 5px;margin-right:15px;">
            EXPORT KE EXCEL
        </a>
        <button href="/import/komunitas/komunitas_sastra" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
            IMPORT EXCEL
        </button>
    </div>
    @endif
    @endauth

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>KECAMATAN</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>PROVINSI</th>
                    <th>KOORDINAT</th>
                    <th>KETERANGAN</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> nama_komunitas}}</td>
                        <td>{{ $a -> alamat}}</td>
                        <td>{{ $a -> kecamatan}}</td>
                        <td>{{ $a -> kota}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> koordinat}}</td>
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