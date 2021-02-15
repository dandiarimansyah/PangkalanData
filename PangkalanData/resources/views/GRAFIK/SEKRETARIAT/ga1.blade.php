{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')
{{-- @extends('PARTIAL.indexV') --}}

@section('content')

@include('PARTIAL.MenuGrafik')

<div class="isi-konten">

    <div class="judul">
        <th>DATA ANGGARAN</th>
    </div>

    <div class="ketjudul" style="margin-top:0px ;">
        <th>Jumlah: (ISIAN) Data</th>
    </div>

</div>


@endsection