@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT TERBITAN UMUM</th>
  </div>

  <div class="wrapper">
      <div class="form">

        <div class="inputfield">
            <label>Kategori Terbitan*</label>
            <div class="custom_select">
              <select>
                <option value="">Bahasa</option>
                <option value="">Sastra</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Judul*</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Penulis</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>No.ISBN</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Tahun Terbit</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Deskripsi Fisik</label>
            <textarea class="textarea"></textarea>
        </div>  

        <div class="inputfield">
            <label>Info Produk</label>
            <div class="custom_select">
              <select>
                <option value="">--Pilih Info--</option>
                <option value="">Produk Pusat</option>
                <option value="">Produk Balai/Kantor</option>
                <option value="">Produk Luar</option>
              </select>
            </div>
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

</div>
@endsection