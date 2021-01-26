@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">
    <div class="judul">
        <th>INPUT DATA MUSIKALISASI PUISI PROVINSI</th>
    </div>

  <div class="wrapper">
      <div class="form">

        <div class="inputfield-select">
            <label>Provinsi*</label>
            <div class="custom_select">
              <select>
                <option value="">-- Pilih Provinsi--</option>
                <option value="">Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="inputfield-kecil">
            <label>Tahun</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Pemenang I</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Pemenang II</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Pemenang III</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Favorit</label>
            <input type="text" class="input">
        </div>     

        <div class="inputfield">
            <label>Keterangan</label>
            <textarea class="textarea"></textarea>
        </div> 

        <div class="">
            <label style="font-weight:bold; font-style:italic;">* Data WAJIB diisi</label>
          </div>

        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="submit" value="Simpan" class="inputan">
        </div>         
        
      </div>
  </div>

@endsection