{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')

<div class="isi-konten">

  <div class="judul">
    <th>PILIH DATA ANGGARAN YANG AKAN DITAMPILKAN</th>
  </div>

  <div class="wrapper">
      <div class="form">

        <form action="{{ URL('/laporan/sekretariat/anggaran/tampil')}}" method="GET">
          @csrf

        <!-- <div class="inputfield-select">
            <label>Unit/Satuan Kerja*</label>
            <div class="custom_select">
              <select>
                <option value="">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div>  -->

        <div class="inputfield-radio">
          <label  class="label-atas">Pilih :</label>

          <input type="radio" id="semua" name="pilih" value="semua">
          <label for="semua">Semua Data</label>
          
          <input type="radio" id="tahun" name="pilih" value="tahun">
          <label style="width: auto" for="tahun">Berdasarkan Tahun</label>
        </div> 

        <div class="inputfield-kecil">
            <label>Masukkan Tahun</label>
            <input id="tahun_anggaran" name="tahun_anggaran" type="text" class="input">
        </div>  
        
        <div class="tombol">
          <input type="submit" value="Tampilkan" class="inputan">
        </div> 
      </form>
    
      </div>
  </div>	

</div>

@endsection