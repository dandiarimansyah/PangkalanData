@extends('PARTIAL.indexV')

@section('content')

    <div class="menu">
        <!-- KATEGORI SEKRETARIAT -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Sekretariat
            </button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Anggaran</a>
                <a class="dropdown-item" href="#">Realisasi Anggaran</a>
                <a class="dropdown-item" href="#">Kepegawaian</a>
                <a class="dropdown-item" href="#">Kerja Sama</a>
                <a class="dropdown-item" href="#">Tanah dan Bangunan</a>
                <a class="dropdown-item" href="#">Perpustakaan</a>
                <a class="dropdown-item" href="#">Invetarisasi BMN</a>
            </div>
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

    <div class="judul">
        <th>VALIDASI DATA</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th colspan="2">Data yang belum tervalidasi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td style="font-weight:bold">Data Kebahasaan</td>
                    <td>Penyuluhan: 59</td>
                </tr>
                <tr>
                    <td style="font-weight:bold">Data Kesastraan</td>
                    <td>Penghargaan Sastra: 3</td>
                </tr>
                <tr>
                    <td style="font-weight:bold">Data Komunitas</td>
                </tr>
                <tr>
                    <td style="font-weight:bold">Data Penelitian</td>
                    <td>Penelitian: 8</td>
                </tr>
            </tbody>
        </table>

        <!-- TABLE -->
        <table class="content-table kanan">
            <thead>
                <tr>
                    <th>Kategori</th>
                    <th>Jenis Data</th>
                    <th>Data Terinput</th>
                    <th>Data Tervalidasi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td style="font-weight:bold">Data Kebahasaan</td>
                    <td style="text-align:left">Kamus/Ensiklopedia</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Jurnal/Majalah</td>
                    <td>11</td>
                    <td>11</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Terbitan Umum</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Penyuluhan</td>
                    <td>127</td>
                    <td>68</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Pesuluh</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Penghargaan Bahasa</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Duta Bahasa Nasional</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Duta Bahasa Provinsi</td>
                    <td>5</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="font-weight:bold">143</td>
                    <td style="font-weight:bold">84</td>
                </tr>

                <tr>
                    <td style="font-weight:bold">Data Kesastraan</td>
                    <td style="text-align:left">Bengkel Satra</td>
                    <td>23</td>
                    <td>23</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Penghargaan Satra</td>
                    <td>3</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Musikalisasi Puisi Nasional</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Musikalisasi Puisi Provinsi</td>
                    <td>4</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="font-weight:bold">30</td>
                    <td style="font-weight:bold">27</td>
                </tr>
            
                <tr>
                    <td style="font-weight:bold">Data Komunitas</td>
                    <td style="text-align:left">Komunitas Bahasa dan Sastra</td>
                    <td>392</td>
                    <td>392</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="font-weight:bold">392</td>
                    <td style="font-weight:bold">392</td>
                </tr>

                <tr>
                    <td style="font-weight:bold">Data Penelitian</td>
                    <td style="text-align:left">Penelitian</td>
                    <td>255</td>
                    <td>247</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="font-weight:bold">255</td>
                    <td style="font-weight:bold">247</td>
                </tr>

                <tr>
                    <td></td>
                    <td style="font-weight:bold">TOTAL</td>
                    <td style="font-weight:bold">255</td>
                    <td style="font-weight:bold">247</td>
                </tr>

        </table>
    </div>

    

@endsection