{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')

<div class="isi-konten">

  <div class="judul">
    <th>PILIH DATA DUTA BAHASA PROVINSI YANG AKAN DITAMPILKAN</th>
  </div>

  <div class="wrapper">
      <div class="form">
        <form action="{{ URL('/laporan/kebahasaan/duta_bahasa_provinsi/tampil')}}" method="GET">
            @csrf

        <div class="inputfield-select">
            <label>Berdasarkan Tahun</label>
            <div class="custom_select">
            <select name="tahun_terbit">
                <option value="semua">[SEMUA]</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
              </select>
            </div>
        </div> 

        <div class="inputfield-select">
            <label>Berdasarkan Provinsi*</label>
            <div class="custom_select">
              <select name="provinsi">
                <option value="Jawa Tengah">Jawa Tengah</option>
                <!-- <option value="">[SEMUA]</option>
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
                <option value="">Kalimantan Utara</option> -->
              </select>
            </div>
        </div> 


        <div class="inputfield">
            <label>Berdasarkan Nama Pemenang</label>
            <input name="pemenang" type="text" class="input">
        </div> 
        
        <div class="tombol">
          <input type="submit" value="Tampilkan" class="inputan">
        </div> 

        </form>
    
      </div>
  </div>	

</div>

@endsection
