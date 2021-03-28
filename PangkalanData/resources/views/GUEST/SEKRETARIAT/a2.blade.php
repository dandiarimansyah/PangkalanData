@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuData')

    <div class="isi-konten">

    <div class="judul">
        <th>DATA REALISASI ANGGARAN UNIT/SATUAN KERJA</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TAHUN REALISASI</th>
                    <!-- <th>UNIT/SATUAN KERJA</th> -->
                    <th>NILAI REALISASI(Rp.)</th>
                    <th>KETERANGAN</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($realisasi_anggaran as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tahun_realisasi}}</td>
                        <!-- <td>{{ $a -> unit}}</td> -->
                        <td class="rupiah" data-nilai="{{ $a->besar_dana }}">{{ $a -> besar_dana}}</td>
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

</div>
    

@endsection