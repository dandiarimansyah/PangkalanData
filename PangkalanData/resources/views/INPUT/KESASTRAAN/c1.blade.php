@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

    <div class="judul">
      <th>INPUT BENGKEL SASTRA DAN BAHASA</th>
    </div>
  
    <div class="wrapper">
        <div class="form">

        <form role="form" action="/operator/input/sekretariat/bengkel_sastra_dan_bahasa" method="POST">
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
  
          <div class="alert-danger">{{ $errors->first('kota') }}</div>
          <div class="inputfield">
              <label>Kabupaten/Kota*</label>
              <input name="kota" type="text" class="input">
          </div> 
  
          <div class="alert-danger">{{ $errors->first('nama_kegiatan') }}</div>
          <div class="inputfield">
              <label>Nama Kegiatan</label>
              <input name="nama_kegiatan" type="text" class="input">
          </div> 

          <div class="alert-danger">{{ $errors->first('tanggal_awal_pelaksanaan') }}</div>
          <div class="inputfield-date">
            <label>Tanggal Awal Pelaksanaan</label>
            <input name="tanggal_awal_pelaksanaan" type="date" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('tanggal_akhir_pelaksanaan') }}</div>
        <div class="inputfield-date">
            <label>Tanggal Akhir Pelaksanaan</label>
            <input name="tanggal_akhir_pelaksanaan" type="date" class="input">
        </div> 
  
        <div class="alert-danger">{{ $errors->first('pemateri') }}</div>
        <div class="inputfield">
            <label>Pemateri</label>
            <input name="pemateri" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('jumlah_peserta') }}</div>
        <div class="inputfield-kecil">
            <label>Jumlah Peserta</label>
            <input name="jumlah_peserta" type="text" class="input">
            <p>Orang</p>
        </div> 

        <div class="alert-danger">{{ $errors->first('jumlah_sekolah') }}</div>
        <div class="inputfield-kecil">
            <label>Jumlah Sekolah</label>
            <input name="jumlah_sekolah" type="text" class="input">
            <p>Sekolah</p>
        </div> 

        <div class="alert-danger">{{ $errors->first('jumlah_sekolah_yang_dibina') }}</div>
        <div class="inputfield-kecil">
            <label>Jumlah Sekolah yang Dibina</label>
            <input name="jumlah_sekolah_yang_dibina" type="text" class="input">
            <p>Sekolah</p>
        </div> 
        
        <div class="alert-danger">{{ $errors->first('nama_sekolah_yang_dibina') }}</div>
        <div class="inputfield">
            <label>Nama Sekolah yang Dibina</label>
            <textarea name="nama_senama_sekolah_yang_dibinakolah_dibina" class="textarea"></textarea>
        </div> 

        <div class="alert-danger">{{ $errors->first('aktivitas') }}</div>
        <div class="inputfield">
            <label>Aktivitas</label>
            <textarea name="aktivitas" class="textarea"></textarea>
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