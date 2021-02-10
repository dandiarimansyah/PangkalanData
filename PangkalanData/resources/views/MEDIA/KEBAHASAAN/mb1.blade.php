@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuMedia')

<div class="isi-konten">

    <div class="judul">
        <th>MEDIA DATA KAMUS / ENSIKLOPEDIA</th>
    </div>
    
    <div class="" style=" display:flex; justify-content:center">
        <div class="input-group" style="width: 30%; padding:20px;">
            <input type="text" class="form-control" placeholder="Cari">
            <div class="input-group-append">
            <button class="btn btn-secondary" type="button">
                <i class="fa fa-search"></i>
            </button>
            </div>
        </div>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KATEGORI</th>
                    <th>JUDUL</th>
                    <th>EDISI</th>
                    <th>TIM REDAKSI</th>
                    <th>ISBN</th>
                    <th>PENERBIT</th>
                    <th>LINGKUP</th>
                    <th>KETERANGAN</th>
                    <th>UNIT/SATKER</th>
                    <th>INFO PRODUK</th>
                    <th>MEDIA</th>
                </tr>
            </thead>

            <tbody>

              @forelse ($kamus as $key => $a)
                  <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> kategori}}</td>
                        <td>{{ $a -> judul}}</td>
                        <td>{{ $a -> tim_redaksi}}</td>
                        <td>{{ $a -> edisi}}</td>
                        <td>{{ $a -> no_isbn}}</td>
                        <td>{{ $a -> lingkup}}</td>
                        <td>{{ $a -> penerbit}}</td>
                        <td>{{ $a -> tahun_terbit}}</td>
                        <td>{{ $a -> keterangan}}</td>
                        <td>{{ $a -> info_produk}}</td>

                        <td>
                            @if ($a->media == "")
                            <div style="margin:5px auto">
                                <form method="POST" id="media_form" role="form" action="/media/kebahasaan/kamus_ensiklopedia/{{ $a->id }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input style="width: 200px" type="file" name="media">
                                    <div style="margin:10px auto">
                                        <input type="submit" value="Unggah" class="btn btn-info btn-sm">
                                    </div>
                                </form>
                            </div>
                            @else
                                <a target="_blank" type="button" class="btn btn-sm btn-success" href="{{ Storage::url($a->media) }}">Media</a>
                                <a id="hapus_media" href="{{ url('/media/kebahasaan/kamus_ensiklopedia/hapus/' . $a->id) }}" style="margin-left:12px; color:white" class="btn btn-sm btn-danger">Hapus Media</a>
                            @endif
                        </td>
                        
                  </tr>
              @empty
                  <tr>
                      <td colspan="16" align="center">Tidak ada Data</td>
                  </tr>
              @endforelse

            </tbody>

        </table>

    </div>
</div>

    

@endsection