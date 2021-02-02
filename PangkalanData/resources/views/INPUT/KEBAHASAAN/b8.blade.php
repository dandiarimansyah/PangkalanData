@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA DUTA BAHASA PROVINSI</th>
  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/sekretariat/duta_bahasa_provinsi" method="POST">
          @csrf

        <div class="alert-danger">{{ $errors->first('asal_provinsi') }}</div>
        <div class="inputfield-select">
            <label>Asal Provinsi*</label>
            <div class="custom_select">
              <select name="asal_provinsi">
                <option value="">-- Pilih Kategori --</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('tahun') }}</div>
        <div class="inputfield">
            <label>Tahun</label>
            <input name="tahun" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_1') }}</div>
        <div class="inputfield">
            <label>Pemenang I (1)</label>
            <input name="pemenang_1" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_12') }}</div>
        <div class="inputfield">
            <label>Pemenang I (2)</label>
            <input name="pemenang_12" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_2') }}</div>
        <div class="inputfield">
            <label>Pemenang II (1)</label>
            <input name="pemenang_2" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_22') }}</div>
        <div class="inputfield">
            <label>Pemenang II (2)</label>
            <input name="pemenang_22" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_3') }}</div>
        <div class="inputfield">
            <label>Pemenang III (1)</label>
            <input name="pemenang_3" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_32') }}</div>
        <div class="inputfield">
            <label>Pemenang III (2)</label>
            <input name="pemenang_32" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Keterangan</label>
            <textarea class="textarea"></textarea>
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