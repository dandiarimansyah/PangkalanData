@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

<div class="isi-konten">

    <div class="judul">
        <th>VALIDASI DATA TERBITAN UMUM</th>
    </div>

    <div class="ketjudul" style="margin-top:0px ;">
        <th>Klik tombol <b>"Pilih Semua"</b> untuk mencentang semua data</th>
        <br>
        <th>Klik tombol <b>"Validasi Data"</b>  untuk memvalidasi data yang telah dicentang</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center; margin-top:3px;">
        <div class="btn-group kategori">
            <button type="button" class="btn btn-primary" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                EKSPOR KE PDF 
            </button>
        </div>
        
        <div class="pilih_semua">
            <label for="valid">PILIH SEMUA</label>
            <input type='checkbox' id='valid'>
        </div>

        <div class="btn-group kategori">
            <button id="tombol_validasi" type="button" class="btn btn-success" style="border-radius: 5px">
                VALIDASI DATA
            </button>
        </div>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KATEGORI</th>
                    <th>JUDUL</th>
                    <th>PENULIS</th>
                    <th>ISBN</th>
                    <th>TAHUN TERBIT</th>
                    <th>DESKRIPSI FISIK</th>
                    <th>UNIT/SATKER</th>
                    <th>INFO PRODUK</th>
                    <th>MEDIA</th>
                    <th>EDIT</th>
                    <th>VALIDASI</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($terbitan_umum as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> kategori}}</td>
                        <td>{{ $a -> judul}}</td>
                        <td>{{ $a -> penulis}}</td>
                        <td>{{ $a -> no_isbn}}</td>
                        <td>{{ $a -> tahun_terbit}}</td>
                        <td>{{ $a -> deskripsi}}</td>
                        <td>{{ $a -> info_produk}}</td>
                        <td></td>
                        <td></td>
                        
                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit" data-toggle="modal" data-target="#edit-modal">Edit</button>
                        </td>
                        <td>
                            <div class="validate"> 
                            @if ($a -> validasi == "belum")
                            <form action="" method="POST">
                                <input class="check" type="checkbox" value="sudah" name="validasi">
                            </form>
                            @else
                                <p>Tervalidasi</p>
                            @endif
                            </div>
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