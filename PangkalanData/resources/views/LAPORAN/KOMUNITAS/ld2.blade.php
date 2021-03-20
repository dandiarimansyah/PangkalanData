{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')

<div class="isi-konten">

    <div class="judul">
        <th>PILIH DATA KOMUNITAS SASTRA YANG AKAN DITAMPILKAN</th>
    </div>

    <div class="wrapper">
        <div class="form">
          <form action="{{ URL('/laporan/komunitas/komunitas_sastra/tampil')}}" method="GET">
            @csrf

        {{-- <div class="inputfield-select">
            <label>Berdasarkan Provinsi</label>
            <div class="custom_select">
              <select name="provinsi">
                <option value="Jawa Tengah">Jawa Tengah</option>
                <!-- <option value="">[Semua Provinsi]</option>
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
        </div>  --}}

        <div class="inputfield-select">
            <label>Berdasarkan Kabupaten/Kota</label>
            <div class="custom_select">
              <select>
                <option disabled="disabled" selected="selected" value="">-- Pilih Kabupaten/Kota--</option>
                <option value="Kabupaten Cilacap">Kabupaten Cilacap</option>
                <option value="Kabupaten Banyumas">Kabupaten Banyumas</option>
                <option value="Kabupaten Purbalingga">Kabupaten Purbalingga</option>
                <option value="Kabupaten Banjarnegara">Kabupaten Banjarnegara</option>
                <option value="Kabupaten Kebumen">Kabupaten Kebumen</option>
                <option value="Kabupaten Purworejo">Kabupaten Purworejo</option>
                <option value="Kabupaten Wonosobo">Kabupaten Wonosobo</option>
                <option value="Kabupaten Magelang">Kabupaten Magelang</option>
                <option value="Kabupaten Boyolali">Kabupaten Boyolali</option>
                <option value="Kabupaten Klaten">Kabupaten Klaten</option>
                <option value="Kabupaten Sukoharjo">Kabupaten Sukoharjo</option>
                <option value="Kabupaten Wonogiri">Kabupaten Wonogiri</option>
                <option value="Kabupaten Karanganyar">Kabupaten Karanganyar</option>
                <option value="Kabupaten Sragen">Kabupaten Sragen</option>
                <option value="Kabupaten Grobogan">Kabupaten Grobogan</option>
                <option value="Kabupaten Blora">Kabupaten Blora</option>
                <option value="Kabupaten Rembang">Kabupaten Rembang</option>
                <option value="Kabupaten Pati">Kabupaten Pati</option>
                <option value="Kabupaten Kudus">Kabupaten Kudus</option>
                <option value="Kabupaten Jepara">Kabupaten Jepara</option>
                <option value="Kabupaten Demak">Kabupaten Demak</option>
                <option value="Kabupaten Semarang">Kabupaten Semarang</option>
                <option value="Kabupaten Temanggung">Kabupaten Temanggung</option>
                <option value="Kabupaten Kendal">Kabupaten Kendal</option>
                <option value="Kabupaten Batang">Kabupaten Batang</option>
                <option value="Kabupaten Pekalongan">Kabupaten Pekalongan</option>
                <option value="Kabupaten Pemalang">Kabupaten Pemalang</option>
                <option value="Kabupaten Tegal">Kabupaten Tegal</option>
                <option value="Kabupaten Brebes">Kabupaten Brebes</option>
                <option value="Kota Magelang">Kota Magelang</option>
                <option value="Kota Surakarta">Kota Surakarta</option>
                <option value="Kota Salatiga">Kota Salatiga</option>
                <option value="Kota Semarang">Kota Semarang</option>
                <option value="Kota Pekalongan">Kota Pekalongan</option>
                <option value="Kota Tegal">Kota Tegal</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Berdasarkan Nama Komunitas</label>
            <input name="nama_komunitas" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Berdasarkan Alamat</label>
            <input name="alamat" type="text" class="input">
        </div> 

        <div class="tombol">
          <input type="submit" value="Tampilkan" class="inputan">
        </div> 

        </form>
    
      </div>
  </div>	

</div>

@endsection
