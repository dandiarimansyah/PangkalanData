@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA KERJA SAMA</th>
  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/sekretariat/kerja_sama" method="POST">
          @csrf

        <div class="alert-danger">{{ $errors->first('kategori') }}</div>
        <div class="inputfield-select">
            <label>Kategori</label>
            <div class="custom_select">
              <select name="kategori">
                <option value="Internal">Internal</option>
                <option value="Eksternal">Eksternal</option>
              </select>
            </div>
        </div>

        <div class="alert-danger">{{ $errors->first('nama_instansi') }}</div>
        <div class="inputfield">
            <label>Nama Instansi*</label>
            <input name="instansi" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('tanggal_kerja') }}</div>
        <div class="inputfield">
            <label>Tanggal Kerja sama*</label>
            <input name="tanggal_awal" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('tanggal_akhir') }}</div>
        <div class="inputfield">
            <label>Tanggal Berakhir</label>
            <input name="tanggal_akhir" type="text" class="input">
        </div> 
        
        <div class="alert-danger">{{ $errors->first('no_kerja') }}</div>
        <div class="inputfield">
            <label>No.Kerja sama</label>
            <input name="nomor" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('perihal') }}</div>
        <div class="inputfield">
            <label>Perihal</label>
            <textarea name="perihal" class="textarea"></textarea>
        </div>   

        <div class="inputfield">
            <label>Keterangan</label>
            <textarea name="keterangan" class="textarea"></textarea>
        </div>   

        <div class="alert-danger">{{ $errors->first('ttd_satu') }}</div>
        <div class="inputfield">
            <label>Ditandatangani Oleh (1)</label>
            <input name="ttd_1" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('in_satu') }}</div>
        <div class="inputfield">
            <label>Instansi (1)</label>
            <div class="custom_select" style="width: 100%">
              <select name="instansi_1">
                <option value="Badan Pengembangan Bahasa dan Perbukuan">Badan Pengembangan Bahasa dan Perbukuan</option>
                <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('ttd_dua') }}</div>
        <div class="inputfield">
            <label>Ditandatangani Oleh (2)</label>
            <input name="ttd_2" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('in_dua') }}</div>
        <div class="inputfield">
            <label>Instansi (2)</label>
            <div class="custom_select" style="width: 100%">
              <select name="instansi_2">
                <option value="Badan Pengembangan Bahasa dan Perbukuan">Badan Pengembangan Bahasa dan Perbukuan</option>
                <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="Import" value="Import Ms.Excel" class="import">
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