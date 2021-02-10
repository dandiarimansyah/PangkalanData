@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuMedia')

<div class="isi-konten">

    <div class="judul">
        <th>MEDIA DATA MUSIKALISASI PUISI PROVINSI</th>
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
                    <th>TAHUN</th>
                    <th>PROVINSI</th>
                    <th>PEMENANG I</th>
                    <th>PEMENANG II</th>
                    <th>PEMENANG III</th>
                    <th>FAVORIT</th>
                    <th>KETERANGAN</th>
                    <th>MEDIA</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($musikalisasi_puisi_provinsi as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tahun}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> pemenang_1}}</td>
                        <td>{{ $a -> pemenang_2}}</td>
                        <td>{{ $a -> pemenang_3}}</td>
                        <td>{{ $a -> favorit}}</td>
                        <td>{{ $a -> keterangan}}</td>
                      
                        <td>
                            @if ($a->media == "")
                            <div style="margin:5px auto">
                                <form method="POST" id="media_form" role="form" action="/media/kesastraan/musikalisasi_puisi_provinsi/{{ $a->id }}" enctype="multipart/form-data">
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
                                <a id="hapus_media" href="{{ url('/media/kesastraan/musikalisasi_puisi_provinsi/hapus/' . $a->id) }}" style="margin-left:12px; color:white" class="btn btn-sm btn-danger">Hapus Media</a>
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