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
            <label>Jumlah Pegawai Laki-Laki</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Jumlah Pegawai Perempuan</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Jumlah Pegawai Keseluruhan</label>
            <input type="text" class="input">
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