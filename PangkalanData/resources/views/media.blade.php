@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuMedia')

<div class="isi-konten">

    <div class="content">
        <header style="margin-bottom: 40px">HALAMAN DOKUMEN</header>
        <div>
            <img style="height: 300px" src="{{ asset('Gambar/10.jpg')}}" alt="">
        </div>
    </div>
</div>


@endsection