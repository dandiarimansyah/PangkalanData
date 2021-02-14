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

    <div class="judul">
        <th>FORUM INTERNAL</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center; margin-top:3px;">
        <div class="btn-group kategori">
            <a href="/forum/internal" type="button" class="btn btn-primary" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                Komentar/Saran Anda
            </a>
        </div>

        <div class="btn-group kategori">
            <button type="button" class="btn btn-primary" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                Grafik Aktivitas Pengguna
            </button>
        </div>
    </div>

    <div class="wrapper">
      <div class="form">

        <div class="inputfield">
            <label>Nama Pengguna</label>
            <input name="nama_pengguna" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Balai/Kantor</label>
            <input name="balai" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Nama Lengkap</label>
            <input name="nama_lengkap" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Saran/Komentar</label>
            <textarea name="saran_komentar" class="textarea"></textarea>
        </div>  

        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="submit" value="Kirim" class="inputan">
        </div> 

      </form>
        
      </div>
  </div>	

@endsection