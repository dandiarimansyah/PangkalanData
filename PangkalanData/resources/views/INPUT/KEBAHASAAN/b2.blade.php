@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT JURNAL/MAJALAH</th>
  </div>

  <div class="wrapper">
      <div class="form">

        <div class="inputfield-select">
            <label>Kategori*</label>
            <div class="custom_select">
              <select>
                <option value="">JURNAL</option>
                <option value="">MAJALAH</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Judul*</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Tim Redaksi*</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Volume</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>No.ISSN</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield-select">
            <label>Lingkup*</label>
            <div class="custom_select">
              <select>
                <option value="">DAERAH</option>
                <option value="">NASIONAL</option>
                <option value="">INTERNASIONAL</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Penerbit</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Tahun Terbit</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Keterangan</label>
            <textarea class="textarea"></textarea>
        </div>  

        <div class="inputfield-select">
            <label>Info Produk</label>
            <div class="custom_select">
              <select>
                <option value="">--Pilih Info--</option>
                <option value="">Produk Pusat</option>
                <option value="">Produk Balai/Kantor</option>
                <option value="">Produk Luar</option>
              </select>
            </div>
        </div> 
        
        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="submit" value="Simpan" class="inputan">
        </div> 
        
        <div class="">
          <label style="font-weight:bold; font-style:italic;">Data dengan tanda * WAJIB diisi</label>
        </div>

      </div>
  </div>	

</div>
@endsection