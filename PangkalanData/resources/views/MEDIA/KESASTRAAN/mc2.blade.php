@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuMedia')

<div class="isi-konten">

    <div class="judul">
        <th>DOKUMEN DATA PENGHARGAAN SATRA</th>
    </div>

    <!-- <div class="" style=" display:flex; justify-content:center">
        <div class="input-group" style="width: 30%; padding:20px;">
            <input type="text" class="form-control" placeholder="Cari">
            <div class="input-group-append">
            <button class="btn btn-secondary" type="button">
                <i class="fa fa-search"></i>
            </button>
            </div>
        </div>
    </div> -->

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KATEGORI</th>
                    <th>TAHUN</th>
                    <th>DESKRIPSI</th>
                    <th>DOKUMEN</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($penghargaan_sastra as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> kategori}}</td>
                        <td>{{ $a -> tahun}}</td>
                        <td>{{ $a -> deskripsi}}</td>

                        <td>
                        @auth
                            @if (Auth::user()->level != 'tamu')
                                @if ($a->media == "")
                                <div style="margin:5px auto">
                                    <form method="POST" id="media_form" role="form" action="{{ url('/media/kesastraan/penghargaan_sastra/' . $a->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input style="width: 200px" type="file" name="media">
                                        <div style="margin:10px auto">
                                            <input type="submit" value="Unggah" class="btn btn-info btn-sm">
                                        </div>
                                    </form>
                                </div>
                                @else
                                    <a target="_blank" type="button" class="btn btn-sm btn-success" href="{{ Storage::url($a->media) }}">Dokumen</a>
                                    <a id="hapus_media" href="{{ url('/media/kesastraan/penghargaan_sastra/hapus/' . $a->id) }}" style="margin-left:12px; color:white" class="btn btn-sm btn-danger">Hapus Dokumen</a>
                                @endif
                            @else
                                @if ($a->media == "")
                                <div style="margin:5px auto">
                                    <p style="font-size: 12px">Tidak ada Dokumen</p>
                                </div>
                                @else
                                    <a target="_blank" type="button" class="btn btn-sm btn-success" href="{{ Storage::url($a->media) }}">Dokumen</a>
                                @endif
                            @endif
                        @endauth

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