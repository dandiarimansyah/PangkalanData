@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

<div class="isi-konten">

    <div class="judul">
        <th>VALIDASI DATA INVENTARISASI BARANG MILIK NEGARA</th>
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
                    <th rowspan="2">TANGGAL DIPERBAHARUI</th>
                    <th rowspan="2">BALAI/KANTOR</th>
                    <th rowspan="2">TAHUN ANGGARAN</th>
                    <th colspan="8">ELEKTRONIK</th>
                    <th rowspan="2">FURNITURE</th>
                    <th colspan="3">KENDARAAN</th>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">EDIT</th>
                    <th rowspan="2">VALIDASI</th>
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

                @forelse ($inventarisasi as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td></td>
                        <td>{{ $a -> unit}}</td>
                        <td></td>
                        <td>{{ $a -> laptop}}</td>
                        <td>{{ $a -> komputer}}</td>
                        <td>{{ $a -> printer}}</td>
                        <td>{{ $a -> fotocopy}}</td>
                        <td>{{ $a -> faximili}}</td>
                        <td>{{ $a -> LCD}}</td>
                        <td>{{ $a -> TV}}</td>
                        <td>{{ $a -> lain}}</td>
                        <td>{{ $a -> furniture}}</td>
                        <td>{{ $a -> roda_dua}}</td>
                        <td>{{ $a -> roda_empat}}</td>
                        <td>{{ $a -> roda_enam}}</td>

                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit" data-toggle="modal" data-target="#edit-modal">Edit</button>
                        </td>
                        <td>
                            <a class="hapus" href="{{ url('/operator/edit/sekretariat/anggaran/hapus/' . $a->id) }}" data-toggle="tooltip" id="pesan">Validasi</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="18" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>

</div>


@endsection