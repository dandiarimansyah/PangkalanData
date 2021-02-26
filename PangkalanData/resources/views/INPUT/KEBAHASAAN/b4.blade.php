@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

@if (session('status'))
    <div id="flash" data-url="{{ URL('operator/edit/kebahasaan/penyuluhan')}}" data-flash="{{ session('status') }}"></div>
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
    <th>INPUT DATA PENYULUHAN</th>

    <div class="import-input">
      <h6>Klik "IMPORT EXCEL" untuk memasukkan data menggunakan file excel.</h6>
      <button loc="{{ asset('/Template/Template Penyuluhan.xlsx')}}" href="/import/kebahasaan/penyuluhan" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
        <i style="margin-right: 4px" class="fa fa-upload" aria-hidden="true"></i>
        IMPORT EXCEL
      </button>
    </div>

  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/kebahasaan/penyuluhan" method="POST" enctype="multipart/form-data">
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

        <div class="alert-danger">{{ $errors->first('tanggal_awal') }}</div>
        <div class="inputfield-date">
            <label>Tanggal Awal Pelaksanaan</label>
            <input name="tanggal_awal" type="date" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('tanggal_akhir') }}</div>
        <div class="inputfield-date">
            <label>Tanggal Akhir Pelaksanaan</label>
            <input name="tanggal_akhir" type="date" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('narasumber') }}</div>
        <div class="inputfield">
            <label>Narasumber</label>
            <input name="narasumber" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('sasaran') }}</div>
        <div class="inputfield">
            <label>Sasaran</label>
            <input name="sasaran" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('jumlah_peserta') }}</div>
        <div class="inputfield">
            <label>Jumlah Peserta</label>
            <input name="jumlah_peserta" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('materi') }}</div>
        <div class="inputfield">
            <label>Materi</label>
            <textarea name="materi" class="textarea"></textarea>
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