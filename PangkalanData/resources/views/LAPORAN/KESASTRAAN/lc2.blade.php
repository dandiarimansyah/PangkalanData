{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')

<div class="isi-konten">

    <div class="judul">
        <th>PILIH DATA PENGHARGAAN SASTRA YANG AKAN DITAMPILKAN</th>
    </div>

    <div class="wrapper">
        <div class="form">

        <div class="inputfield-select">
            <label>Berdasarkan Kategori</label>
            <div class="custom_select">
                <select>
                <option value="">[SEMUA]</option>
                <option value="">Acarya Sastra</option>
                <option value="">Taruna Sastra</option>
                <option value="">Anugerah Tokoh Kesastraan</option>
                <option value="">Sastra Badan Bahasa</option>
                <option value="">Sea Write Awards</option>
                <option value="">Sayembara Menulis</option>
                <option value="">Musikalisasi Puisi Nasional</option>
                <option value="">Musikalisasi Puisi Provinsi</option>
                </select>
            </div>
        </div> 

        <div class="inputfield-select">
            <label>Berdasarkan Tahun</label>
            <div class="custom_select">
              <select>
                <option value="">[SEMUA]</option>
                <option value="">2000</option>
                <option value="">2001</option>
                <option value="">2002</option>
                <option value="">2003</option>
                <option value="">2004</option>
                <option value="">2005</option>
                <option value="">2006</option>
                <option value="">2007</option>
                <option value="">2008</option>
                <option value="">2009</option>
                <option value="">2010</option>
                <option value="">2011</option>
                <option value="">2012</option>
                <option value="">2013</option>
                <option value="">2014</option>
                <option value="">2015</option>
                <option value="">2016</option>
                <option value="">2017</option>
                <option value="">2018</option>
                <option value="">2019</option>
                <option value="">2020</option>
                <option value="">2021</option>
              </select>
            </div>
        </div> 

        <div class="inputfield">
            <label>Berdasarkan Deskripsi</label>
            <input type="text" class="input">
        </div> 

        <div class="tombol">
          <input type="submit" value="Tampilkan" class="inputan">
        </div> 
    
      </div>
  </div>	

</div>

@endsection
