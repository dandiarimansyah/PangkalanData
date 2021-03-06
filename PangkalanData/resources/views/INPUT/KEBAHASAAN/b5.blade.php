@extends('PARTIAL.indexV')

@section('style')
<style>
    .content-table th, .content-table td {
        padding: 10px 8px 10px 8px !important;
        max-width: 170px !important;
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
@endsection

@section('content')

@include('PARTIAL.MenuInput')

@if (session('status'))
    <div id="flash" data-url="{{ URL('operator/edit/kebahasaan/pesuluh')}}" data-flash="{{ session('status') }}"></div>
@endif

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
    <th>INPUT DATA PESULUH</th>

    {{-- <div class="import-input">
      <h6>Klik "IMPORT EXCEL" untuk memasukkan data menggunakan file excel.</h6>
      <button loc="{{ asset('/Template/Template Pesuluh.xlsx')}}" href="{{url('/import/kebahasaan/pesuluh')}}" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
        <i style="margin-right: 4px" class="fa fa-upload" aria-hidden="true"></i>
        IMPORT EXCEL
      </button>
    </div> --}}

  </div>

  <p style="text-align: center; font-size:18px">Silahkan Pilih Data Penyuluhan Terlebih Dahulu</p>
  
  <div class="import-input">
    <h6>Klik "IMPORT EXCEL" untuk memasukkan data menggunakan file excel.</h6>
    <button loc="{{ asset('/Template/Template Pesuluh.xlsx')}}" href="/import/kebahasaan/pesuluh" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
      <i style="margin-right: 4px" class="fa fa-upload" aria-hidden="true"></i>
      IMPORT EXCEL
    </button>
  </div>

  <!-- TABLE -->
  <div class="validasi">
    <table class="content-table" id="datatable">
        <thead>
            <tr>
                <th>NO</th>
                <th style="width: 80px">KODE PENYULUHAN</th>
                <th>KABUPATEN/KOTA</th>
                <th>TANGGAL</th>
                <th>KEGIATAN</th>
                <th>NARASUMBER</th>
                <th>SASARAN</th>
                <th>JUMLAH</th>
                <th>MATERI</th>
                <th>DOKUMEN</th>
                <th>PILIH</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($penyuluhan as $key => $a)
                <tr>
                    <td>{{ $key + 1}}</td>
                    <td>{{ $a -> id}}</td>
                    <td>{{ $a -> kota}}</td>
                    <td>{{ $a -> tanggal_awal}} - {{ $a -> tanggal_akhir}}</td>
                    <td>{{ $a -> nama_kegiatan}}</td>
                    <td>{{ $a -> narasumber}}</td>
                    <td>{{ $a -> sasaran}}</td>
                    <td>{{ $a -> jumlah_peserta}}</td>
                    <td>{{ $a -> materi}}</td>
                    <td>
                        @if ($a->media == "")
                        <div style="margin:5px auto">
                            <p style="font-size: 12px">Tidak ada Dokumen</p>
                        </div>
                        @else
                            <a target="_blank" type="button" class="btn btn-sm btn-success" href="{{ Storage::url($a->media) }}">Dokumen</a>
                        @endif
                    </td>
                    
                    <td>
                        <a class="edit" href="{{ url('/operator/input/kebahasaan/pesuluh/' . $a->id) }}" data-toggle="tooltip">Pilih</a>
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