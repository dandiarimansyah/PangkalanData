@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuData')
    
<div class="isi-konten">

    <div class="judul">
        <th>DATA ANGGARAN UNIT/SATUAN KERJA PER TAHUN</th>
    </div>

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

                @forelse ($anggaran as $key => $a)
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