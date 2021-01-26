@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

    <div class="judul">
      <th>INPUT BENGKEL SASTRA DAN BAHASA</th>
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
  
          <div class="inputfield">
              <label>Kabupaten/Kota*</label>
              <input type="text" class="input">
          </div> 
  
          <div class="inputfield">
              <label>Nama Kegiatan</label>
              <input type="text" class="input">
          </div> 

          <div class="inputfield-date">
            <label>Tanggal Awal Pelaksanaan</label>
            <input type="date" class="input">
        </div> 

        <div class="inputfield-date">
            <label>Tanggal Akhir Pelaksanaan</label>
            <input type="date" class="input">
        </div> 
  
        <div class="inputfield">
            <label>Pemateri</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield-kecil">
            <label>Jumlah Peserta</label>
            <input type="text" class="input">
            <p>Orang</p>
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