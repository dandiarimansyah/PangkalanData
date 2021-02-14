{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')

<div class="isi-konten">

  <div class="judul">
    <th>PILIH DATA PENGHARGAAN BAHASA YANG AKAN DITAMPILKAN</th>
  </div>

  <div class="wrapper">
      <div class="form">
        <form action="{{ URL('/laporan/kebahasaan/penghargaan_nasional/tampil')}}" method="GET">
            @csrf

        <div class="inputfield-select">
            <label>Berdasarkan Kategori</label>
            <div class="custom_select">
              <select name="kategori">
                <option disabled="disabled" selected="selected" value="">-- Pilih Kategori --</option>
                <option value="Anugerah Toko Kebahasaan">Anugerah Toko Kebahasaan</option>
                <option value="Adibahasa">Adibahasa</option>
                <option value="Taruna Bahasa">Taruna Bahasa</option>
                <option value="Wajah Bahasa">Wajah Bahasa</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('tahun') }}</div>
        <div class="inputfield-kecil">
          <label>Berdasarkan Tahun</label>
          <input name="tahun" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Berdasarkan Deskripsi</label>
            <input name="deskripsi" type="text" class="input">
        </div> 
        
        <div class="tombol">
          <input type="submit" value="Tampilkan" class="inputan">
        </div> 

        </form>
    
      </div>
  </div>	

</div>

@endsection
