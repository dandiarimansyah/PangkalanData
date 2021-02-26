@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuMedia')

<div class="isi-konten">

    <div class="judul">
        <th>MEDIA DATA INVENTARISASI TANAH DAN BANGUNAN BALAI/KANTOR BAHASA</th>
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
    <table class="content-table">
        <thead>
            <tr>
                <th rowspan="2">NO</th>
                <!-- <th rowspan="2">TANGGAL DATA</th> -->
                <!-- <th rowspan="2">BALAI/KANTOR</th> -->
                <th colspan="2">TANAH</th>
                <th colspan="2">BANGUNAN</th>
                <th rowspan="2">KONDISI</th>
                <th rowspan="2">STATUS PEMEROLEHAN</th>
                <th rowspan="2">KETERANGAN</th>
                <th rowspan="2">MEDIA</th>
            </tr>
            <tr>
                <th>STATUS</th>
                <th>SERTIFIKAT</th>
                <th>STATUS</th>
                <th>IMB</th>
            </tr>
        </thead>

        <tbody>

          @forelse ($tanah_bangunan as $key => $a)
              <tr>
                  <td>{{ $key + 1}}</td>
                  <!-- <td></td> -->
                  <!-- <td>{{ $a -> kantor}}</td> -->
                  <!-- <td>{{ $a -> alamat}}</td> -->
                  <td>{{ $a -> status_tanah}}</td>
                  <td>{{ $a -> sertif_tanah}}</td>
                  <td>{{ $a -> status_bangunan}}</td>
                  <td>{{ $a -> imb}}</td>
                  <td>{{ $a -> kondisi}}</td>
                  <td>{{ $a -> status_peroleh}}</td>
                  <td>{{ $a -> keterangan}}</td>

                  <td>
                    @auth
                        @if (Auth::user()->level != 'tamu')
                            @if ($a->media == "")
                            <div style="margin:5px auto">
                                <form method="POST" id="media_form" role="form" action="/media/sekretariat/tanah_dan_bangunan/{{ $a->id }}" enctype="multipart/form-data">
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
                                <a id="hapus_media" href="{{ url('/media/sekretariat/tanah_dan_bangunan/hapus/' . $a->id) }}" style="margin-left:12px; color:white" class="btn btn-sm btn-danger">Hapus Media</a>
                            @endif
                        @else
                            @if ($a->media == "")
                            <div style="margin:5px auto">
                                <p style="font-size: 12px">Tidak ada Media</p>
                            </div>
                            @else
                                <a target="_blank" type="button" class="btn btn-sm btn-success" href="{{ Storage::url($a->media) }}">Media</a>
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