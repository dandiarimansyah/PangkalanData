{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

    <div class="menu">
        <!-- KATEGORI FORUM INTERNAL -->
        <div class="btn-group kategori">
            <a href="/forum" type="button" class="btn btn-warning"  aria-haspopup="true" aria-expanded="false">
                Forum Internal
            </a>
        </div>

         <!-- KATEGORI KONTAK ADMIN -->
         <div class="btn-group kategori">
            <a href="/forum/kontak_admin" type="button" class="btn btn-warning"  aria-haspopup="true" aria-expanded="false">
                Kontak Admin
            </a>
        </div>
    </div>

<div class="isi-konten">

    <div class="judul">
        <th>KOMENTAR/SARAN</th>
    </div>

    <form method="POST" id="media_form" role="form" action="/forum/internal" enctype="multipart/form-data">
    @csrf
    <div class="wrapper">
      <div class="form">

        <div class="inputfield">
            <label>Nama Pengguna</label>
            <input name="pengguna" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Balai/Kantor</label>
            <input name="balai" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Nama Lengkap</label>
            <input name="lengkap" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Saran/Komentar</label>
            <textarea name="saran" class="textarea"></textarea>
        </div>  

        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="submit" value="Kirim" class="inputan">
        </div> 

    </form>
        
      </div>
  </div>	

</div>

@endsection