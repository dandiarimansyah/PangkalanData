@extends('PARTIAL.indexV')

<style>
    #more  {display:  none;}

    #abstrak-model .modal-dialog{
        max-width: 1000px !important;
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

@section('content')

@include('PARTIAL.MenuMedia')

<div class="isi-konten">

    <div class="judul">
        <th>DOKUMEN DATA PENELITIAN</th>
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
                    <th>TGL.MULAI</th>
                    <th>TGL.SELESAI</th>
                    <!-- <th>UNIT/SATUAN KERJA</th> -->
                    <th>JUDUL</th>
                    <th>PENELITI</th>
                    <th>KERJA SAMA</th>
                    <th>ABSTRAK</th>
                    <th>LAMA PENELITIAN</th>
                    <th>PUBLIKASI</th>
                    <th>TAHUN TERBIT</th>
                    <th>DOKUMEN</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($penelitian as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>
                            @if ($a -> tanggal_awal != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_awal)->format('d-m-Y')}}
                            @else
                                -
                            @endif 
                        </td>
                        <td>
                            @if ($a -> tanggal_akhir != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_akhir)->format('d-m-Y')}}
                            @else
                                -
                            @endif 
                        </td>
                        <!-- <td>{{ $a -> unit}}</td> -->
                        <td>{{ $a -> judul}}</td>
                        <td>{{ $a -> peneliti}}</td>
                        <td>{{ $a -> kerja_sama}}</td>
                        @if (strlen($a->abstrak) > 100)
                            <td style="max-width: 250px; text-align: justify">
                                {{ \Illuminate\Support\Str::limit($a->abstrak, 100, $end='...') }}
                                <span id="dots"></span>
                                <span id="more">{{ substr($a->abstrak, 100) }}</span>
                                <button data-isi="{{ $a -> abstrak}}" id="abstrak_tombol" type="button" data-toggle="modal" data-target="#abstrak-model">Selengkapnya</button>
                            </td>
                        @else
                            <td style="max-width: 250px">{{ $a -> abstrak}}</td>
                        @endif
                        <td>{{ $a -> lama_penelitian}} {{ $a -> tipe_waktu}}</td>
                        <td>{{ $a -> publikasi}}</td>
                        <td>{{ $a -> tahun_terbit}}</td>
                        {{-- <td>{{ $a -> media}}</td> --}}
                        
                        <td>
                        @auth
                            @if (Auth::user()->level != 'tamu')
                                @if ($a->media == "")
                                <div style="margin:5px auto">
                                    <form method="POST" id="media_form" role="form" action="{{ url('/media/penelitian/penelitian/' . $a->id)}}" enctype="multipart/form-data">
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
                                    <a id="hapus_media" href="{{ url('/media/penelitian/penelitian/hapus/' . $a->id) }}" style="margin-left:12px; color:white" class="btn btn-sm btn-danger">Hapus Dokumen</a>
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
                        <td colspan="14" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

    </div>

</div>
    
<div class="modal fade" id="abstrak-model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Abstrak</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form id="import_form" action="" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="modal-body">
                <div class="template">
                    <p style="text-align: justify" id="abstrak_lengkap"></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </form>
    </div>
</div>

@endsection

@push('scripts')
      <script>
          $(document).on('click','#abstrak_tombol',function(){
            let isi = $(this).data('isi');
            $("#abstrak_lengkap").html(isi);
          })
        </script>
@endpush