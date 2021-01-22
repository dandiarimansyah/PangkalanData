@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

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