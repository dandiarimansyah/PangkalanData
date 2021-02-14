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
          <form action="{{ URL('/laporan/kesastraan/penghargaan_sastra/tampil')}}" method="GET">
            @csrf

        <div class="inputfield-select">
            <label>Berdasarkan Kategori</label>
            <div class="custom_select">
                <select id="kategori" name="kategori">
                  <option value="">[SEMUA]</option>
                  <option value="Acarya Sastra">Acarya Sastra</option>
                  <option value="Taruna Sastra">Taruna Sastra</option>
                  <option value="Anugrah Tokoh Kesastraan">Anugrah Tokoh Kesastraan</option>
                  <option value="Sastra Badan Bahasa">Sastra Badan Bahasa</option>
                  <option value="Sea Write Awards">Sea Write Awards</option>
                  <option value="Sayembara Menulis">Sayembara Menulis</option>
                </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('tahun') }}</div>
        <div class="inputfield-kecil">
          <label>Berdasarkan Tahun</label>
          <input name="tahun" type="text" class="input">
      </div>  

        <div class="inputfield">
            <label>Berdasarkan Deskripsi</label>
            <input name="deskripsi" type="text" class="input">
        </div> 

        <div class="tombol">
          <input type="submit" value="Tampilkan" class="inputan">
        </div> 

        </form>
    
      </div>
  </div>	

</div>

@endsection
