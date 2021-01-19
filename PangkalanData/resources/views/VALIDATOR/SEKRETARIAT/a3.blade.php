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
        <th>VALIDASI DATA KEPEGAWAIAN UNIT/SATUAN KERJA</th>
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
                    <th rowspan="2">EDIT</th>
                    <th rowspan="2">VALIDASI</th>
                    <th rowspan="2">TANGGAL DIPERBAHARUI</th>
                    <th rowspan="2">UNIT/SATUAN KERJA</th>
                    <th colspan="3">JUMLAH PEGAWAI</th>
                    <!-- <th>KESELURUHAN</th>
                    <th>LAKI-LAKI</th>
                    <th>PEREMPUAN</th> -->
                    <th colspan="7">TINGKAT PENDIDIKAN</th>
                    <th colspan="17">PANGKAT/GOLONGAN</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td>11-12-2018</td>
                    <td>Balai Bahasa Jawa Tengah</td>
                    <td>47</td>
                    <td>25</td>
                    <td>22</td>
                    <td>1</td>
                    <td>18</td>
                    <td>15</td>
                    <td>2</td>
                    <td>11</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>15</td>
                    <td>14</td>
                    <td>3</td>
                    <td>3</td>
                    <td>3</td>
                    <td>6</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
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