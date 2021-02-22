@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

@if (session('status'))
    <div id="flash" data-url="{{ URL('operator/edit/kesastraan/musikalisasi_puisi_provinsi')}}" data-flash="{{ session('status') }}"></div>
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
        <th>INPUT DATA MUSIKALISASI PUISI PROVINSI</th>
    </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/kesastraan/musikalisasi_puisi_provinsi" method="POST" enctype="multipart/form-data">
          @csrf

        <div class="inputfield">
            <label>Provinsi</label>
            <input readonly type="text" value="Jawa Tengah" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('tahun') }}</div>
        <div class="inputfield-kecil">
            <label>Tahun</label>
            <input name="tahun" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_1') }}</div>
        <div class="inputfield">
            <label>Pemenang I</label>
            <input name="pemenang_1" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_2') }}</div>
        <div class="inputfield">
            <label>Pemenang II</label>
            <input name="pemenang_2" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_3') }}</div>
        <div class="inputfield">
            <label>Pemenang III</label>
            <input name="pemenang_3" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('favorit') }}</div>
        <div class="inputfield">
            <label>Favorit</label>
            <input name="favorit" type="text" class="input">
        </div>     

        <div class="inputfield">
            <label>Keterangan</label>
            <textarea name="keterangan" class="textarea"></textarea>
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

@endsection