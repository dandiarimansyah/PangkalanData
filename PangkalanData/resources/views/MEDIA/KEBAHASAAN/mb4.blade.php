@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuMedia')

    <div class="judul">
        <th>MEDIA DATA PENYULUHAN</th>
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
                    <th>PROVINSI</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>TANGGAL</th>
                    <th>KEGIATAN</th>
                    <th>NARASUMBER</th>
                    <th>SASARAN</th>
                    <th>JUMLAH</th>
                    <th>MATERI</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td>Jawa Tengah</td>
                    <td>Kabupaten Klaten</td>
                    <td>16-10-2019 - 03-11-2020</td>
                    <td>Penyuluhan Penggunaan Bahasa Media Massa Kabupaten Klaten</td>
                    <td>1. Drs. Jaka Suwandi, M.M. ; 2. Dr. Tirto Suwondo, M.Hum. ;3. Shintya, M.S.</td>
                    <td>Pejabat struktural di lingkungan Pemerintah Daerah Kabupaten Klaten</td>
                    <td>40 Orang</td>
                    <td>
                        1. Kebijakan Pemerintah Kabupaten Klaten dalam Penggunaan Bahasa Indonesia di Kabupaten Klaten
                        2. Pemaparan Rekomendasi Penggunaan Bahasa Media Massa di Kabupaten Klaten
                        3. Sosialisasi Hasil Pemantauan Penggunaan Bahasa Media Massa di Kabupaten Klaten
                    </td>
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
                </tr>
            </tbody>
        </table>

    </div>

    

@endsection