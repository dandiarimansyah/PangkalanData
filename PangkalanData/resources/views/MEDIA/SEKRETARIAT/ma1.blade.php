@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuMedia')

<div class="isi-konten">

    @if ($errors->any())
        <div class="error">
            <p>----- Pesan Error -----</p>
        @foreach ($errors->all() as $error)
            <div class="errors">
            {{ $error }}
            </div>
        @endforeach
        </div>
    @endif

    <div class="judul">
        <th>MEDIA DATA KERJA SAMA</th>
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
                    <th>TANGGAL KERJA SAMA</th>
                    <th>UNIT/SATUAN KERJA</th>
                    <th>INSTANSI</th>
                    <th>KATEGORI</th>
                    <th>NO. KERJA SAMA</th>
                    <th>PERIHAL</th>
                    <th>KETERANGAN</th>
                    <th>DITANDATANGANI</th>
                    <th>MEDIA</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($kerja_sama as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tanggal_awal}} <br>sampai<br> {{ $a -> tanggal_akhir}}  </td>
                        <td>Balai Bahasa Jawa Tengah</td>
                        <td>{{ $a -> instansi}}</td>
                        <td>{{ $a -> kategori}}</td>
                        <td>{{ $a -> nomor}}</td>
                        <td>{{ $a -> perihal}}</td>
                        <td>{{ $a -> keterangan}}</td>
                        <td>1. {{ $a -> ttd_1}} <br>2. {{ $a -> ttd_2}}</td>
                        {{-- <td>{{ $a -> instansi_1}}{{ $a -> instansi_2}}</td> --}}

                        <td>
                            @if ($a->media == "")
                            <div style="margin:5px auto">
                                <form method="POST" id="media_form" role="form" action="/media/sekretariat/kerja_sama/{{ $a->id }}" enctype="multipart/form-data">
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
                                <a id="hapus_media" href="{{ url('/media/sekretariat/kerja_sama/hapus/' . $a->id) }}" style="margin-left:12px; color:white" class="btn btn-sm btn-danger">Hapus Media</a>
                            @endif
                        </td>

                        {{-- <td>
                            <video width="360" controls>
                                <source id="frame" src="{{ Storage::url($a->media) }}" style="width: 600px">
                            </video>
                        </td> --}}

                        {{-- <td>
                            <button type="button" class="edit"
                                id="media_item" 
                                data-toggle="modal" 
                                data-target="#media-modal"
                                data-media="{{ $a->media }}"
                            >Media</button>
                        </td> --}}

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


<div class="modal fade" id="media-modal">
    <div id="modal-media" class="modal-dialog" role="document">
    <div id="modal-content" class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MEDIA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            {{-- <div class="container">
                <form role="form" action="" enctype="multipart/form-data">
                    <input type="file" name="media">
                </form>
            </div>

            <p>Halo</p> --}}

            {{-- <video width="360" controls>
                <source id="frame" src="" style="width: 600px">
            </video> --}}

            <img id="frame" src="" style="width: 600px">
        </div>
    </div>
    </div>
</div>

@endsection

@push('scripts')
      <script>
          $(document).on('click','#media_item',function(){
            let media = $(this).data('media');
            
            $('#frame').attr('src', '{{ Storage::url('+media+') }}');
          })
      </script>
@endpush