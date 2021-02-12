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
        <th>LAPORAN DATA KERJA SAMA</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TANGGAL KERJA SAMA</th>
                    <th>UNIT/SATUAN KERJA</th>
                    <th>INSTANSI</th>
                    <th>KATEGORI</th>
                    <th>NO. KERJA SAMA</th>
                    <th>PERIHAL</th>
                    <th>KETERANGAN</th>
                    <th>DITANDATANGANI</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>
                            Mulai: {{ \Carbon\Carbon::parse($a->tanggal_awal)->format('d-m-Y')}} 
                            <br> 
                            @if ($a -> tanggal_akhir == null)
                                Berakhir: - </td>
                            @else
                                Berakhir: {{ \Carbon\Carbon::parse($a->tanggal_akhir)->format('d-m-Y')}}
                            @endif
                        <td>Balai Bahasa Jawa Tengah</td>
                        <td>{{ $a -> instansi}}</td>
                        <td>{{ $a -> kategori}}</td>
                        <td>{{ $a -> nomor}}</td>
                        <td>{{ $a -> perihal}}</td>
                        <td>{{ $a -> keterangan}}</td>
                        <td>1. {{ $a -> ttd_1}} <br>2. {{ $a -> ttd_2}}</td>
                        <!-- <td>{{ $a -> instansi_1}}{{ $a -> instansi_2}}</td> -->

                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-kategori="{{ $a->kategori }}"
                                data-instansi="{{ $a->instansi }}"
                                data-tanggal_awal="{{ $a->tanggal_awal }}"
                                data-tanggal_akhir="{{ $a->tanggal_akhir }}"
                                data-nomor="{{ $a->nomor }}"
                                data-perihal="{{ $a->perihal }}"
                                data-keterangan="{{ $a->keterangan }}"
                                data-ttd_1="{{ $a->ttd_1 }}"
                                data-instansi_1="{{ $a->instansi_1 }}"
                                data-ttd_2="{{ $a->ttd_2 }}"
                                data-instansi_2="{{ $a->instansi_2 }}"
                                data-media="{{ $a->media }}"
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