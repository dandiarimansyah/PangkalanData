@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">
    <div class="judul">
        <th>INPUT DATA PENELITIAN</th>
    </div>

  <div class="wrapper">
      <div class="form">

        <div class="inputfield-select">
            <label>Kategori Penelitian*</label>
            <div class="custom_select">
              <select>
                <option value="">Bahasa</option>
                <option value="">Sastra</option>
              </select>
            </div>
        </div> 

        <div class="inputfield-select">
            <label>Unit/Satuan Kerja*</label>
            <div class="custom_select">
              <select>
                <option value="">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Peneliti*</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Judul*</label>
            <textarea class="textarea"></textarea>
        </div> 

        <div class="inputfield">
            <label>Kerja Sama</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield-date">
            <label>Tanggal Mulai Penelitian</label>
            <input type="date" class="input">
        </div> 

        <div class="inputfield-date">
            <label>Tanggal Selesai Penelitian</label>
            <input type="date" class="input">
        </div> 

        <div class="inputfield-kecil">
            <label>Lama Penelitian</label>
            <input type="text" class="input">
            <div class="custom_select" style="margin-left: 30px; width: 120px">
                <select>
                <option value="">Tahun</option>
                <option value="">Bulan</option>
                <option value="">Minggu</option>
                <option value="">Hari</option>
                </select>
            </div>
        </div> 

        <div class="inputfield-select">
            <label>Publikasi</label>
            <div class="custom_select">
              <select>
                <option value="">Terbit</option>
                <option value="">Belum Terbit</option>
              </select>
            </div>
        </div> 

        <div class="inputfield-kecil">
            <label>Tahun Terbit</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Abstrak*</label>
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