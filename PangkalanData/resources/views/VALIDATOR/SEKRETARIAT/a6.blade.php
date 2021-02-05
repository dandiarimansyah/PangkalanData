@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

<div class="isi-konten">

    <div class="judul">
        <th>VALIDASI DATA PERPUSTAKAAN</th>
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
                    <th>TANGGAL DIPERBAHARUI</th>
                    <th>PROVINSI</th>
                    <th>UNIT KERJA</th>
                    <th>JUMLAH BUKU</th>
                    <th>JUMLAH JUDUL</th>
                    <th>JENIS</th>
                    <th>JUMLAH PENGUNJUNG</th>
                    <th>SUMBER DATA</th>
                    <th>EDIT</th>
                    <th>VALIDASI</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($perpustakaan as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td></td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> unit}}</td>
                        <td>{{ $a -> jumlah_buku}}</td>
                        <td>{{ $a -> jumlah_judul}}</td>
                        <td>{{ $a -> jenis_buku}}</td>
                        <td>{{ $a -> jumlah_pengunjung}}</td>
                        <td>{{ $a -> sumber_data}}</td>

                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit" data-toggle="modal" data-target="#edit-modal">Edit</button>
                        </td>
                        <td>
                            <a class="hapus" href="{{ url('/operator/edit/sekretariat/anggaran/hapus/' . $a->id) }}" data-toggle="tooltip" id="pesan">Validasi</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="16" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>
           

        </table>

    </div>

</div>


@endsection