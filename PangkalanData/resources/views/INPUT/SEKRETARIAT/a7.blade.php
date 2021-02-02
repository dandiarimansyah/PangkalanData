@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA INVENTARISASI BARANG MILIK NEGARA</th>
  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/sekretariat/inventarisasi_bmn" method="POST">
          @csrf

        <div class="inputfield-select">
            <label>Unit/Satuan Kerja*</label>
            <div class="custom_select">
              <select>
                <option value="">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Tahun Anggaran*</label>
            <input type="text" class="input">
        </div> 

        <div class="row">
            <div class="col">
                <div class="inputfield" style="margin: 25px 0 0 0; font-weight:bold" >
                    <label >Barang Elektronik</label>
                </div> 
                
                <div class="inputfield-list">
                    <li> <label>Laptop</label> </li>
                    <input type="text" class="input">
                </div> 

                <div class="inputfield-list">
                    <li> <label>Komputer</label> </li>
                    <input type="text" class="input">
                </div> 
            
                <div class="inputfield-list">
                    <li> <label>Printer</label> </li>
                    <input type="text" class="input">
                </div> 

                <div class="inputfield-list">
                    <li> <label>Fotocopy</label> </li>
                    <input type="text" class="input">
                </div> 

                <div class="inputfield-list">
                    <li> <label>Faximili</label> </li>
                    <input type="text" class="input">
                </div> 

                <div class="inputfield-list">
                    <li> <label>LCD Projector</label> </li>
                    <input type="text" class="input">
                </div> 

                <div class="inputfield-list">
                    <li> <label>TV</label> </li>
                    <input type="text" class="input">
                </div> 

                <div class="inputfield-list">
                    <li> <label>Lain-Lain</label> </li>
                    <input type="text" class="input">
                </div> 
            </div>

            <div class="col">
                <div class="inputfield" style="margin: 25px 0 0 0; font-weight:bold" >
                    <label >Furniture/Meubelair</label>
                </div> 
                <div class="inputfield-list">
                    <li> <label>Jumlah Furniture</label> </li>
                    <input type="text" class="input">
                </div> 

                <div class="inputfield" style="margin: 25px 0 0 0; font-weight:bold" >
                    <label >Kendaraan</label>
                </div> 

                <div class="inputfield-list">
                    <li> <label>Roda Dua</label> </li>
                    <input type="text" class="input">
                </div> 

                <div class="inputfield-list">
                    <li> <label>Roda Empat</label> </li>
                    <input type="text" class="input">
                </div> 

                <div class="inputfield-list">
                    <li> <label>Roda Enam</label> </li>
                    <input type="text" class="input">
                </div> 
            </div>
        </div>
        

        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="submit" value="Simpan" class="inputan">
        </div> 
        
        </form>

        <label style="font-weight:bold; font-style:italic;">Data dengan tanda * WAJIB diisi</label>
        
          <!-- 
            
        <div class="inputfield">
            <label>Keterangan</label>
            <textarea class="textarea"></textarea>
        </div>   
        

            <div class="inputfield">
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