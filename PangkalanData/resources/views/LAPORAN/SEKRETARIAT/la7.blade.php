{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')

    <div class="tombol-kembali">
        <button onclick="back()" type="button" class="btn">
            <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
            <span>KEMBALI</span>
        </button>
    </div>

    <div class="judul">
        <th>DATA INVENTARISASI BARANG MILIK NEGARA</th>
    </div>

    @auth
        @if (Auth::user()->level != 'tamu')
    <div class="judul" style="display:flex; justify-content:center">
        <a href="{{ url('/pdf/sekretariat/inventarisasi_bmn')}}" target="_blank" type="button" class="btn btn-info" style="border-radius: 5px;margin-right:15px;">
            <i style="margin-right: 4px" class="fa fa-file-pdf-o" aria-hidden="true"></i>
            EXPORT KE PDF
        </a>
        <a href="{{ url('/excel/sekretariat/inventarisasi_bmn')}}" target="_blank" type="button" class="btn btn-success" style="border-radius: 5px;margin-right:15px;">
            <i style="margin-right: 4px" class="fa fa-file-excel-o" aria-hidden="true"></i>
            EXPORT KE EXCEL
        </a>
    </div>
    @endif
    @endauth

    <div class="ketjudul">
        <th>Jumlah : 41 Data</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th rowspan="2">NO</th>
                    <th style="max-width: 90px" rowspan="2">TANGGAL DIPERBARUI</th>
                    <!-- <th rowspan="2">BALAI/KANTOR</th> -->
                    <th style="max-width: 90px" rowspan="2">TAHUN ANGGARAN</th>
                    <th colspan="8">ELEKTRONIK</th>
                    <th rowspan="2">FURNITURE</th>
                    <th colspan="3">KENDARAAN</th>
                    <th rowspan="2">EDIT/HAPUS</th>
                </tr>
                <tr>
                    <th>LAPTOP</th>
                    <th>KOMPUTER</th>
                    <th>PRINTER</th>
                    <th>FOTOCOPY</th>
                    <th>FAXIMILI</th>
                    <th style="max-width: 100px">LCD PROJECTOR</th>
                    <th>TV</th>
                    <th style="max-width: 60px">LAIN-LAIN</th>
                    <th style="max-width: 50px">RODA 2</th>
                    <th style="max-width: 50px">RODA 4</th>
                    <th style="max-width: 50px">RODA 6</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> updated_at->format('d-m-Y')}}</td>
                        <!-- <td>{{ $a -> unit}}</td> -->
                        <td>tahun_anggaran</td>
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

                    </tr>
                @empty
                    <tr>
                        <td colspan="17" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>

@endsection