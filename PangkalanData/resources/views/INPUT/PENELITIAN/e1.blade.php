@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">
    <div class="judul">
        <th>INPUT DATA PENELITIAN</th>
    </div>
    <div class="judul">
      <th>MASIH KURANG INPUT FILE</th>
  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/penelitian/penelitian" method="POST">
          @csrf

        <div class="alert-danger">{{ $errors->first('kategori') }}</div>
        <div class="inputfield-select">
            <label>Kategori Penelitian*</label>
            <div class="custom_select">
              <select name="kategori">
                <option value="Bahasa">Bahasa</option>
                <option value="Sastra">Sastra</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('unit') }}</div>
        <div class="inputfield-select">
            <label>Unit/Satuan Kerja*</label>
            <div class="custom_select">
              <select name="unit">
                <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('peneliti') }}</div>
        <div class="inputfield">
            <label>Peneliti*</label>
            <input name="peneliti" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('judul') }}</div>
        <div class="inputfield">
            <label>Judul*</label>
            <textarea name="judul" class="textarea"></textarea>
        </div> 

        <div class="alert-danger">{{ $errors->first('kerja_sama') }}</div>
        <div class="inputfield">
            <label>Kerja Sama</label>
            <input name="kerja_sama" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('tanggal_awal') }}</div>
        <div class="inputfield-date">
            <label>Tanggal Mulai Penelitian</label>
            <input name="tanggal_awal" type="date" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('tanggal_akhir') }}</div>
        <div class="inputfield-date">
            <label>Tanggal Selesai Penelitian</label>
            <input name="tanggal_akhir" type="date" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('lama_penelitian') }}</div>
        <div class="inputfield-kecil">
            <label>Lama Penelitian</label>
            <input type="text" class="input">
            <div class="custom_select" style="margin-left: 30px; width: 120px">
                <select name="lama_penelitian">
                  <option value="Tahun">Tahun</option>
                  <option value="Bulan">Bulan</option>
                  <option value="Minggu">Minggu</option>
                  <option value="Hari">Hari</option>
                </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('publikasi') }}</div>
        <div class="inputfield-select">
            <label>Publikasi</label>
            <div class="custom_select">
              <select name="publikasi">
                <option value="Terbit">Terbit</option>
                <option value="Belum Terbit">Belum Terbit</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('tahun_terbit') }}</div>
        <div class="inputfield-kecil">
            <label>Tahun Terbit</label>
            <input name="tahun_terbit" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('abstrak') }}</div>
        <div class="inputfield">
            <label>Abstrak*</label>
            <textarea name="abstrak" class="textarea"></textarea>
        </div> 

        {{-- FORM INPUT FILE --}}

        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="submit" value="Simpan" class="inputan">
        </div> 

      </form>
        
        <div class="">
            <label style="font-weight:bold; font-style:italic;">Data dengan tanda * WAJIB diisi</label>
          </div>
        
      </div>
  </div>

@endsection