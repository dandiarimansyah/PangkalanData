@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuData')

<div class="isi-konten">

    <div class="judul">
        <th>DATA KAMUS / ENSIKLOPEDIA</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KATEGORI</th>
                    <th>JUDUL</th>
                    <th>EDISI</th>
                    <th>TIM REDAKSI</th>
                    <th>ISBN</th>
                    <th>PENERBIT</th>
                    <th>TAHUN TERBIT</th>
                    <th>LINGKUP</th>
                    <th>KETERANGAN</th>
                    <!-- <th>UNIT/SATKER</th> -->
                    <th>INFO PRODUK</th>
                    <!-- <th>MEDIA</th> -->
                </tr>
            </thead>

            <tbody>

              @forelse ($kamus as $key => $a)
                  <tr>
                      <td>{{ $key + 1}}</td>
                      <td>{{ $a -> kategori}}</td>
                      <td>{{ $a -> judul}}</td>
                      <td>{{ $a -> edisi}}</td>
                      <td>{{ $a -> tim_redaksi}}</td>
                      <td>{{ $a -> no_isbn}}</td>
                      <td>{{ $a -> penerbit}}</td>
                      <td>{{ $a -> tahun_terbit}}</td>
                      <td>{{ $a -> lingkup}}</td>
                      <td>{{ $a -> keterangan}}</td>
                      <td>{{ $a -> info_produk}}</td>
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

