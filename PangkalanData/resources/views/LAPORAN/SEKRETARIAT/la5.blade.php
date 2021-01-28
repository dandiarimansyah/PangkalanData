{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')

<div class="isi-konten">

  <div class="judul">
    <th>PILIH DATA INVENTARISASI TANAH DAN BANGUNAN YANG AKAN DITAMPILKAN</th>
  </div>

  <div class="wrapper">
      <div class="form">

        <div class="inputfield-select">
            <label>Berdasarkan Status Tanah</label>
            <div class="custom_select">
              <select>
                <option value="">[SEMUA]</option>
                <option value="">MILIK SENDIRI</option>
                <option value="">MILIK PEMDA</option>
                <option value="">PINJAM PAKAI</option>
              </select>
            </div>
        </div> 

        <div class="inputfield-select">
            <label>Berdasarkan Status Bangunan</label>
            <div class="custom_select">
              <select>
                <option value="">[SEMUA]</option>
                <option value="">MILIK SENDIRI</option>
                <option value="">MILIK PEMDA</option>
                <option value="">PINJAM PAKAI</option>
              </select>
            </div>
        </div> 
        
        <div class="tombol">
          <input type="submit" value="Tampilkan" class="inputan">
        </div> 
    
      </div>
  </div>	

</div>

@endsection