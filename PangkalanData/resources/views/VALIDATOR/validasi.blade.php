@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

<div class="isi-konten">

    <div class="judul">
        <th>DATA BALAI BAHASA JAWA TENGAH</th>
    </div>

    @include('tabel_data')

</div>

@endsection