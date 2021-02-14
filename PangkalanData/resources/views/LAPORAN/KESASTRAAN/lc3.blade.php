{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')

<div class="isi-konten">

    <div class="judul">
        <th>PILIH DATA MUSIKALISASI PUISI NASIONAL YANG AKAN DITAMPILKAN</th>
    </div>

    <div class="wrapper">
        <div class="form">
          <form action="{{ URL('/laporan/kesastraan/musikalisasi_puisi_nasional/tampil')}}" method="GET">
            @csrf

            <div class="inputfield-kecil">
              <label>Berdasarkan Tahun</label>
              <input name="tahun" type="text" class="input">
          </div> 

        <div class="inputfield">
            <label>Berdasarkan Nama Pemenang</label>
            <input name="pemenang" type="text" class="input">
        </div> 

        <div class="tombol">
          <input type="submit" value="Tampilkan" class="inputan">
        </div> 

        </form>
    
      </div>
  </div>	

</div>

@endsection
