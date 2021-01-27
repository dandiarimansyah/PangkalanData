@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

    <div class="judul">
        <th>VALIDASI DATA TERBITAN UMUM</th>
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
                    <th>NO</th>
                    <th>EDIT</th>
                    <th>VALIDASI</th>
                    <th>KATEGORI</th>
                    <th>JUDUL</th>
                    <th>PENULIS</th>
                    <th>ISBN</th>
                    <th>TAHUN TERBIT</th>
                    <th>DESKRIPSI FISIK</th>
                    <th>UNIT/SATKER</th>
                    <th>INFO PRODUK</th>
                    <th>MEDIA</th>
                </tr>
            </thead>

            <tbody>
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
                </tr>
            </tbody>
        </table>

    </div>

    

@endsection