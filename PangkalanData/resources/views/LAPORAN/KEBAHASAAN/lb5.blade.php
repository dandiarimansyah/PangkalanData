{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')

<div class="isi-konten">

  <div class="judul">
    <th>PILIH DATA PESULUH YANG AKAN DITAMPILKAN</th>
  </div>

  <div class="wrapper">
      <div class="form">
        <form action="{{ URL('/laporan/kebahasaan/pesuluh/tampil')}}" method="GET">
            @csrf

      <!-- <div class="inputfield-select">
            <label>Berdasarkan Unit/Satuan Kerja</label>
            <div class="custom_select" style="width: 520px">
              <select>
                <option value="">Badan Pengembangan Bahasa dan Perbukuan</option>
                <option value="">Sekretariat Badan</option>
                <option value="">Pusat Pembinaan</option>
                <option value="">Pusat Pengembangan dan Pelindungan</option>
                <option value="">Pusat Pengembangan Strategi dan Diplomasi Kebahasaan</option>
                <option value="">Pusat Perbukuan</option>
                <option value="">Balai Bahasa Aceh</option>
                <option value="">Balai Bahasa Sumatera Utara</option>
                <option value="">Balai Bahasa Riau</option>
                <option value="">Balai Bahasa Sumatera Barat</option>
                <option value="">Balai Bahasa Sumatera Selatan</option>
                <option value="">Balai Bahasa Yogyakarta</option>
                <option value="">Balai Bahasa Jawa Tengah</option>
                <option value="">Balai Bahasa Sulawesi Tengah</option>
                <option value="">Balai Bahasa Bali</option>
                <option value="">Balai Bahasa Papua</option>
                <option value="">Balai Bahasa Jawa Timur</option>
                <option value="">Balai Bahasa Jawa Barat</option>
                <option value="">Balai Bahasa Kalimantan Barat</option>
                <option value="">Balai Bahasa Kalimantan Selatan</option>
                <option value="">Balai Bahasa Kalimantan Tengah</option>
                <option value="">Balai Bahasa Sulawesi Selatan</option>
                <option value="">Balai Bahasa Sulawesi Utara</option>
                <option value="">Kantor Bahasa Kalimantan Timur</option>
                <option value="">Kantor Bahasa Sulawesi Tenggara</option>
                <option value="">Kantor Bahasa Lampung</option>
                <option value="">Kantor Bahasa Nusa Tenggara Barat</option>
                <option value="">Kantor Bahasa Jambi</option>
                <option value="">Kantor Bahasa Gorontalo</option>
                <option value="">Kantor Bahasa Kepulauan Riau</option>
                <option value="">Kantor Bahasa Nusa Tenggara Timur</option>
                <option value="">Kantor Bahasa Maluku Utara</option>
                <option value="">Kantor Bahasa Kepulauan Bangka Belitung</option>
                <option value="">Kantor Bahasa Banten</option>
                <option value="">Kantor Bahasa Maluku</option>
                <option value="">Kantor Bahasa Bengkulu</option>
              </select>
            </div>
        </div>  -->

        {{-- <div class="inputfield-select">
            <label>Berdasarkan Provinsi*</label>
            <div class="custom_select">
              <select name="provinsi">
                <option value="Jawa Tengah">Jawa Tengah</option>

                {{-- <option value="">[SEMUA]</option>
                <option value="Aceh">Aceh</option>
                <option value="Sumatera Utara">Sumatera Utara</option>
                <option value="Sumatera Barat">Sumatera Barat</option>
                <option value="Bengkulu">Bengkulu</option>
                <option value="Riau">Riau</option>
                <option value="Kepulauan Riau">Kepulauan Riau</option>
                <option value="Jambi">Jambi</option>
                <option value="Sumatera Selatan">Sumatera Selatan</option>
                <option value="Lampung">Lampung</option>
                <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                <option value="DKI Jakarta">DKI Jakarta</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
                <option value="Banten">Banten</option>
                <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                <option value="Jawa Timur">Jawa Timur</option>
                <option value="Kalimantan Barat">Kalimantan Barat</option>
                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                <option value="Bali">Bali</option>
                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                <option value="Sulawesi Barat">Sulawesi Barat</option>
                <option value="Sulawesi Utara">Sulawesi Utara</option>
                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                <option value="Gorontalo">Gorontalo</option>
                <option value="Maluku">Maluku</option>
                <option value="Maluku Utara">Maluku Utara</option>
                <option value="Papua Barat">Papua Barat</option>
                <option value="Papua">Papua</option>
                <option value="Kalimantan Utara">Kalimantan Utara</option>
              </select>
            </div>
        </div>  --}}

        <div class="inputfield-select">
            <label>Berdasarkan Tingkat</label>
            <div class="custom_select">
              <select name="tingkat">
                <option selected value="">[SEMUA]</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="SMK">SMK</option>
                <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                <option value="Lain-Lain">Lain-Lain</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Berdasarkan Nama Pesuluh</label>
            <input name="nama" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Berdasarkan Instansi</label>
            <input name="instansi" type="text" class="input">
        </div> 

        <div class="tombol">
          <input type="submit" value="Tampilkan" class="inputan">
        </div> 
        
        </form>
    
      </div>
  </div>	

</div>

@endsection
