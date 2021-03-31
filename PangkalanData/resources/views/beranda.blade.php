@extends('PARTIAL.indexV')

@section('content')

  <div class="judul_beranda">
    <p>BALAI BAHASA PROVINSI JAWA TENGAH</p>
  </div>

  <div class="crop">
    <img class="belakang_beranda" src="{{ asset('Gambar/balai3.jpg')}}" alt="">
  </div>

  <div class="gambar_beranda">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        @foreach ($foto_beranda as $key => $a)
        @if ($key == 0)
          <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="active"></li>
        @else
          <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}"></li>
        @endif
        @endforeach
          {{-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
      </ol>
      <div class="carousel-inner">
        
        @foreach ($foto_beranda as $key => $a)
          @if ($key == 0)
            <div class="carousel-item active">
          @else
            <div class="carousel-item">
          @endif
            <img class="gambar_carousel" src="{{ Storage::url('Foto/' . $a->gambar) }}">
          </div>
        @endforeach
      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
  </div>

@endsection

@push('scripts')
    <script>
        $('.carousel').carousel()
    </script>

@endpush