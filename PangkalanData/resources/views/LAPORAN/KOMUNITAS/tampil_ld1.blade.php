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
        <th>LAPORAN DATA KOMUNITAS BAHASA</th>
    </div>
    
    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>KECAMATAN</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>PROVINSI</th>
                    <th>KOORDINAT</th>
                    <th>KETERANGAN</th>
                </tr>
            </thead>
            <tbody>

                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> nama_komunitas}}</td>
                        <td>{{ $a -> alamat}}</td>
                        <td>{{ $a -> kecamatan}}</td>
                        <td>{{ $a -> kota}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> koordinat}}</td>
                        <td>{{ $a -> keterangan}}</td>

                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-nama_komunitas="{{ $a->nama_komunitas }}"
                                data-provinsi="{{ $a->provinsi }}"
                                data-kota="{{ $a->kota }}"
                                data-kecamatan="{{ $a->kecamatan }}"
                                data-alamat="{{ $a->alamat }}"
                                data-koordinat="{{ $a->koordinat }}"
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