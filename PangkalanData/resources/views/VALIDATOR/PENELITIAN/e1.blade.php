@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

<div class="isi-konten">

    <div class="judul">
        <th>VALIDASI DATA PENELITIAN</th>
    </div>

    <div class="ketjudul" style="margin-top:0px ;">
        <th>Klik ✅ untuk Memilih Data yang akan divalidasi</th>
        <br>
        <th>Kemudian Klik Tombol "Validasi Data" untuk Melakukan Validasi</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center; margin-top:3px;">
        <div class="btn-group kategori">
            <button type="button" class="btn btn-primary" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                EXPORT TO PDF 
            </button>
        </div>
        
        <div class="btn-group kategori">
            <button onclick="VALIDATOR()" id="valid" type="button" class="btn btn-warning" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                PILIH SEMUA <span id="uncheck" style="display:inline">⬜</span> <span id="check" style="display:none">✅</span> 
            </button>
        </div>

        <div class="btn-group kategori">
            <button type="button" class="btn btn-success" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                VALIDASI DATA
            </button>
        </div>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
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
                    <th>MEDIA</th>
                    <th>EDIT</th>
                    <th>VALIDASI</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($penelitian as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-modal">Edit</button>
                        </td>
                        <td>{{ $a -> tanggal_awal}}</td>
                        <td>{{ $a -> tanggal_akhir}}</td>
                        <td>{{ $a -> unit}}</td>
                        <td>{{ $a -> judul}}</td>
                        <td>{{ $a -> peneliti}}</td>
                        <td>{{ $a -> abstrak}}</td>
                        <td>{{ $a -> lama_penelitian}}</td>
                        <td>{{ $a -> publikasi}}</td>
                        <td>{{ $a -> tahun_terbit}}</td>
                        <td>{{ $a -> file}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="14" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>

</div>


@endsection