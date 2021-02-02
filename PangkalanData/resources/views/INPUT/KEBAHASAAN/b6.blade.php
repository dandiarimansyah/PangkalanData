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

        <div class="inputfield-select">
            <label>Kategori*</label>
            <div class="custom_select">
              <select>
                <option value="">-- Pilih Kategori --</option>
                <option value="">Anugerah Toko Kebahasaan</option>
                <option value="">Adibahasa</option>
                <option value="">Taruna Bahasa</option>
                <option value="">Wajah Bahasa</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Tahun</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Deskripsi</label>
            <textarea class="textarea"></textarea>
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