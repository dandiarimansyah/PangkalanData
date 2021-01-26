@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT INVENTARISASI TANAH DAN BANGUNAN BALAI/KANTOR BAHASA</th>
  </div>

  <div class="wrapper">
      <div class="form">

        <div class="inputfield-select">
            <label>	Balai/Kantor*</label>
            <div class="custom_select">
              <select>
                <option value="">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Alamat</label>
            <textarea class="textarea"></textarea>
        </div>  

        <div class="inputfield-select">
            <label>Kondisi Bangunan</label>
            <div class="custom_select">
              <select>
                <option value="">Baik</option>
                <option value="">Rusak Sedang</option>
                <option value="">Rusak Berat</option>
              </select>
            </div>
        </div> 

        <div class="inputfield-select">
            <label>Status Pemerolehan Tanah/Bangunan</label>
            <div class="custom_select">
              <select>
                <option value="">Hibah</option>
                <option value="">Beli</option>
              </select>
            </div>
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