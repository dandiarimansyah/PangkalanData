@extends('PARTIAL.indexV')

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

    <div class="import-input">
      <h6>Klik "IMPORT EXCEL" untuk memasukkan data menggunakan file excel.</h6>
      <button loc="{{ asset('/Template/Template Pesuluh.xlsx')}}" href="/import/kebahasaan/pesuluh" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
        IMPORT EXCEL
      </button>
    </div>

  </div>

  <p style="text-align: center; font-size:15px">Silahkan Pilih Data Penyuluhan Terlebih Dahulu</p>
  
  <!-- TABLE -->
  <div class="validasi">
    <table class="content-table" id="datatable">
        <thead>
            <tr>
                <th>NO</th>
                <th>PROVINSI</th>
                <th>KABUPATEN/KOTA</th>
                <th>TANGGAL</th>
                <th>KEGIATAN</th>
                <th>NARASUMBER</th>
                <th>SASARAN</th>
                <th>JUMLAH</th>
                <th>MATERI</th>
                <th>MEDIA</th>
                <th>PILIH</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($penyuluhan as $key => $a)
                <tr>
                    <td>{{ $key + 1}}</td>
                    <td>{{ $a -> provinsi}}</td>
                    <td>{{ $a -> kota}}</td>
                    <td>{{ $a -> tanggal_awal}} - {{ $a -> tanggal_akhir}}</td>
                    <td>{{ $a -> nama_kegiatan}}</td>
                    <td>{{ $a -> narasumber}}</td>
                    <td>{{ $a -> sasaran}}</td>
                    <td>{{ $a -> jumlah_peserta}}</td>
                    <td>{{ $a -> materi}}</td>
                    <td>{{ $a -> media}}</td>
                    
                    <td style="display: flex; justify-content:center">
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