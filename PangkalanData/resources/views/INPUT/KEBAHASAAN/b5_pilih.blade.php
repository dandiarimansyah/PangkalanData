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

    <div class="tombol-kembali">
      <button onclick="back()" type="button" class="btn">
          <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
          <span>KEMBALI</span>
      </button>
  </div>

  <div class="judul">
    <th>INPUT DATA PESULUH</th>

    <div class="import-input">
      <h6>Klik "IMPORT EXCEL" untuk memasukkan data menggunakan file excel.</h6>
      <button loc="{{ asset('/Template/Template Pesuluh.xlsx')}}" href="/import/kebahasaan/pesuluh" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
        <i style="margin-right: 4px" class="fa fa-upload" aria-hidden="true"></i>
        IMPORT EXCEL
      </button>
    </div>
    
    {{-- <div class="import-input">
      <h6>Klik "IMPORT EXCEL" untuk memasukkan data menggunakan file excel.</h6>
      <button loc="{{ url("/excel/kebahasaan/pesuluh_pilih?id_penyuluhan={$id_penyuluhan}")}}" href="/import/kebahasaan/pesuluh" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
        <i style="margin-right: 4px" class="fa fa-upload" aria-hidden="true"></i>
        IMPORT EXCEL
      </button>
    </div> --}}

  </div>

  <div class="wrapper">
    <div class="form">

    <form role="form" action="{{url('/operator/input/kebahasaan/pesuluh/'.$penyuluhan->id)}}" method="POST">
        @csrf

      <div class="inputfield">
          <label>Kode Penyuluhan</label>
          <input readonly type="text" value="{{$penyuluhan->id}}" class="input">
      </div> 

      <div class="inputfield">
          <label>Kabupaten/Kota</label>
          <input readonly type="text" value="{{$penyuluhan->kota}}" class="input">
      </div> 

      <div class="inputfield">
          <label>Tgl Kegiatan</label>
          <input readonly type="text" value="{{$penyuluhan->tanggal_awal}} s.d. {{$penyuluhan->tanggal_akhir}}" class="input">
      </div> 

      <div class="inputfield">
          <label>Kegiatan</label>
          <input readonly type="text" value="{{$penyuluhan->nama_kegiatan}}" class="input">
      </div> 

      <div class="alert-danger">{{ $errors->first('nama') }}</div>
      <div class="inputfield">
          <label>Nama Pesuluh*</label>
          <input name="nama" type="text" class="input">
      </div> 

      <div class="alert-danger">{{ $errors->first('tempat_lahir') }}</div>
      <div class="inputfield">
          <label>Tempat Lahir</label>
          <input name="tempat_lahir" type="text" class="input">
      </div>

      <div class="alert-danger">{{ $errors->first('tanggal_lahir') }}</div>
      <div class="inputfield-date">
          <label>Tanggal Lahir</label>
          <input name="tanggal_lahir" type="date" class="input">
      </div> 

      <div class="alert-danger">{{ $errors->first('instansi') }}</div>
      <div class="inputfield">
          <label>Instansi</label>
          <textarea name="instansi" class="textarea"></textarea>
      </div>  

      <div class="inputfield-select">
        <label>Tingkat</label>
        <div class="custom_select">
          <select name="tingkat">
            <option disabled selected value="--PILIH--">--PILIH--</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
            <option value="Perguruan Tinggi">Perguruan Tinggi</option>
            <option value="Lain-Lain">Lain-Lain</option>
          </select>
        </div>
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