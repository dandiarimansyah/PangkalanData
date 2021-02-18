@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuData')

<div class="isi-konten">

    <div class="judul">
        <th>DATA BALAI BAHASA JAWA TENGAH</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table kanan">
            <thead>
                <tr>
                    <th colspan="3">Data yang belum tervalidasi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td style="font-weight:bold">Sekretariat</td>
                    <td style="text-align:left">Tanah dan Bangunan</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td style="font-weight:bold">Data Kebahasaan</td>
                    <td style="text-align:left">Penyuluhan</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td style="font-weight:bold">Data Kesastraan</td>
                    <td style="text-align:left">Penghargaan Sastra</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td style="font-weight:bold">Data Komunitas</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td style="font-weight:bold">Data Penelitian</td>
                    <td style="text-align:left">Penelitian</td>
                    <td>8</td>

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
                    <td style="font-weight:bold">Sekretariat</td>
                    <td style="text-align:left">Anggaran</td>
                    <td>{{$Anggaran}}</td>
                    <td>{{$Anggaran_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Realisasi Anggaran</td>
                    <td>{{$Realisasi_Anggaran}}</td>
                    <td>{{$Realisasi_Anggaran_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Kepegawaian</td>
                    <td>{{$Kepegawaian}}</td>
                    <td>{{$Kepegawaian_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Kerja Sama</td>
                    <td>{{$Kerja_Sama}}</td>
                    <td>{{$Kerja_Sama_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Tanah Bangunan</td>
                    <td>{{$Tanah_Bangunan}}</td>
                    <td>{{$Tanah_Bangunan_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Perpustakaan</td>
                    <td>{{$Perpustakaan}}</td>
                    <td>{{$Perpustakaan_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Inventarisasi BMN</td>
                    <td>{{$Inventarisasi}}</td>
                    <td>{{$Inventarisasi_V}}</td>
                </tr>

                <tr>
                    <td style="font-weight:bold">Data Kebahasaan</td>
                    <td style="text-align:left">Kamus/Ensiklopedia</td>
                    <td>{{$Kamus}}</td>
                    <td>{{$Kamus_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Jurnal/Majalah</td>
                    <td>{{$Jurnal}}</td>
                    <td>{{$Jurnal_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Terbitan Umum</td>
                    <td>{{$Terbitan_Umum}}</td>
                    <td>{{$Terbitan_Umum_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Penyuluhan</td>
                    <td>{{$Penyuluhan}}</td>
                    <td>{{$Penyuluhan_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Pesuluh</td>
                    <td>{{$Pesuluh}}</td>
                    <td>{{$Pesuluh_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Penghargaan Bahasa</td>
                    <td>{{$Penghargaan_Bahasa}}</td>
                    <td>{{$Penghargaan_Bahasa_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Duta Bahasa Nasional</td>
                    <td>{{$Duta_Nasional}}</td>
                    <td>{{$Duta_Nasional_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Duta Bahasa Provinsi</td>
                    <td>{{$Duta_Provinsi}}</td>
                    <td>{{$Duta_Provinsi_V}}</td>
                </tr>
                <tr>
                    <td>{{}}</td>
                    <td>{{}}</td>
                    <td style="font-weight:bold">143</td>
                    <td style="font-weight:bold">84</td>
                </tr>

                <tr>
                    <td style="font-weight:bold">Data Kesastraan</td>
                    <td style="text-align:left">Bengkel Satra</td>
                    <td>{{$Bengkel_Sastra_Dan_Bahasa}}</td>
                    <td>{{$Bengkel_Sastra_Dan_Bahasa_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Penghargaan Satra</td>
                    <td>{{$Penghargaan_Sastra}}</td>
                    <td>{{$Penghargaan_Sastra_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Musikalisasi Puisi Nasional</td>
                    <td>{{$Musikalisasi_Puisi_Nasional}}</td>
                    <td>{{$Musikalisasi_Puisi_Nasional_V}}</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="text-align:left">Musikalisasi Puisi Provinsi</td>
                    <td>{{$Musikalisasi_Puisi_Provinsi}}</td>
                    <td>{{$Musikalisasi_Puisi_Provinsi_V}}</td>
                </tr>
                <tr>
                    <td>{{}}</td>
                    <td>{{}}</td>
                    <td style="font-weight:bold">30</td>
                    <td style="font-weight:bold">27</td>
                </tr>
            
                <tr>
                    <td style="font-weight:bold">Data Komunitas</td>
                    <td style="text-align:left">Komunitas Bahasa dan Sastra</td>
                    <td>{{$Komunitas_Bahasa}}</td>
                    <td>{{$Komunitas_Bahasa_V}}</td>
                </tr>
                <tr>
                    <td>{{}}</td>
                    <td>{{}}</td>
                    <td style="font-weight:bold">392</td>
                    <td style="font-weight:bold">392</td>
                </tr>

                <tr>
                    <td style="font-weight:bold">Data Penelitian</td>
                    <td style="text-align:left">Penelitian</td>
                    <td>{{$Penelitian}}</td>
                    <td>{{$Penelitian_V}}</td>
                </tr>
                <tr>
                    <td>{{}}</td>
                    <td>{{}}</td>
                    <td style="font-weight:bold">255</td>
                    <td style="font-weight:bold">247</td>
                </tr>

                <tr class="total">
                    <td colspan="2">TOTAL</td>
                    <td>{{$Total}}</td>
                    <td>{{$Total_V}}</td>
                </tr>

        </table>
    </div>
</div>

@endsection