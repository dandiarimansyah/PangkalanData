@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

@if (session('status'))
    <div id="flash" data-url="{{ URL('operator/edit/kesastraan/penghargaan_sastra')}}" data-flash="{{ session('status') }}"></div>
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
        <th>INPUT DATA PENGHARGAAN SASTRA</th>
    </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/kesastraan/penghargaan_sastra" method="POST" enctype="multipart/form-data">
          @csrf

        <div class="alert-danger">{{ $errors->first('kategori') }}</div>
        <div class="inputfield-select">
            <label>Kategori</label>
            <div class="custom_select">
              <select name="kategori">
                <option disabled="disabled" selected="selected" value="">-- Pilih Kategori--</option>
                <option value="Acarya Sastra">Acarya Sastra</option>
                <option value="Taruna Sastra">Taruna Sastra</option>
                <option value="Anugrah Tokoh Kesastraan">Anugrah Tokoh Kesastraan</option>
                <option value="Sastra Badan Bahasa">Sastra Badan Bahasa</option>
                <option value="Sea Write Awards">Sea Write Awards</option>
                <option value="Sayembara Menulis">Sayembara Menulis</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('tahun') }}</div>
        <div class="inputfield-kecil">
            <label>Tahun</label>
            <input name="tahun" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('deskripsi') }}</div>
        <div class="inputfield">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="textarea"></textarea>
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