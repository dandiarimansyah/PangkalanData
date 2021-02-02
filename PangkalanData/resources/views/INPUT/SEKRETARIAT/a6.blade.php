@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA PERPUSTAKAAN</th>
  </div>
  <div class="judul">
    <th>MASIH BELUM SELESAI Input jenis buku</th>
  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/sekretariat/perpustakaan" method="POST">
          @csrf

        <div class="alert-danger">{{ $errors->first('provinsi') }}</div>
        <div class="inputfield-select">
            <label>Provinsi*</label>
            <div class="custom_select">
              <select name="provinsi">
                <option value="Jawa Tengah">Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('unit') }}</div>
        <div class="inputfield-select">
            <label>Unit Kerja*</label>
            <div class="custom_select">
              <select name="unit">
                <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('jumlah_buku') }}</div>
        <div class="inputfield">
            <label>Jumlah Buku</label>
            <input name="jumlah_buku" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('jumlah_judul') }}</div>
        <div class="inputfield">
            <label>Jumlah Judul</label>
            <input name="jumlah_judul" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('jenis_buku') }}</div>
        <div class="inputfield-select">
            <label>Jenis Buku**</label>
            <div class="custom_select">
              <select name="jenis_buku">
                <option disabled="disabled" selected="selected" value="">-- Pilih --</option>
                <option value="Umum">Umum</option>
                <option value="Karya Sastra">Karya Sastra</option>
                <option value="Kritik Sastra">Kritik Sastra</option>
                <option value="Umum">Umum</option>
                <option value="Teori Sastra/Bahasa">Teori Sastra/Bahasa</option>
                <option value="Kamus">Kamus</option>
                <option value="Ensiklopedia">Ensiklopedia</option>
                <option value="Lain-lain">Lain-lain</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label></label>
            <textarea name="" class="textarea"></textarea>
        </div>   

        <div class="alert-danger">{{ $errors->first('jumlah_pengunjung') }}</div>
        <div class="inputfield">
            <label>Jumlah Pengunjung</label>
            <input name="jumlah_pengunjung" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('sumber_data') }}</div>
        <div class="inputfield">
            <label>Sumber Data</label>
            <input name="sumber_data" type="text" class="input">
        </div> 
      
        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="submit" value="Simpan" class="inputan">
        </div> 
        
        </form>

        <div class="">
          <label style="font-weight:bold; font-style:italic;">Data dengan tanda * WAJIB diisi</label>
        </div>
        
        <div class="">
            <label style="font-weight:bold;">** Gunakan tanda koma jika lebih dari satu</label>
        </div>
        
      </div>
  </div>	

</div>
@endsection