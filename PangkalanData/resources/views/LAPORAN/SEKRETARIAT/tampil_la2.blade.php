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
        <button onclick="back()" type="button" class="btn btn-primary" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> 
            Kembali
        </button>
    </div>

    <div class="judul">
        <th>LAPORAN DATA REALISASI ANGGARAN UNIT/SATUAN KERJA</th>
    </div>

    {{-- <div class="tombol-kembali">
        <a  type="button" class="btn btn-primary" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false" href="/operator/edit">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> 
            Kembali ke Menu Edit
        </a>
    </div> --}}
    
    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
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