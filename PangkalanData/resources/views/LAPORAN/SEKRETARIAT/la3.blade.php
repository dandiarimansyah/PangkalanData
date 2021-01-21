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

    <div class="judul">
        <th>DATA KEPEGAWAIAN</th>
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
                EXPORT KE MS. EXCEL
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
                    <th rowspan="2">TANGGAL PEMUTAKHIRAN</th>
                    <th rowspan="2">UNIT/SATUAN KERJA</th>
                    <th colspan="3">JUMLAH PEGAWAI</th>
                    <th colspan="7">TINGKAT PENDIDIKAN</th>
                    <th colspan="17">PANGKAT/GOLONGAN</th>
                </tr>
                <tr>
                    <th>K</th>
                    <th>L</th>
                    <th>P</th>
                    <th>S3</th>
                    <th>S2</th>
                    <th>S1</th>
                    <th>D3</th>
                    <th>SMA</th>
                    <th>SMP</th>
                    <th>SD</th>
                    <th>IV/e</th>
                    <th>IV/d</th>
                    <th>IV/c</th>
                    <th>IV/b</th>
                    <th>IV/a</th>
                    <th>III/d</th>
                    <th>III/c</th>
                    <th>III/b</th>
                    <th>III/a</th>
                    <th>II/d</th>
                    <th>II/c</th>
                    <th>II/b</th>
                    <th>II/a</th>
                    <th>I/d</th>
                    <th>I/c</th>
                    <th>I/b</th>
                    <th>I/a</th>
                </tr> 
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
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
                </tr>
            </tbody>
        </table>

    </div>


@endsection