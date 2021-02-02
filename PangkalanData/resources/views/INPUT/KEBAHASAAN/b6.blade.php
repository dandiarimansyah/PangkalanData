@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA PENGHARGAAN BAHASA</th>
  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/sekretariat/penghargaan_bahasa" method="POST">
          @csrf

        <div class="alert-danger">{{ $errors->first('kategori') }}</div>
        <div class="inputfield-select">
            <label>Kategori*</label>
            <div class="custom_select">
              <select name="kategori">
                <option value="">-- Pilih Kategori --</option>
                <option value="Anugerah Toko Kebahasaan">Anugerah Toko Kebahasaan</option>
                <option value="Adibahasa">Adibahasa</option>
                <option value="Taruna Bahasa">Taruna Bahasa</option>
                <option value="Wajah Bahasa">Wajah Bahasa</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('tahun') }}</div>
        <div class="inputfield">
            <label>Tahun</label>
            <input name="tahun" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('deskripsi') }}</div>
        <div class="inputfield">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="textarea"></textarea>
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