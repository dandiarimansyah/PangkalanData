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
        <th>LAPORAN DATA ANGGARAN UNIT/SATUAN KERJA PER TAHUN</th>
    </div>

    @auth
        @if (Auth::user()->level != 'tamu')
            <div class="judul" style="display:flex; justify-content:center; margin-bottom:15px">
                <a href="{{ url("/pdf/sekretariat/anggaran?pilih={$pilih}&tahun_anggaran={$tahun_anggaran}")}}" target="_blank" type="button" class="btn btn-danger" style="border-radius: 5px;margin-right:15px;">
                    EXPORT KE PDF
                </a>
                <a href="{{ url("/excel/sekretariat/anggaran?pilih={$pilih}&tahun_anggaran={$tahun_anggaran}")}}" target="_blank" type="button" class="btn btn-success" style="border-radius: 5px;margin-right:15px;">
                    EXPORT KE EXCEL
                </a>
                <button loc="{{ asset('/Template/Template Anggaran.xlsx')}}" href="/import/sekretariat/anggaran" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
                    IMPORT EXCEL
                </button>
            </div>
        @endif
    @endauth


    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TAHUN ANGGARAN</th>
                    <th>UNIT/SATUAN KERJA</th>
                    <th>NILAI ANGGARAN(Rp.)</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tahun_anggaran}}</td>
                        <td>{{ $a -> unit}}</td>
                        <td class="rupiah" data-nilai="{{ $a->nilai_anggaran }}">{{ $a -> nilai_anggaran}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

    </div>

@endsection
