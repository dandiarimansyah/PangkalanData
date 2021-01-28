@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuMedia')

    <div class="judul">
        <th>MEDIA DATA KERJA SAMA</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center">
        <div class="btn-group kategori">
            <a type="button" class="btn btn-info" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false" href="/media">
                KEMBALI KE MENU MEDIA
            </a>
        </div>
    </div>

    <div class="" style=" display:flex; justify-content:center">
        <div class="input-group" style="width: 30%; padding:20px;">
            <input type="text" class="form-control" placeholder="Cari">
            <div class="input-group-append">
            <button class="btn btn-secondary" type="button">
                <i class="fa fa-search"></i>
            </button>
            </div>
        </div>
    </div>
    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>UNGGAH</th>
                    <th>MEDIA</th>
                    <th>TANGGAL KERJA SAMA</th>
                    <th>UNIT/SATUAN KERJA</th>
                    <th>INSTANSI</th>
                    <th>KATEGORI</th>
                    <th>NO. KERJA SAMA</th>
                    <th>PERIHAL</th>
                    <th>KETERANGAN</th>
                    <th>DITANDATANGANI</th>
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