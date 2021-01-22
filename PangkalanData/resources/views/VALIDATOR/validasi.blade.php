@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

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
                    <td></td>
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

                <tr class="total">
                    <td colspan="2">TOTAL</td>
                    <td>255</td>
                    <td>247</td>
                </tr>

        </table>
    </div>

    

@endsection