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

    <div class="judul">
        <th>LAPORAN DATA PENYULUHAN</th>
    </div>

    <div class="judul" style="display:flex; justify-content:center">
        <button onclick="back()" type="button" class="btn btn-secondary" style="border-radius: 5px; margin-right:15px; width: 130px">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> 
            KEMBALI
        </button>
        <a href="{{ url('/pdf/kebahasaan/penyuluhan')}}" target="_blank" type="button" class="btn btn-info" style="border-radius: 5px;margin-right:15px;">
            EXPORT KE PDF
        </a>
        <a href="{{ url('/excel/kebahasaan/penyuluhan')}}" target="_blank" type="button" class="btn btn-success" style="border-radius: 5px;margin-right:15px;">
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
                    <th>PROVINSI</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>TANGGAL</th>
                    <th>KEGIATAN</th>
                    <th>NARASUMBER</th>
                    <th>SASARAN</th>
                    <th>JUMLAH</th>
                    <th>MATERI</th>
                    <!-- <th>MEDIA</th> -->
                </tr>
            </thead>

            <tbody>

                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> kota}}</td>
                        <td>
                            @if ($a -> tanggal_awal != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_awal)->format('d-m-Y')}}
                            @else
                                -
                            @endif
                                s.d
                            @if ($a -> tanggal_akhir != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_akhir)->format('d-m-Y')}}
                            @else
                                -
                            @endif 
                        </td>
                        <td>{{ $a -> nama_kegiatan}}</td>
                        <td>{{ $a -> narasumber}}</td>
                        <td>{{ $a -> sasaran}}</td>
                        <td>{{ $a -> jumlah_peserta}}</td>
                        <td>{{ $a -> materi}}</td>

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