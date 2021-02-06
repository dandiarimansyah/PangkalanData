@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuMedia')

<div class="isi-konten">

    <div class="judul">
        <th>MEDIA DATA PENELITIAN</th>
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
                    <th>TGL.MULAI</th>
                    <th>TGL.SELESAI</th>
                    <th>UNIT/SATUAN KERJA</th>
                    <th>JUDUL</th>
                    <th>PENELITI</th>
                    <th>KERJA SAMA</th>
                    <th>ABSTRAK</th>
                    <th>LAMA PENELITIAN</th>
                    <th>PUBLIKASI</th>
                    <th>TAHUN TERBIT</th>
                    <th>MEDIA</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($penelitian as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tanggal_awal}}</td>
                        <td>{{ $a -> tanggal_akhir}}</td>
                        <td>{{ $a -> unit}}</td>
                        <td>{{ $a -> judul}}</td>
                        <td>{{ $a -> peneliti}}</td>
                        <td>{{ $a -> kerja_sama}}</td>
                        <td>{{ $a -> abstrak}}</td>
                        <td>{{ $a -> lama_penelitian}}</td>
                        <td>{{ $a -> publikasi}}</td>
                        <td>{{ $a -> tahun_terbit}}</td>
                        {{-- <td>{{ $a -> media}}</td> --}}
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
                        <td colspan="14" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

    </div>

</div>
    

@endsection