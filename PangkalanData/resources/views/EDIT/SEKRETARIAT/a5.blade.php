@extends('PARTIAL.indexV')

@section('content')

    <div class="menu">
        <!-- KATEGORI SEKRETARIAT -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sekretariat
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/validator/sekretariat/a1">Anggaran</a>
                <a class="dropdown-item" href="/validator/sekretariat/a2">Realisasi Anggaran</a>
                <a class="dropdown-item" href="/validator/sekretariat/a3">Kepegawaian</a>
                <a class="dropdown-item" href="/validator/sekretariat/a4">Kerja Sama</a>
                <a class="dropdown-item" href="/validator/sekretariat/a5">Tanah dan Bangunan</a>
                <a class="dropdown-item" href="/validator/sekretariat/a6">Perpustakaan</a>
                <a class="dropdown-item" href="/validator/sekretariat/a7">Invetarisasi BMN</a>
            </div>
        </div>

        <!-- KATEGORI DATA KEBAHASAAN -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Kebahasaan
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/validator/kebahasaan/b1">Kamus/Ensiklopedia</a>
                <a class="dropdown-item" href="/validator/kebahasaan/b2">Jurnal/Majalah</a>
                <a class="dropdown-item" href="/validator/kebahasaan/b3">Terbitan Umum</a>
                <a class="dropdown-item" href="/validator/kebahasaan/b4">Penyuluhan</a>
                <a class="dropdown-item" href="/validator/kebahasaan/b5">Pesuluh</a>
                <a class="dropdown-item" href="/validator/kebahasaan/b6">Penghargaan Bahasa</a>
                <a class="dropdown-item" href="/validator/kebahasaan/b7">Duta Bahasa Nasional</a>
                <a class="dropdown-item" href="/validator/kebahasaan/b8">Duta Bahasa Provinsi</a>
            </div>
        </div>

        <!-- KATEGORI DATA KESASTRAAN -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Kesastraan
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/validator/kesastraan/c1">Bengkel Sastra dan Bahasa</a>
                <a class="dropdown-item" href="/validator/kesastraan/c2">Penghargaan Sastra</a>
                <a class="dropdown-item" href="/validator/kesastraan/c3">Musikalisasi Puisi Nasional</a>
                <a class="dropdown-item" href="/validator/kesastraan/c4">Musikalisasi Puisi Provinsi</a>
            </div>
        </div>

        <!-- KATEGORI DATA KOMUNITAS -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Komunitas
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/validator/komunitas/d1">Komunitas Bahasa</a>
                <a class="dropdown-item" href="/validator/komunitas/d2">Komunitas Sastra</a>
            </div>
        </div>

        <!-- KATEGORI DATA PENELITIAN -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Data Penelitian
                </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="/validator/penelitian/e1">Penelitian</a>
            </div>
        </div>
    </div>

    <div class="judul">
        <th>VALIDASI DATA INVENTARISASI TANAH DAN BANGUNAN BALAI/KANTOR BAHASA</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center">
        <!-- KATEGORI SEKRETARIAT -->
        <div class="btn-group kategori">
            <button  type="button" class="btn btn-info" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                KEMBALI KE MENU
            </button>
        </div>

        <div class="btn-group kategori">
            <button  type="button" class="btn btn-info" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                CETAK
            </button>
        </div>
    </div>

    <div class="ketjudul">
        <th>Klik CENTANG untuk melakukan validasi data.</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">KOREKSI</th>
                    <th rowspan="2">VALIDASI</th>
                    <th rowspan="2">TANGGAL DATA</th>
                    <th rowspan="2">BALAI/KANTOR</th>
                    <th colspan="2">TANAH</th>
                    <th colspan="2">BANGUNAN</th>
                    <th rowspan="2">KONDISI</th>
                    <th rowspan="2">STATUS PEMEROLEHAN</th>
                    <th rowspan="2">KETERANGAN</th>
                    <th rowspan="2">MEDIA</th>
                </tr>
                <tr>
                    <th>STATUS</th>
                    <th>SERTIFIKAT</th>
                    <th>STATUS</th>
                    <th>IMB</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td>11-12-2018</td>
                    <td>Balai Bahasa Jawa Tengah Jalan Elang raya nomor 1, Mangunharjo, Tembalang, Semarang, Jawa Tengah</td>
                    <td>PINJAM PAKAI</td>
                    <td>TIDAK ADA/-</td>
                    <td>MILIK SENDIRI</td>
                    <td>ADA/ASLI</td>
                    <td>Baik</td>
                    <td>Baik</td>
                    <td>Status tanah pinjam pakai sampai dengan tahun 2021</td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
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