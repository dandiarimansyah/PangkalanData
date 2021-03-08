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

    {{-- <div class="tombol-kembali">
        <button onclick="back()" type="button" class="btn">
            <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
            <span>KEMBALI</span>
        </button>
    </div> --}}

    <div class="judul">
        <th>LAPORAN DATA PERPUSTAKAAN</th>
    </div>

    @auth
        @if (Auth::user()->level != 'tamu')
    <div class="judul" style="display:flex; justify-content:center">
        <a href="{{ url('/pdf/sekretariat/perpustakaan')}}" target="_blank" type="button" class="btn btn-danger" style="border-radius: 5px;margin-right:15px;">
            <i style="margin-right: 4px" class="fa fa-file-pdf-o" aria-hidden="true"></i>
            EXPORT KE PDF
        </a>
        <a href="{{ url('/excel/sekretariat/perpustakaan')}}" target="_blank" type="button" class="btn btn-success" style="border-radius: 5px;margin-right:15px;">
            <i style="margin-right: 4px" class="fa fa-file-excel-o" aria-hidden="true"></i>
            EXPORT KE EXCEL
        </a>
    </div>
    @endif
    @endauth

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TANGGAL DIPERBARUI</th>
                    <th>PROVINSI</th>
                    <!-- <th>UNIT KERJA</th> -->
                    <th>JUMLAH BUKU</th>
                    <th>JUMLAH JUDUL</th>
                    <th>JENIS</th>
                    <th>JUMLAH PENGUNJUNG</th>
                    <th>SUMBER DATA</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> updated_at->format('d-m-Y')}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <!-- <td>{{ $a -> unit}}</td> -->
                        <td>{{ $a -> jumlah_buku}}</td>
                        <td>{{ $a -> jumlah_judul}}</td>
                        <td>{{ $a -> jenis_buku}}</td>
                        <td>{{ $a -> jumlah_pengunjung}}</td>
                        <td>{{ $a -> sumber_data}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="16" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>

@endsection