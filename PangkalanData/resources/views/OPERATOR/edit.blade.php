@extends('PARTIAL.indexV')

@section('content')

    <div class="content">
        <header>HALAMAN EDIT</header>
    </div>

    <div class="menu">
        <!-- KATEGORI SEKRETARIAT -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning" aria-haspopup="true" aria-expanded="false">
                Profil Balai/Kantor
            </button>
        </div>

        <!-- KATEGORI DATA KEBAHASAAN -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Kebahasaan
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Kamus/Ensiklopedia</a>
                <a class="dropdown-item" href="#">Jurnal/Majalah</a>
                <a class="dropdown-item" href="#">Terbitan Umum</a>
                <a class="dropdown-item" href="#">Penyuluhan</a>
                <a class="dropdown-item" href="#">Pesuluh</a>
                <a class="dropdown-item" href="#">Penghargaan Bahasa</a>
                <a class="dropdown-item" href="#">Duta Bahasa Nasional</a>
                <a class="dropdown-item" href="#">Duta Bahasa Provinsi</a>
            </div>
        </div>

        <!-- KATEGORI DATA KESASTRAAN -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Kesastraan
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Bengkel Sastra dan Bahasa</a>
                <a class="dropdown-item" href="#">Penghargaan Sastra</a>
                <a class="dropdown-item" href="#">Musikalisasi Puisi Nasional</a>
                <a class="dropdown-item" href="#">Musikalisasi Puisi Provinsi</a>
            </div>
        </div>

        <!-- KATEGORI DATA KOMUNITAS -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Komunitas
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Komunitas Bahasa</a>
                <a class="dropdown-item" href="#">Komunitas Sastra</a>
            </div>
        </div>

        <!-- KATEGORI DATA PENELITIAN -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Penelitian
                </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Penelitian</a>
            </div>
        </div>
    </div>
    
@endsection