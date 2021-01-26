@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">
    <div class="judul">
        <th>INPUT DATA PENGHARGAAN SASTRA</th>
    </div>

  <div class="wrapper">
      <div class="form">

        <div class="inputfield-select">
            <label>Kategori</label>
            <div class="custom_select">
              <select>
                <option value="">-- Pilih Kategori--</option>
                <option value="">Acarya Sastra</option>
                <option value="">Taruna Sastra</option>
                <option value="">Anugrah Tokoh Kesastraan</option>
                <option value="">Sastra Badan Bahasa</option>
                <option value="">Sea Write Awards</option>
                <option value="">Sayembara Menulis</option>
              </select>
            </div>
        </div> 

        <div class="inputfield-kecil">
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
        
        <div class="">
          <label style="font-weight:bold; font-style:italic;">* Data WAJIB diisi</label>
        </div>
        
      </div>
  </div>	

@endsection