@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA PENYULUHAN</th>
  </div>

  <div class="wrapper">
      <div class="form">

        <div class="inputfield">
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

        <div class="inputfield">
            <label>Tanggal Awal Pelaksanaan</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Tanggal Akhir Pelaksanaan</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>narasumber</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Sasaran</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Jumlah Peserta</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Materi</label>
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

</div>
@endsection