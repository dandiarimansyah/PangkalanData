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

@include('PARTIAL.MenuLaporan')

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

    <div class="tombol-kembali">
        <button onclick="back()" type="button" class="btn">
            <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
            <span>KEMBALI</span>
        </button>
    </div>

    <div class="judul">
        <th>LAPORAN DATA PENELITIAN</th>
    </div>

    @auth
        @if (Auth::user()->level != 'tamu')
    <div class="judul" style="display:flex; justify-content:center">
        <a href="{{ url("/pdf/penelitian/penelitian?tahun_terbit={$tahun_terbit}&judul={$judul}&peneliti={$peneliti}&abstrak={$abstrak}")}}" target="_blank" type="button" class="btn btn-danger" style="border-radius: 5px;margin-right:15px;">
            <i style="margin-right: 4px" class="fa fa-file-pdf-o" aria-hidden="true"></i>
            EXPORT KE PDF
        </a>
        <a href="{{ url("/excel/penelitian/penelitian?tahun_terbit={$tahun_terbit}&judul={$judul}&peneliti={$peneliti}&abstrak={$abstrak}")}}" target="_blank" type="button" class="btn btn-success" style="border-radius: 5px;margin-right:15px;">
            <i style="margin-right: 4px" class="fa fa-file-excel-o" aria-hidden="true"></i>
            EXPORT KE EXCEL
        </a>
    </div>
    @endif
    @endauth

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
                    <!-- <th>MEDIA</th> -->
                </tr>
            </thead>

            <tbody>

                @forelse ($data as $key => $a)
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
                        <!-- <td>{{ $a -> media}}</td> -->

                    </tr>
                @empty
                    <tr>
                        <td colspan="14" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

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