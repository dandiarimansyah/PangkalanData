@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuMedia')

<div class="isi-konten">

    <div class="judul">
        <th>MEDIA DATA KERJA SAMA</th>
    </div>

    <div class="" style=" display:flex; justify-content:center">
        <div class="input-group" style="width: 30%; padding:20px;">
            <input type="text" class="form-control" placeholder="Cari">
            <div class="input-group-append">
            <button class="btn btn-secondary" type="button">
                <i class="fa fa-search"></i>
            </button>
            </div>
        </div>
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
                    <th>MEDIA</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($kerja_sama as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>Mulai:{{ $a -> tanggal_awal}} <br> Berakhir:{{ $a -> tanggal_akhir}}  </td>
                        <td>Balai Bahasa Jawa Tengah</td>
                        <td>{{ $a -> instansi}}</td>
                        <td>{{ $a -> kategori}}</td>
                        <td>{{ $a -> nomor}}</td>
                        <td>{{ $a -> perihal}}</td>
                        <td>{{ $a -> keterangan}}</td>
                        <td>1. {{ $a -> ttd_1}} <br>2. {{ $a -> ttd_2}}</td>
                        <!-- <td>{{ $a -> instansi_1}}{{ $a -> instansi_2}}</td> -->

                        <td>
                            @if ($a->media == "")
                                <form role="form" action="" enctype="multipart/form-data">
                                    <input type="file" name="media">
                                </form>
                            @else
                                {{ $a -> media}}
                            @endif
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
</div>

    

@endsection