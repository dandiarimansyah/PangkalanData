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
        <th>LAPORAN DATA TERBITAN UMUM</th>
    </div>

    <div class="judul" style="display:flex; justify-content:center">
        <a href="{{ url('/pdf/kebahasaan/terbitan_umum')}}" target="_blank" type="button" class="btn btn-danger" style="border-radius: 5px;margin-right:15px;">
            EXPORT KE PDF
        </a>
        <a href="{{ url('/excel/kebahasaan/terbitan_umum')}}" target="_blank" type="button" class="btn btn-success" style="border-radius: 5px;margin-right:15px;">
            EXPORT KE EXCEL
        </a>
        <button href="/import/kebahasaan/terbitan_umum" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
            IMPORT EXCEL
        </button>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KATEGORI</th>
                    <th>JUDUL</th>
                    <th>PENULIS</th>
                    <th>ISBN</th>
                    <th>TAHUN TERBIT</th>
                    <th>DESKRIPSI FISIK</th>
                    <th>UNIT/SATKER</th>
                    <th>INFO PRODUK</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> kategori}}</td>
                        <td>{{ $a -> judul}}</td>
                        <td>{{ $a -> penulis}}</td>
                        <td>{{ $a -> no_isbn}}</td>
                        <td>{{ $a -> tahun_terbit}}</td>
                        <td>{{ $a -> deskripsi}}</td>
                        <td>Balai Bahasa Jawa Tengah</td>
                        <td>{{ $a -> info_produk}}</td>

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