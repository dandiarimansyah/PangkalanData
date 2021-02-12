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
        <th>LAPORAN DATA DUTA BAHASA PROVINSI</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TAHUN</th>
                    <th>PROVINSI</th>
                    <th>PEMENANG I</th>
                    <th>PEMENANG II</th>
                    <th>PEMENANG III</th>
                    <th>FAVORIT</th>
                    <th>KETERANGAN</th>
                    <!-- <th>MEDIA</th> -->
                </tr>
            </thead>

            <tbody>

                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tahun}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>1. {{ $a -> pemenang_1_1}} <br> 2. {{ $a -> pemenang_1_2}}</td>
                        <td>1. {{ $a -> pemenang_2_1}} <br> 2. {{ $a -> pemenang_2_2}}</td>
                        <td>1. {{ $a -> pemenang_3_1}} <br> 2. {{ $a -> pemenang_3_2}}</td>
                        <td>1. {{ $a -> favorit_1}} <br> 2. {{ $a -> favorit_2}}</td>
                        <td>{{ $a -> keterangan}}</td>
                        <!-- <td></td> -->

                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-provinsi="{{ $a->provinsi }}"
                                data-tahun="{{ $a->tahun }}"
                                data-pemenang_1_1="{{ $a->pemenang_1_1 }}"
                                data-pemenang_1_2="{{ $a->pemenang_1_2 }}"
                                data-pemenang_2_1="{{ $a->pemenang_2_1 }}"
                                data-pemenang_2_2="{{ $a->pemenang_2_2 }}"
                                data-pemenang_3_1="{{ $a->pemenang_3_1 }}"
                                data-pemenang_3_2="{{ $a->pemenang_3_2 }}"
                                data-favorit_1="{{ $a->favorit_1 }}"
                                data-favorit_2="{{ $a->favorit_2 }}"
                                data-keterangan="{{ $a->keterangan }}"
                        </td>
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