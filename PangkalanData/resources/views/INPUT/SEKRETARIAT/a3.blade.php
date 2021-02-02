@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA KEPEGAWAIAN UNIT/SATUAN KERJA</th>
  </div>
  <div class="judul">
    <th>MASIH BELUM SELESAI</th>
  </div>

  <div class="wrapper">
      <div class="form">

        <form role="form" action="/operator/input/sekretariat/kepegawaian" method="POST">
          @csrf

        <div class="inputfield-select">
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
        
        </form>
        
        <div class="">
          <label style="font-weight:bold; font-style:italic;">Data dengan tanda * WAJIB diisi</label>
        </div>

      </div>
  </div>	

</div>
@endsection