{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')

<div class="isi-konten">

  <div class="judul">
    <th>PILIH DATA REALISASI ANGGARAN YANG AKAN DITAMPILKAN</th>
  </div>

  <div class="wrapper">
      <div class="form">

        <!-- <div class="inputfield-select">
            <label>Unit/Satuan Kerja*</label>
            <div class="custom_select">
              <select>
                <option value="">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div>  -->

        <div class="inputfield">
            <label>Semua Data</label>
            <input name="" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Berdasarkan Tahun Anggaran</label>
            <input name="nilai_realisasi" type="text" class="input">
        </div>  
        
        <div class="tombol">
          <input type="submit" value="Tampilkan" class="inputan">
        </div> 
    
      </div>
  </div>	

</div>

@endsection
