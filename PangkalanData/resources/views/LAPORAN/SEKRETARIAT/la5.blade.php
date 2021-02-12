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

        <form action="{{ URL('/laporan/sekretariat/tanah_dan_bangunan/tampil')}}" method="GET">
          @csrf
          
          <div class="inputfield-select">
            <label>Berdasarkan Status Tanah</label>
            <div class="custom_select">
              <select name="status_tanah">
                <option value="semua">[SEMUA]</option>
                <option value="Milik Sendiri/Kemendikbud">MILIK SENDIRI</option>
                <option value="Milik Pemda">MILIK PEMDA</option>
                <option value="Pinjam Pakai">PINJAM PAKAI</option>
              </select>
            </div>
          </div> 
          
          <div class="inputfield-select">
            <label>Berdasarkan Status Bangunan</label>
            <div class="custom_select">
              <select name="status_bangunan">
                <option value="semua">[SEMUA]</option>
                <option value="Milik Sendiri/Kemendikbud">MILIK SENDIRI</option>
                <option value="Milik Pemda">MILIK PEMDA</option>
                <option value="Sewa Kontrak">SEWA KONTRAK</option>
              </select>
            </div>
          </div> 
          
          <div class="tombol">
            <input type="submit" value="Tampilkan" class="inputan">
          </div> 
        </form>
          
      </div>
    </div>	
    
  </div>

  @endsection