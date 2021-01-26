@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA KERJA SAMA</th>
  </div>

  <div class="wrapper">
      <div class="form">

        <div class="inputfield">
            <label>Kategori</label>
            <div class="custom_select">
              <select>
                <option value="">Internal</option>
                <option value="">Eksternal</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Nama Instansi*</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Tanggal Kerja sama*</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Tanggal Berakhir</label>
            <input type="text" class="input">
        </div> 
        
        <div class="inputfield">
            <label>No.Kerja sama</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Perihal</label>
            <textarea class="textarea"></textarea>
        </div>   

        <div class="inputfield">
            <label>Keterangan</label>
            <textarea class="textarea"></textarea>
        </div>   

        <div class="inputfield">
            <label>Ditandatangani Oleh (1)</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Instansi (1)</label>
            <div class="custom_select">
              <select>
                <option value="">Badan Pengembangan Bahasa dan Perbukuan</option>
                <option value="">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Ditandatangani Oleh (2)</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Instansi (2)</label>
            <div class="custom_select">
              <select>
                <option value="">Badan Pengembangan Bahasa dan Perbukuan</option>
                <option value="">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="Import" value="Import Ms.Excel" class="import">
          <input type="submit" value="Simpan" class="inputan">
        </div> 
        
        <div class="">
          <label style="font-weight:bold; font-style:italic;">* Data WAJIB diisi</label>
        </div>
        
      </div>
  </div>	

</div>
@endsection