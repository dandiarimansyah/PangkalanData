@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

    <div class="judul">
        <th>VALIDASI DATA KOMUNITAS SASTRA</th>
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
                    <th>NO</th>
                    <th>EDIT</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>KECAMATAN</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>PROVINSI</th>
                    <th>KOORDINAT</th>
                    <th>KETERANGAN</th>
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
                </tr>
            </tbody>
        </table>

    </div>

    

@endsection