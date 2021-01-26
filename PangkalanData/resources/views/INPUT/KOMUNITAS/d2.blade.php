@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">
    <div class="judul">
        <th>INPUT KOMUNITAS SASTRA</th>
    </div>

  <div class="wrapper">
      <div class="form">

        <div class="inputfield">
            <label>Nama Komunitas</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield-select">
            <label>Provinsi*</label>
            <div class="custom_select">
              <select>
                <option value="">-- Pilih Provinsi--</option>
                <option value="">Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="inputfield-select">
            <label>Kabupaten/Kota*</label>
            <div class="custom_select">
              <select>
                <option value="">-- Pilih Kabupaten/Kota--</option>
                <option value="">Kabupaten Cilacap</option>
                <option value="">Kabupaten Banyumas</option>
                <option value="">Kabupaten Purbalingga</option>
                <option value="">Kabupaten Banjarnegara</option>
                <option value="">Kabupaten Kebumen</option>
                <option value="">Kabupaten Purworejo</option>
                <option value="">Kabupaten Wonosobo</option>
                <option value="">Kabupaten Magelang</option>
                <option value="">Kabupaten Boyolali</option>
                <option value="">Kabupaten Klaten</option>
                <option value="">Kabupaten Sukoharjo</option>
                <option value="">Kabupaten Wonogiri</option>
                <option value="">Kabupaten Karanganyar</option>
                <option value="">Kabupaten Sragen</option>
                <option value="">Kabupaten Grobogan</option>
                <option value="">Kabupaten Blora</option>
                <option value="">Kabupaten Rembang</option>
                <option value="">Kabupaten Pati</option>
                <option value="">Kabupaten Kudus</option>
                <option value="">Kabupaten Jepara</option>
                <option value="">Kabupaten Demak</option>
                <option value="">Kabupaten Semarang</option>
                <option value="">Kabupaten Temanggung</option>
                <option value="">Kabupaten Kendal</option>
                <option value="">Kabupaten Batang</option>
                <option value="">Kabupaten Pekalongan</option>
                <option value="">Kabupaten Pemalang</option>
                <option value="">Kabupaten Tegal</option>
                <option value="">Kabupaten Brebes</option>
                <option value="">Kota Magelang</option>
                <option value="">Kota Surakarta</option>
                <option value="">Kota Salatiga</option>
                <option value="">Kota Semarang</option>
                <option value="">Kota Pekalongan</option>
                <option value="">Kota Tegal</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Kecamatan</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Alamat</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield-kecil">
            <label>Koordinat</label>
            <input type="text" class="input" style="width: 200px">
            <a href="https://www.google.co.id/maps">Buka Maps</a>
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

@endsection