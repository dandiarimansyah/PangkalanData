@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

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
    <th>INPUT DATA REALISASI ANGGARAN UNIT/SATUAN KERJA</th>
  </div>

  <div class="wrapper">
      <div class="form">
        <form role="form" action="/operator/input/sekretariat/realisasi_anggaran" method="POST">
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

        <div class="alert-danger">{{ $errors->first('nilai_realisasi') }}</div>
        <div class="inputfield">
            <label>Nilai Realisasi Hingga Tahun</label>
            <input name="nilai_realisasi" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('besar_dana') }}</div>
        <div class="inputfield">
            <label>Besarnya Dana Realisasi (Rp.)</label>
            <input name="besar_dana" type="text" class="input">
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