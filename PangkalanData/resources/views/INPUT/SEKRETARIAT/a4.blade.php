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
                <option value="">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Jumlah Pegawai Laki-Laki</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Jumlah Pegawai Perempuan</label>
            <input type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Jumlah Pegawai Keseluruhan</label>
            <input type="text" class="input">
        </div> 


        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="submit" value="Simpan" class="inputan">
        </div> 
        
        <div class="">
          <label style="font-weight:bold; font-style:italic;">* Data WAJIB diisi</label>
        </div>


          <!-- <div class="inputfield">
            <label>Last Name</label>
            <input type="text" class="input">
        </div>  
        <div class="inputfield">
            <label>Password</label>
            <input type="password" class="input">
        </div>  
        <div class="inputfield">
            <label>Confirm Password</label>
            <input type="password" class="input">
        </div> 
        
          <div class="inputfield">
            <label>Email Address</label>
            <input type="text" class="input">
        </div> 
        <div class="inputfield">
            <label>Phone Number</label>
            <input type="text" class="input">
        </div> 
        
        <div class="inputfield">
            <label>Postal Code</label>
            <input type="text" class="input">
        </div>  -->

      </div>
  </div>	

</div>
@endsection