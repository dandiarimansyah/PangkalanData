{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')

<div class="isi-konten">

    <div class="judul">
        <th>PILIH DATA BENGKEL SASTRA DAN BAHASA YANG AKAN DITAMPILKAN</th>
    </div>

    <div class="wrapper">
        <div class="form">
            <form action="{{ URL('/laporan/kesastraan/bengkel_sastra_dan_bahasa/tampil')}}" method="GET">
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
                <option value="">[SEMUA]</option>
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
        </div>  --}}

        <div class="inputfield">
            <label>Berdasarkan Kabupaten/Kota</label>
            <input name="kota" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Berdasarkan Nama Kegiatan</label>
            <input name="nama_kegiatan" type="text" class="input">
        </div> 

        <div class="tombol">
          <input type="submit" value="Tampilkan" class="inputan">
        </div> 

        </form>
    
      </div>
  </div>	

</div>

@endsection
