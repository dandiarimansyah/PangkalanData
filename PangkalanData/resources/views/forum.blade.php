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

      <!-- TABLE -->
      <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Pengguna/[Nama Lengkap]</th>
                    <th>Unit/Satuan Kerja</th>
                    <th>Komentar/Saran</th>
                </tr>
            </thead>

            <tbody>

            </tbody>
            
        </table>

    </div>

</div>
    

@endsection