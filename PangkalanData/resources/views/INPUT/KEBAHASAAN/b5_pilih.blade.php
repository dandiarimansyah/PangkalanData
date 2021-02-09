@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

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
  </div>

  <div class="wrapper">
    <div class="form">

    <form role="form" action="/operator/input/kebahasaan/pesuluh/{{$penyuluhan->id}}" method="POST">
        @csrf

      <div class="inputfield">
          <label>Provinsi</label>
          <input readonly name="kota" type="text" value="{{$penyuluhan->provinsi}}" class="input">
      </div> 

      <div class="inputfield">
          <label>Kabupaten/Kota</label>
          <input readonly name="kota" type="text" value="{{$penyuluhan->kota}}" class="input">
      </div> 

      <div class="inputfield">
          <label>Tgl Kegiatan</label>
          <input readonly name="kota" type="text" value="{{$penyuluhan->tanggal_awal}} s.d. {{$penyuluhan->tanggal_akhir}}" class="input">
      </div> 

      <div class="inputfield">
          <label>Kegiatan</label>
          <input readonly name="kota" type="text" value="{{$penyuluhan->nama_kegiatan}}" class="input">
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