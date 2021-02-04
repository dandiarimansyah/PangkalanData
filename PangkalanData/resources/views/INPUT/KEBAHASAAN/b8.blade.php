@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA DUTA BAHASA PROVINSI</th>
  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/kebahasaan/duta_bahasa_provinsi" method="POST">
          @csrf

        <div class="alert-danger">{{ $errors->first('asal_provinsi') }}</div>
        <div class="inputfield-select">
            <label>Asal Provinsi*</label>
            <div class="custom_select">
              <select name="asal_provinsi">
                <option disabled="disabled" selected="selected" value="">-- Pilih Kategori --</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
              </select>
            </div>
        </div> 

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