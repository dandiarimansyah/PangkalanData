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
        <th>LAPORAN DATA PERPUSTAKAAN</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TANGGAL DIPERBAHARUI</th>
                    <th>PROVINSI</th>
                    <th>UNIT KERJA</th>
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
                        <td>{{ $a -> updated_at->format('m-d-Y')}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> unit}}</td>
                        <td>{{ $a -> jumlah_buku}}</td>
                        <td>{{ $a -> jumlah_judul}}</td>
                        <td>{{ $a -> jenis_buku}}</td>
                        <td>{{ $a -> jumlah_pengunjung}}</td>
                        <td>{{ $a -> sumber_data}}</td>

                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-provinsi="{{ $a->provinsi }}"
                                data-unit="{{ $a->unit }}"
                                data-jumlah_buku="{{ $a->jumlah_buku }}"
                                data-jumlah_judul="{{ $a->jumlah_judul }}"
                                data-jenis_buku_2="{{ $a->jenis_buku_2 }}"
                                data-jenis_buku="{{ $a->jenis_buku }}"
                                data-jumlah_pengunjung="{{ $a->jumlah_pengunjung }}"
                                data-sumber_data="{{ $a->sumber_data }}"
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