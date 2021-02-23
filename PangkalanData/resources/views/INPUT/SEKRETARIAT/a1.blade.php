@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

@if (session('status'))
    <div id="flash" data-url="{{ URL('operator/edit/sekretariat/anggaran')}}" data-flash="{{ session('status') }}"></div>
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
    <th>INPUT DATA ANGGARAN UNIT/SATUAN KERJA PER TAHUN</th>

    <div class="import-input">
      <h6>Klik "IMPORT EXCEL" untuk memasukkan data menggunakan file excel.</h6>
      <button loc="{{ asset('/Template/Template Anggaran.xlsx')}}" href="/import/sekretariat/anggaran" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
        IMPORT EXCEL
      </button>
    </div>
  </div>
  
  <div class="wrapper">
      <div class="form">
        <form role="form" action="/operator/input/sekretariat/anggaran" method="POST">
          @csrf

        <div class="inputfield">
            <label>Unit/Satuan Kerja</label>
            <input readonly type="text" value="Balai Bahasa Provinsi Jawa Tengah" class="input">
        </div> 
        
        <div class="alert-danger">{{ $errors->first('tahun_anggaran') }}</div>
        <div class="inputfield">
            <label>Tahun Anggaran*</label>
            <input name="tahun_anggaran" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('nilai_anggaran') }}</div>
        <div class="inputfield">
            <label>Nilai Anggaran (Rp.)</label>
            <input name="nilai_anggaran" type="text" class="input">
        </div>  
        
        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="submit" value="Simpan" class="inputan">
        </div>

      </form>
        
        <div class="">
          <label style="font-weight:bold; font-style:italic;">Data dengan tanda * WAJIB diisi</label>
        </div>

      </div>
  </div>	

</div>
@endsection