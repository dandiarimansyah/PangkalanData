{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')
{{-- @extends('PARTIAL.indexV') --}}

@section('content')

    <div class="content">
        <header>HALAMAN GRAFIK</header>
    </div>

    <div class="menu">
        <!-- KATEGORI SEKRETARIAT -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sekretariat
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/grafik/sekretariat/ga1">Anggaran</a>
                <a class="dropdown-item" href="/grafik/sekretariat/ga2">Kerja Sama</a>
                <a class="dropdown-item" href="/grafik/sekretariat/ga3">Tanah dan Bangunan</a>
                <a class="dropdown-item" href="/grafik/sekretariat/ga4">Perpustakaan</a>
            </div>
        </div>

        <!-- KATEGORI DATA KEBAHASAAN -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Kebahasaan
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/grafik/kebahasaan/gb1">Kamus/Ensiklopedia</a>
                <a class="dropdown-item" href="/grafik/kebahasaan/gb2">Jurnal/Majalah</a>
                <a class="dropdown-item" href="/grafik/kebahasaan/gb3">Terbitan Umum</a>
                <a class="dropdown-item" href="/grafik/kebahasaan/gb4">Penyuluhan</a>
            </div>
        </div>

        <!-- KATEGORI DATA KESASTRAAN -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Kesastraan
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/grafik/kesastraan/gc1">Bengkel Sastra dan Bahasa</a>
            </div>
        </div>

        <!-- KATEGORI DATA KOMUNITAS -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Komunitas
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/grafik/komunitas/gd1">Komunitas Bahasa dan Sastra</a>
            </div>
        </div>

        <!-- KATEGORI DATA PENELITIAN -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Penelitian
                </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/grafik/penelitian/ge1">Penelitian</a>
            </div>
        </div>
    </div>

@endsection