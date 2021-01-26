@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA DUTA BAHASA PROVINSI</th>
  </div>

  <div class="wrapper">
      <div class="form">

        <div class="inputfield-select">
            <label>Asal Provinsi*</label>
            <div class="custom_select">
              <select>
                <option value="">-- Pilih Kategori --</option>
                <option value="">Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Tahun</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Pemenang I (1)</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Pemenang I (2)</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Pemenang II (1)</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Pemenang II (2)</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Pemenang III (1)</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Pemenang III (2)</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Keterangan</label>
            <textarea class="textarea"></textarea>
        </div>  
        
        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="submit" value="Simpan" class="inputan">
        </div> 
        
        <div class="">
          <label style="font-weight:bold; font-style:italic;">Data dengan tanda * WAJIB diisi</label>
        </div>

      </div>
  </div>	

</div>
@endsection