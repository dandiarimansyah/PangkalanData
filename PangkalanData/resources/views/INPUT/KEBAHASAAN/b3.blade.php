@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT TERBITAN UMUM</th>
  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/kebahasaan/terbitan_umum" method="POST">
          @csrf
          
        <div class="alert-danger">{{ $errors->first('kategori') }}</div>
        <div class="inputfield-select">
            <label>Kategori Terbitan*</label>
            <div class="custom_select">
              <select name="kategori">
                <option value="Bahasa">Bahasa</option>
                <option value="Sastra">Sastra</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('judul') }}</div>
        <div class="inputfield">
            <label>Judul*</label>
            <input name="judul" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('penulis') }}</div>
        <div class="inputfield">
            <label>Penulis</label>
            <input name="penulis" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('no_isbn') }}</div>
        <div class="inputfield">
            <label>No.ISBN</label>
            <input name="no_isbn" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('tahun_terbit') }}</div>
        <div class="inputfield">
            <label>Tahun Terbit</label>
            <input name="tahun_terbit" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('deskripsi') }}</div>
        <div class="inputfield">
            <label>Deskripsi Fisik</label>
            <textarea name="deskripsi" class="textarea"></textarea>
        </div>  

        <div class="alert-danger">{{ $errors->first('info_produk') }}</div>
        <div class="inputfield-select">
            <label>Info Produk</label>
            <div class="custom_select">
              <select name="info_produk">
                <option disabled="disabled" selected="selected" value="">--Pilih Info--</option>
                <option value="Produk Pusat">Produk Pusat</option>
                <option value="Produk Balai/Kantor">Produk Balai/Kantor</option>
                <option value="Produk Luar">Produk Luar</option>
              </select>
            </div>
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