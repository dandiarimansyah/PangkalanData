@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuGrafik')

<div class="isi-konten">
    <div class="content">
        <header style="margin-bottom: 40px">HALAMAN GRAFIK</header>
        <div>
            <img style="height: 300px" src="{{ asset('Gambar/7.jpeg')}}" alt="">
        </div>
    </div>
</div>


@endsection