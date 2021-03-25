@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>DATA BALAI BAHASA PROVINSI JAWA TENGAH</th>
    </div>

    @include('tabel_data')

</div>

    

@endsection