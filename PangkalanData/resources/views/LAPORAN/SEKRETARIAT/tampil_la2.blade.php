@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')

    <div class="isi-konten">

    @if ($errors->any())
        <div class="error">
            <p>----- Pesan Error -----</p>
        @foreach ($errors->all() as $error)
            <div class="errors">
            {{ $error }}
            </div>
        @endforeach
        </div>
    @endif

    <div class="tombol-kembali">
        <button onclick="back()" type="button" class="btn">
            <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
            <span>KEMBALI</span>
        </button>
    </div>

    <div class="judul">
        <th>LAPORAN DATA REALISASI ANGGARAN UNIT/SATUAN KERJA</th>
    </div>

    <div class="judul" style="display:flex; justify-content:center">
        <a href="{{ url('/pdf/sekretariat/realisasi_anggaran')}}" target="_blank" type="button" class="btn btn-danger" style="border-radius: 5px;margin-right:15px;">
            EXPORT KE PDF
        </a>
        <a href="{{ url('/excel/sekretariat/realisasi_anggaran?data={$data}')}}" target="_blank" type="button" class="btn btn-success" style="border-radius: 5px;margin-right:15px;">
            EXPORT KE EXCEL
        </a>
        <button type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
            IMPORT EXCEL
        </button>
    </div>
    
    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TANGGAL REALISASI</th>
                    <th>UNIT/SATUAN KERJA</th>
                    <th>NILAI REALISASI(Rp.)</th>
                    <th>KETERANGAN</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> nilai_realisasi}}</td>
                        <td>{{ $a -> unit}}</td>
                        <td>{{ $a -> besar_dana}}</td>
                        <td>{{ $a -> keterangan}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

    </div>
    
@endsection