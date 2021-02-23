@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

@if (session('status'))
    <div id="flash" data-url="{{ URL('operator/edit/sekretariat/perpustakaan')}}" data-flash="{{ session('status') }}"></div>
@endif

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
    <th>INPUT DATA PERPUSTAKAAN</th>

    <div class="import-input">
      <h6>Klik "IMPORT EXCEL" untuk memasukkan data menggunakan file excel.</h6>
      <button loc="{{ asset('/Template/Template Perpustakaan.xlsx')}}" href="/import/sekretariat/perpustakaan" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
        IMPORT EXCEL
      </button>
    </div>

  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/sekretariat/perpustakaan" method="POST">
          @csrf

      <div class="inputfield">
            <label>Provinsi</label>
            <input readonly type="text" value="Jawa Tengah" class="input">
        </div> 

        <!-- <div class="alert-danger">{{ $errors->first('provinsi') }}</div>
        <div class="inputfield-select">
            <label>Provinsi*</label>
            <div class="custom_select">
              <select name="provinsi">
                <option value="Jawa Tengah">Jawa Tengah</option>
              </select>
            </div>
        </div>  -->

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
              <select name="jenis_buku" onchange='jenis_lain(this.value);'>
                <option disabled="disabled" selected="selected" value="">-- Pilih --</option>
                <option value="Umum">Umum</option>
                <option value="Karya Sastra">Karya Sastra</option>
                <option value="Kritik Sastra">Kritik Sastra</option>
                <option value="Umum">Umum</option>
                <option value="Teori Sastra/Bahasa">Teori Sastra/Bahasa</option>
                <option value="Kamus">Kamus</option>
                <option value="Ensiklopedia">Ensiklopedia</option>
                <option value="Lain">Lain-lain</option>
              </select>
            </div>
        </div>

        <div class="inputfield" style="margin-bottom: 0">
          <label></label>
          <input disabled placeholder="Pilih Lain-Lain" id="a" style='display:block;' type="text" class="input">
        </div> 

        <div class="inputfield" style="margin-top: -8px">
          <label></label>
          <input placeholder="Tuliskan jenis buku..." id="jenis_buku_2" style='display:none;' name="jenis_buku_2" type="text" class="input">
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