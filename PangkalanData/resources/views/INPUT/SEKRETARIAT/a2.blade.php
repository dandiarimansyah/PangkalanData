@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA REALISASI ANGGARAN UNIT/SATUAN KERJA</th>
  </div>

  <div class="wrapper">
      <div class="form">

        <div class="inputfield">
            <label>Unit/Satuan Kerja*</label>
            <div class="custom_select">
              <select>
                <option value="">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Nilai Realisasi Hingga</label>
            <input type="text" class="input">
        </div> 
        <div class="inputfield">
            <label>Besarnya Dana Realisasi (Rp.)</label>
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
          <label style="font-weight:bold; font-style:italic;">* Data WAJIB diisi</label>
        </div>

      </div>
  </div>	

</div>
@endsection