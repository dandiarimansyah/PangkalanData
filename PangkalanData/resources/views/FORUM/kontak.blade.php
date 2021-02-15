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
        <th>KONTAK ADMIN</th>
    </div>

    <div class="wrapper">
      <div class="form">

        <div class="inputfield">
            <label>Nama Pengguna Anda</label>
            <input name="nama_pengguna_anda" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Nama Lengkap Anda</label>
            <input name="nama_lengkap_anda" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Email Anda</label>
            <input name="email_anda" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Pesan Anda</label>
            <textarea name="pesan_anda" class="textarea"></textarea>
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