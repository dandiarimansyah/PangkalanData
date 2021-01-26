@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">
    <div class="judul">
        <th>INPUT DATA MUSIKALISASI PUISI NASIONAL</th>
    </div>

  <div class="wrapper">
      <div class="form">

        <div class="inputfield-kecil">
            <label>Tahun</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Pemenang I</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Pemenang II</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Pemenang III</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Favorit</label>
            <input type="text" class="input">
        </div>     

        <div class="inputfield">
            <label>Keterangan</label>
            <textarea class="textarea"></textarea>
        </div> 

        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="submit" value="Simpan" class="inputan">
        </div> 
        
      </div>
  </div>

@endsection