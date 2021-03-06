@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

@if (session('status'))
    <div id="flash" data-url="{{ URL('operator/edit/kesastraan/bengkel_sastra_dan_bahasa')}}" data-flash="{{ session('status') }}"></div>
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
      <th>INPUT BENGKEL SASTRA DAN BAHASA</th>
      
      <div class="import-input">
      <h6>Klik "IMPORT EXCEL" untuk memasukkan data menggunakan file excel.</h6>
      <button loc="{{ asset('/Template/Template Bengkel Sastra dan Bahasa.xlsx')}}" href="{{url('/import/kesastraan/bengkel_sastra_dan_bahasa')}}" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
        <i style="margin-right: 4px" class="fa fa-upload" aria-hidden="true"></i>
        IMPORT EXCEL
      </button>
    </div>

    </div>
  
    <div class="wrapper">
        <div class="form">

        <form role="form" action="{{url('/operator/input/kesastraan/bengkel_sastra_dan_bahasa')}}" method="POST" enctype="multipart/form-data">
          @csrf
  
        <div class="inputfield">
            <label>Provinsi</label>
            <input readonly type="text" value="Jawa Tengah" class="input">
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
            <textarea name="nama_sekolah_yang_dibina" class="textarea"></textarea>
        </div> 

        <div class="alert-danger">{{ $errors->first('aktivitas') }}</div>
        <div class="inputfield">
            <label>Aktivitas</label>
            <textarea name="aktivitas" class="textarea"></textarea>
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