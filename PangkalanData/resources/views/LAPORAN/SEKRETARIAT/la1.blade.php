{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

    <div class="menu">
        <!-- KATEGORI SEKRETARIAT -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sekretariat
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/laporan/sekretariat/la1">Anggaran</a>
                <a class="dropdown-item" href="/laporan/sekretariat/la2">Realisasi Anggaran</a>
                <a class="dropdown-item" href="/laporan/sekretariat/la3">Kepegawaian</a>
                <a class="dropdown-item" href="/laporan/sekretariat/la4">Kerja Sama</a>
                <a class="dropdown-item" href="/laporan/sekretariat/la5">Tanah dan Bangunan</a>
                <a class="dropdown-item" href="/laporan/sekretariat/la6">Perpustakaan</a>
                <a class="dropdown-item" href="/laporan/sekretariat/la7">Invetarisasi BMN</a>
            </div>
        </div>

        <!-- KATEGORI DATA KEBAHASAAN -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Kebahasaan
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/laporan/kebahasaan/lb1">Kamus/Ensiklopedia</a>
                <a class="dropdown-item" href="/laporan/kebahasaan/lb2">Jurnal/Majalah</a>
                <a class="dropdown-item" href="/laporan/kebahasaan/lb3">Terbitan Umum</a>
                <a class="dropdown-item" href="/laporan/kebahasaan/lb4">Penyuluhan</a>
                <a class="dropdown-item" href="/laporan/kebahasaan/lb5">Pesuluh</a>
                <a class="dropdown-item" href="/laporan/kebahasaan/lb6">Penghargaan Bahasa</a>
                <a class="dropdown-item" href="/laporan/kebahasaan/lb7">Duta Bahasa Nasional</a>
                <a class="dropdown-item" href="/laporan/kebahasaan/lb8">Duta Bahasa Provinsi</a>
            </div>
        </div>

        <!-- KATEGORI DATA KESASTRAAN -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Kesastraan
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/laporan/kesastraan/lc1">Bengkel Sastra dan Bahasa</a>
                <a class="dropdown-item" href="/laporan/kesastraan/lc2">Penghargaan Sastra</a>
                <a class="dropdown-item" href="/laporan/kesastraan/lc3">Musikalisasi Puisi Nasional</a>
                <a class="dropdown-item" href="/laporan/kesastraan/lc4">Musikalisasi Puisi Provinsi</a>
            </div>
        </div>

        <!-- KATEGORI DATA KOMUNITAS -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Komunitas
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/laporan/komunitas/ld1">Komunitas Bahasa</a>
                <a class="dropdown-item" href="/laporan/komunitas/ld2">Komunitas Sastra</a>
            </div>
        </div>

        <!-- KATEGORI DATA PENELITIAN -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Penelitian
                </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/laporan/penelitian/le1">Penelitian</a>
            </div>
        </div>
    </div>

@endsection