@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

    <div class="judul">
        <th>EDIT DATA PENGHARGAAN SATRA</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center">
        <div class="btn-group kategori">
            <a  type="button" class="btn btn-info" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false" href="/operator/edit">
                KEMBALI KE MENU EDIT
            </a>
        </div>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>EDIT</th>
                    <th>KATEGORI</th>
                    <th>TAHUN</th>
                    <th>DESKRIPSI</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td>Anugerah Tokoh Kesastraan</td>
                    <td>2017</td>
                    <td>Penerima Prasidatama 2017

 

Tokoh bahasa dan sastra Indonesia
Penerima: Sosiawan Leak untuk

Nomine: Handry Tm dan Mukti Sutarman Espe

Tokoh bahasa dan sastra Jawa
Penerima: Triman Laksana

Nomine: Sucipto Hadi Purnomo dan Hadi Utomo

Tokoh penggiat bahasa dan sastra Indonesia
Penerima: Bandung Mawardi

Nomine: Bandung Mawardi dan Adin Hysteria

Penggiat bahasa dan sastra
Penerima: Jawa Sayuti Anggoro

Nomine: RMA Sudijatmana dan Wanto Tirto
Pendidik peduli bahasa dan sastra
Penerima: S. Prasetyo Uyomo

Nomine: Sawali Tuhu Setya dan Sus S.Hardjono
Penggiat sastra panggung 
Penerima: Gigok Anurogo

Nomine: Thomas Haryanto Sukiran dan Eko Tunas</td>
                </tr>
                <tr>
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