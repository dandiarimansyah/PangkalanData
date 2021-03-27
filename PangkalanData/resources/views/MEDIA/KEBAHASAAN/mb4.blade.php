@extends('PARTIAL.indexV')

@section('style')
<style>
    .content-table th, .content-table td {
        padding: 10px 8px 10px 8px !important;
        max-width: 190px;
    }

    th.sorting,
    th.sorting_asc,
    th.sorting_desc {
        padding-right: 10px !important;
    }

    th.sorting::before,
    th.sorting::after,
    th.sorting_asc::before,
    th.sorting_asc::after,
    th.sorting_desc::before,
    th.sorting_desc::after {
        content: none !important;
    }
</style>
@endsection

@section('content')

@include('PARTIAL.MenuMedia')

<div class="isi-konten">

    <div class="judul">
        <th>DOKUMEN DATA PENYULUHAN</th>
    </div>
<!-- 
    <div class="" style=" display:flex; justify-content:center">
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
                    <th>KABUPATEN/KOTA</th>
                    <th>TANGGAL</th>
                    <th>KEGIATAN</th>
                    <th>NARASUMBER</th>
                    <th>SASARAN</th>
                    <th>JUMLAH</th>
                    <th>MATERI</th>
                    <th>DOKUMEN</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($penyuluhan as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> kota}}</td>
                        <td>
                            @if ($a -> tanggal_awal != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_awal)->format('d-m-Y')}}
                            @else
                                -
                            @endif
                                s.d
                            @if ($a -> tanggal_akhir != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_akhir)->format('d-m-Y')}}
                            @else
                                -
                            @endif 
                        </td>
                        <td>{{ $a -> nama_kegiatan}}</td>
                        <td>{{ $a -> narasumber}}</td>
                        <td>{{ $a -> sasaran}}</td>
                        <td>{{ $a -> jumlah_peserta}}</td>
                        <td>{{ $a -> materi}}</td>
                        
                        <td style="display: flex; max-width:240px">
                        @auth
                            @if (Auth::user()->level != 'tamu')
                                @if ($a->media == "")
                                <div style="margin:5px auto">
                                    <form method="POST" id="media_form" role="form" action="{{ url('/media/kebahasaan/penyuluhan/' . $a->id)}}" enctype="multipart/form-data">
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
                                    <a id="hapus_media" href="{{ url('/media/kebahasaan/penyuluhan/hapus/' . $a->id) }}" style="margin-left:12px; color:white" class="btn btn-sm btn-danger">Hapus Dokumen</a>
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