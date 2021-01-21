@extends('PARTIAL.indexV')

@section('content')

<div class="menu">
        <!-- KATEGORI SEKRETARIAT -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sekretariat
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/media/sekretariat/ma1">Kerja Sama</a>
                <a class="dropdown-item" href="/media/sekretariat/ma2">Tanah dan Bangunan</a>
            </div>
        </div>

        <!-- KATEGORI DATA KEBAHASAAN -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Kebahasaan
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/media/kebahasaan/mb1">Kamus/Ensiklopedia</a>
                <a class="dropdown-item" href="/media/kebahasaan/mb2">Jurnal/Majalah</a>
                <a class="dropdown-item" href="/media/kebahasaan/mb3">Terbitan Umum</a>
                <a class="dropdown-item" href="/media/kebahasaan/mb4">Penyuluhan</a>
                <a class="dropdown-item" href="/media/kebahasaan/mb5">Penghargaan Bahasa</a>
                <a class="dropdown-item" href="/media/kebahasaan/mb6">Duta Bahasa Nasional</a>
                <a class="dropdown-item" href="/media/kebahasaan/mb7">Duta Bahasa Provinsi</a>
            </div>
        </div>

        <!-- KATEGORI DATA KESASTRAAN -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Kesastraan
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/media/kesastraan/mc1">Bengkel Sastra dan Bahasa</a>
                <a class="dropdown-item" href="/media/kesastraan/mc2">Penghargaan Sastra</a>
                <a class="dropdown-item" href="/media/kesastraan/mc3">Musikalisasi Puisi Nasional</a>
                <a class="dropdown-item" href="/media/kesastraan/mc4">Musikalisasi Puisi Provinsi</a>
            </div>
        </div>

        <!-- KATEGORI DATA PENELITIAN -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Penelitian
                </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/media/penelitian/me1">Penelitian</a>
            </div>
        </div>
    </div>

    <div class="judul">
        <th>MEDIA DATA PENGHARGAAN SATRA</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center">
        <!-- KATEGORI SEKRETARIAT -->
        <div class="btn-group kategori">
            <button  type="button" class="btn btn-info" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                KEMBALI KE MENU
            </button>
        </div>
    </div>

    <div class="ketjudul">
        <th>PR SEARCH BAR</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>UNGGAH</th>
                    <th>MEDIA</th>
                    <th>KATEGORI</th>
                    <th>TAHUN</th>
                    <th>DESKRIPSI</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td>Anugerah Tokoh Kesastraan</td>
                    <td>2017</td>
                    <td>Penerima Prasidatama 2017

 

Tokoh bahasa dan sastra Indonesia
Penerima: Sosiawan Leak untuk

Nomine: Handry Tm dan Mukti Sutarman Espe

Tokoh bahasa dan sastra Jawa
Penerima: Triman Laksana

Nomine: Sucipto Hadi Purnomo dan Hadi Utomo

Tokoh penggiat bahasa dan sastra Indonesia
Penerima: Bandung Mawardi

Nomine: Bandung Mawardi dan Adin Hysteria

Penggiat bahasa dan sastra
Penerima: Jawa Sayuti Anggoro

Nomine: RMA Sudijatmana dan Wanto Tirto
Pendidik peduli bahasa dan sastra
Penerima: S. Prasetyo Uyomo

Nomine: Sawali Tuhu Setya dan Sus S.Hardjono
Penggiat sastra panggung 
Penerima: Gigok Anurogo

Nomine: Thomas Haryanto Sukiran dan Eko Tunas</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>

    </div>

    

@endsection