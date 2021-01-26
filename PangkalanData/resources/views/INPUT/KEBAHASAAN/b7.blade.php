@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA DUTA BAHASA NASIONAL</th>
  </div>

  <div class="wrapper">
      <div class="form">

        <div class="inputfield">
            <label>Asal Provinsi*</label>
            <div class="custom_select">
              <select>
                <option value="">-- Pilih Kategori --</option>
                <option value="">Aceh</option>
                <option value="">Sumatera Utara</option>
                <option value="">Sumatera Barat</option>
                <option value="">Bengkulu</option>
                <option value="">Riau</option>
                <option value="">Kepulauan Riau</option>
                <option value="">Jambi</option>
                <option value="">Sumatera Selatan</option>
                <option value="">Lampung</option>
                <option value="">Kepulauan Bangka Belitung</option>
                <option value="">DKI Jakarta</option>
                <option value="">Jawa Barat</option>
                <option value="">Banten</option>
                <option value="">Jawa Tengah</option>
                <option value="">Daerah Istimewa Yogyakarta</option>
                <option value="">Jawa Timur</option>
                <option value="">Kalimantan Barat</option>
                <option value="">Kalimantan Tengah</option>
                <option value="">Kalimantan Selatan</option>
                <option value="">Bali</option>
                <option value="">Nusa Tenggara Barat</option>
                <option value="">Nusa Tenggara Timur</option>
                <option value="">Sulawesi Barat</option>
                <option value="">Sulawesi Utara</option>
                <option value="">Sulawesi Selatan</option>
                <option value="">Sulawesi Tenggara</option>
                <option value="">Sulawesi Tengah</option>
                <option value="">Gorontalo</option>
                <option value="">Maluku</option>
                <option value="">Maluku Utara</option>
                <option value="">Papua Barat</option>
                <option value="">Papua</option>
                <option value="">Kalimantan Utara</option>
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
          <label style="font-weight:bold; font-style:italic;">* Data WAJIB diisi</label>
        </div>

      </div>
  </div>	

</div>
@endsection