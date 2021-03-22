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
        <button onclick="back()" type="button" class="btn">
            <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
            <span>KEMBALI</span>
        </button>
    </div>

    <div class="judul">
        <th>LAPORAN DATA KAMUS / ENSIKLOPEDIA</th>
    </div>

    @auth
        @if (Auth::user()->level != 'tamu')
    <div class="judul" style="display:flex; justify-content:center">
        <a href="{{ url("/pdf/kebahasaan/kamus_ensiklopedia?info_produk={$info_produk}&judul={$judul}&tim_redaksi={$tim_redaksi}&kategori={$kategori}")}}" target="_blank" type="button" class="btn btn-danger" style="border-radius: 5px;margin-right:15px;">
            <i style="margin-right: 4px" class="fa fa-file-pdf-o" aria-hidden="true"></i>
            EXPORT KE PDF
        </a>
        <a href="{{ url("/excel/kebahasaan/kamus_ensiklopedia?info_produk={$info_produk}&judul={$judul}&tim_redaksi={$tim_redaksi}&kategori={$kategori}")}}" target="_blank" type="button" class="btn btn-success" style="border-radius: 5px;margin-right:15px;">
            <i style="margin-right: 4px" class="fa fa-file-excel-o" aria-hidden="true"></i>
            EXPORT KE EXCEL
        </a>
    </div>
    @endif
    @endauth

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

              @forelse ($data as $key => $a)
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
                      <!-- <td>{{ $a -> tahun_terbit}}</td> -->
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