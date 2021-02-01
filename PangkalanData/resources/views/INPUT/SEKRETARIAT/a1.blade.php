@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA ANGGARAN UNIT/SATUAN KERJA PER TAHUN</th>
  </div>

  <div class="wrapper">
      <div class="form">
        <form role="form" action="/operator/input/sekretariat/anggaran" method="POST">
          @csrf

        <div class="alert-danger">{{ $errors->first('unit') }}</div>
        <div class="inputfield-select">
            <label>Unit/Satuan Kerja*</label>
            <div class="custom_select">
              <select name="unit">
                <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div>
        
        <div class="alert-danger">{{ $errors->first('tahun_anggaran') }}</div>
        <div class="inputfield">
            <label>Tahun Anggaran*</label>
            <input name="tahun_anggaran" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('nilai_anggaran') }}</div>
        <div class="inputfield">
            <label>Nilai Anggaran (Rp.)</label>
            <input name="nilai_anggaran" type="text" class="input">
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