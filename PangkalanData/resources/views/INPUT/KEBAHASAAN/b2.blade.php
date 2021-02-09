@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

@if ($errors->any())
        <div class="error">
            <p>----- Pesan Error -----</p>
        @foreach ($errors->all() as $error)
            <div class="errors">
            {{ $error }}
            </div>
        @endforeach
        </div>
    @endif

  <div class="judul">
    <th>INPUT JURNAL/MAJALAH</th>
  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/kebahasaan/jurnal_majalah" method="POST" enctype="multipart/form-data">
          @csrf

        <div class="alert-danger">{{ $errors->first('kategori') }}</div>
        <div class="inputfield-select">
            <label>Kategori*</label>
            <div class="custom_select">
              <select name="kategori">
                <option value="JURNAL">JURNAL</option>
                <option value="MAJALAH">MAJALAH</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('judul') }}</div>
        <div class="inputfield">
            <label>Judul*</label>
            <input name="judul" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('tim_redaksi') }}</div>
        <div class="inputfield">
            <label>Tim Redaksi*</label>
            <input name="tim_redaksi" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('volume') }}</div>
        <div class="inputfield">
            <label>Volume</label>
            <input name="volume" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('no_issn') }}</div>
        <div class="inputfield">
            <label>No.ISSN</label>
            <input name="no_issn" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('lingkup') }}</div>
        <div class="inputfield-select">
            <label>Lingkup*</label>
            <div class="custom_select">
              <select name="lingkup">
                <option value="DAERAH">DAERAH</option>
                <option value="NASIONAL">NASIONAL</option>
                <option value="INTERNASIONAL">INTERNASIONAL</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('penerbit') }}</div>
        <div class="inputfield">
            <label>Penerbit</label>
            <input name="penerbit" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('tahun_terbit') }}</div>
        <div class="inputfield">
            <label>Tahun Terbit</label>
            <input name="tahun_terbit" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Keterangan</label>
            <textarea name="keterangan" class="textarea"></textarea>
        </div>  

        <div class="alert-danger">{{ $errors->first('info_produk') }}</div>
        <div class="inputfield-select">
            <label>Info Produk</label>
            <div class="custom_select">
              <select name="info_produk">
                <option selected disabled value="">--Pilih Info--</option>
                <option value="Produk Pusat">Produk Pusat</option>
                <option value="Produk Balai/Kantor">Produk Balai/Kantor</option>
                <option value="Produk Luar">Produk Luar</option>
              </select>
            </div>
        </div> 

        <div class="inputfield-kecil">
          <label for="">Unggah Media</label>
          <input type="file" name="media">
        </div>
        
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

</div>
@endsection