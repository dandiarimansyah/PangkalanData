@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuMedia')

    <div class="judul">
        <th>MEDIA DATA PENELITIAN</th>
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
                    <th>TGL.MULAI</th>
                    <th>TGL.SELESAI</th>
                    <th>UNIT/SATUAN KERJA</th>
                    <th>JUDUL</th>
                    <th>PENELITI</th>
                    <th>KERJA SAMA</th>
                    <th>ABSTRAK</th>
                    <th>LAMA PENELITIAN</th>
                    <th>PUBLIKASI</th>
                    <th>TAHUN TERBIT</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td>01-02-2017</td>
                    <td>30-11-2017</td>
                    <td>Balai Bahasa Jawa Tengah</td>
                    <td>Kajian Penggunaan Bahasa Media Massa di Jawa Tengah</td>
                    <td>Endro Nugroho Wasono Aji, Sri Wahyuni, Kahar Dwi Prihantono, Inni Inayati Istiana</td>
                    <td></td>
                    <td>...Selengkapnya</td>
                    <td>10 BULAN</td>
                    <td>BELUM TERBIT</td>
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