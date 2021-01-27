@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

    <div class="judul">
        <th>VALIDASI DATA INVENTARISASI BARANG MILIK NEGARA</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center">
        <div class="btn-group kategori">
            <a type="button" class="btn btn-info" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false" href="/validator/validasi">
                KEMBALI KE MENU VALIDASI
            </a>
        </div>

        <div class="btn-group kategori">
            <button  type="button" class="btn btn-info" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                EXPORT KE PDF
            </button>
        </div>

    </div>

    <div class="ketjudul">
        <th>Klik ✅ untuk Memilih Data yang akan divalidasi</th>
    </div>

    <div class="ketjudul">
        <th>Kemudian Klik Tombol "Validasi Data" untuk Melakukan Validasi</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center; margin-top:3px;">
        <div class="btn-group kategori">
            <button onclick="VALIDATOR()" id="valid" type="button" class="btn btn-warning" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                PILIH SEMUA <span id="uncheck" style="display:inline">⬜</span> <span id="check" style="display:none">✅</span> 
            </button>
            <input type="checkbox">
        </div>

        <div class="btn-group kategori">
            <button type="button" class="btn btn-success" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                VALIDASI DATA
            </button>
            <input type="checkbox">
        </div>
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
                    <th rowspan="2">BALAI/KANTOR</th>
                    <th rowspan="2">TAHUN ANGGARAN</th>
                    <th colspan="8">ELEKTRONIK</th>
                    <th rowspan="2">FURNITURE</th>
                    <th colspan="3">KENDARAAN</th>
                </tr>
                <tr>
                    <th>LAPTOP</th>
                    <th>KOMPUTER</th>
                    <th>PRINTER</th>
                    <th>FOTOCOPY</th>
                    <th>FAXIMILI</th>
                    <th>LCD PROJECTOR</th>
                    <th>TV</th>
                    <th>LAIN-LAIN</th>
                    <th>RODA 2</th>
                    <th>RODA 4</th>
                    <th>RODA 6</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td>11-12-2018</td>
                    <td>Balai Bahasa Provinsi Jawa Tengah</td>
                    <td>2018</td>
                    <td>13</td>
                    <td>46</td>
                    <td>29</td>
                    <td>1</td>
                    <td>1</td>
                    <td>7</td>
                    <td>1</td>
                    <td>0</td>
                    <td>437</td>
                    <td>3</td>
                    <td>1</td>
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
                </tr>
            </tbody>
        </table>

    </div>

    

@endsection