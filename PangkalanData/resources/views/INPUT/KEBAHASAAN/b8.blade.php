@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

@if (session('status'))
    <div id="flash" data-url="{{ URL('operator/edit/kebahasaan/duta_bahasa_provinsi')}}" data-flash="{{ session('status') }}"></div>
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
    <th>INPUT DATA DUTA BAHASA PROVINSI</th>
    
    <div class="import-input">
      <h6>Klik "IMPORT EXCEL" untuk memasukkan data menggunakan file excel.</h6>
      <button loc="{{ asset('/Template/Template Duta Bahasa Provinsi.xlsx')}}" href="{{url('/import/kebahasaan/duta_bahasa_provinsi')}}" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
        <i style="margin-right: 4px" class="fa fa-upload" aria-hidden="true"></i>
        IMPORT EXCEL
      </button>
    </div>
    
  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="{{url('/operator/input/kebahasaan/duta_bahasa_provinsi')}}" method="POST" enctype="multipart/form-data">
          @csrf

        <div class="inputfield">
            <label>Provinsi</label>
            <input readonly type="text" value="Jawa Tengah" class="input">
        </div> 
        <!-- <div class="alert-danger">{{ $errors->first('provinsi') }}</div>
        <div class="inputfield-select">
            <label>Asal Provinsi*</label>
            <div class="custom_select">
              <select name="provinsi">
                <option value="Jawa Tengah">Jawa Tengah</option>
              </select>
            </div>
        </div>  -->

        <div class="alert-danger">{{ $errors->first('tahun') }}</div>
        <div class="inputfield">
            <label>Tahun</label>
            <input name="tahun" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_1_1') }}</div>
        <div class="inputfield">
            <label>Pemenang I (1)</label>
            <input name="pemenang_1_1" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_1_2') }}</div>
        <div class="inputfield">
            <label>Pemenang I (2)</label>
            <input name="pemenang_1_2" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_2_1') }}</div>
        <div class="inputfield">
            <label>Pemenang II (1)</label>
            <input name="pemenang_2_1" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_2_2') }}</div>
        <div class="inputfield">
            <label>Pemenang II (2)</label>
            <input name="pemenang_2_2" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_3_1') }}</div>
        <div class="inputfield">
            <label>Pemenang III (1)</label>
            <input name="pemenang_3_1" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_3_2') }}</div>
        <div class="inputfield">
            <label>Pemenang III (2)</label>
            <input name="pemenang_3_2" type="text" class="input">
        </div>

        <div class="alert-danger">{{ $errors->first('favorit_1') }}</div>
        <div class="inputfield">
            <label>Favorit 1</label>
            <input name="favorit_1" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('favorit_2') }}</div>
        <div class="inputfield">
            <label>Favorit 2</label>
            <input name="favorit_2" type="text" class="input">
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

</div>
@endsection