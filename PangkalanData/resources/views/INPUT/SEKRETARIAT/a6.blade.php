@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA PERPUSTAKAAN</th>
  </div>

  <div class="wrapper">
      <div class="form">

        <div class="inputfield-select">
            <label>Provinsi*</label>
            <div class="custom_select">
              <select>
                <option value="">Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="inputfield-select">
            <label>Unit Kerja*</label>
            <div class="custom_select">
              <select>
                <option value="">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Jumlah Buku</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Jumlah Judul</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield-select">
            <label>Jenis Buku**</label>
            <div class="custom_select">
              <select>
                <option value="">-- Pilih --</option>
                <option value="">Umum</option>
                <option value="">Karya Sastra</option>
                <option value="">Kritik Sastra</option>
                <option value="">Umum</option>
                <option value="">Teori Sastra/Bahasa</option>
                <option value="">Kamus</option>
                <option value="">Ensiklopedia</option>
                <option value="">Lain-lain</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label></label>
            <textarea class="textarea"></textarea>
        </div>   

        <div class="inputfield">
            <label>Jumlah Pengunjung</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Sumber Data</label>
            <input type="text" class="input">
        </div> 
      

        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="submit" value="Simpan" class="inputan">
        </div> 
        
        <div class="">
          <label style="font-weight:bold; font-style:italic;">* Data WAJIB diisi</label>
        </div>
        
        <div class="">
            <label style="font-weight:bold;">** Gunakan tanda koma jika lebih dari satu</label>
        </div>
        
      </div>
  </div>	

</div>
@endsection