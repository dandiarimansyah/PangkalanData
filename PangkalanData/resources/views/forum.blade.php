{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexO')

@section('content')

    <div class="content">
        <header>HALAMAN FORUM</header>
    </div>

    <div class="menu">
        <!-- KATEGORI FORUM INTERNAL -->
        <div class="btn-group kategori">
            <button type="button" class="btn btn-warning"  aria-haspopup="true" aria-expanded="false">
                Forum Internal
            </button>
        </div>

         <!-- KATEGORI KONTAK ADMIN -->
         <div class="btn-group kategori">
            <button type="button" class="btn btn-warning"  aria-haspopup="true" aria-expanded="false">
                Kontak Admin
            </button>
        </div>

     
    </div>

@endsection