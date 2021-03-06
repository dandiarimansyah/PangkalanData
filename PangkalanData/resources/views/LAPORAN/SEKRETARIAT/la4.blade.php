{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')


<div class="isi-konten">

  <div class="judul">
    <th>PILIH DATA KERJA SAMA YANG AKAN DITAMPILKAN</th>
  </div>

  <div class="wrapper">
    <div class="form">
      <form action="{{ URL('/laporan/sekretariat/kerja_sama/tampil')}}" method="GET">
          @csrf

        <div class="inputfield-select">
            <label>Berdasarkan Kategori</label>
            <div class="custom_select">
              <select name="kategori">
                <option selected value="semua">[SEMUA]</option>
                <option value="internal">Internal</option>
                <option value="eksternal">Eksternal</option>
              </select>
            </div>
        </div> 

        <!-- <div class="inputfield-select">
            <label>Berdasarkan Unit/Satuan Kerja</label>
            <div class="custom_select">
              <select>
                <option value="">[SEMUA]</option>
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

        <div class="inputfield">
            <label>Berdasarkan Perihal</label>
            <input name="perihal" type="text" class="input">
        </div> 
        
        <div class="tombol">
          <input type="submit" value="Tampilkan" class="inputan">
        </div> 
        </form>
    
      </div>
  </div>	

</div>

@endsection