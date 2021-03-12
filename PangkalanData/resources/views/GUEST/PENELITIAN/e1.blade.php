@extends('PARTIAL.indexV')

<style>
    #more  {display:  none;}

    #abstrak-model .modal-dialog{
        max-width: 1000px !important;
    }

    th.sorting,
    th.sorting_asc,
    th.sorting_desc {
        padding-right: 10px !important;
    }

    th.sorting::before,
    th.sorting::after,
    th.sorting_asc::before,
    th.sorting_asc::after,
    th.sorting_desc::before,
    th.sorting_desc::after {
        content: none !important;
    }
</style>

@section('content')

@include('PARTIAL.MenuData')

<div class="isi-konten">

    <div class="judul">
        <th>DATA PENELITIAN</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TGL.MULAI</th>
                    <th>TGL.SELESAI</th>
                    {{-- <th>UNIT/SATUAN KERJA</th> --}}
                    <th>JUDUL</th>
                    <th>PENELITI</th>
                    <th>KERJA SAMA</th>
                    <th>ABSTRAK</th>
                    <th>LAMA PENELITIAN</th>
                    <th>PUBLIKASI</th>
                    <th>TAHUN TERBIT</th>
                    <!-- <th>MEDIA</th> -->
                </tr>
            </thead>

            <tbody>

                @forelse ($penelitian as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>
                            @if ($a -> tanggal_awal != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_awal)->format('d-m-Y')}}
                            @else
                                -
                            @endif 
                        </td>
                        <td>
                            @if ($a -> tanggal_akhir != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_akhir)->format('d-m-Y')}}
                            @else
                                -
                            @endif 
                        </td>
                        <td>{{ $a -> judul}}</td>
                        <td>{{ $a -> peneliti}}</td>
                        <td>{{ $a -> kerja_sama}}</td>

                        @if (strlen($a->abstrak) > 100)
                            <td style="max-width: 250px; text-align: justify">
                                {{ \Illuminate\Support\Str::limit($a->abstrak, 100, $end='...') }}
                                <span id="dots"></span>
                                <span id="more">{{ substr($a->abstrak, 100) }}</span>
                                <button data-isi="{{ $a -> abstrak}}" id="abstrak_tombol" type="button" data-toggle="modal" data-target="#abstrak-model">Selengkapnya</button>
                            </td>
                        @else
                            <td style="max-width: 250px">{{ $a -> abstrak}}</td>
                        @endif
                        <td>{{ $a -> lama_penelitian}} {{ $a -> tipe_waktu}}</td>
                        <td>{{ $a -> publikasi}}</td>
                        <td>{{ $a -> tahun_terbit}}</td>
                        <!-- <td>{{ $a -> file}}</td> -->
                    </tr>
                @empty
                    <tr>
                        <td colspan="13" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>

@endsection
