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

@include('PARTIAL.MenuData')

<div class="isi-konten">

    <div class="judul">
        <th>DATA PENELITIAN</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TGL.MULAI</th>
                    <th>TGL.SELESAI</th>
                    {{-- <th>UNIT/SATUAN KERJA</th> --}}
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
                        <!-- <td>{{ $a -> file}}</td> -->
                    </tr>
                @empty
                    <tr>
                        <td colspan="13" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>

    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div id="modal-edit" class="modal-dialog" role="document">
          <div id="modal-content" class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="wrapper" style="margin: 0">
                    <div class="form">
                <form>
                    
                    <div class="inputfield-select">
                        <label>Kategori Penelitian*</label>
                        <div class="custom_select">
                        <select>
                            <option value="">Bahasa</option>
                            <option value="">Sastra</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield-select">
                        <label>Unit/Satuan Kerja*</label>
                        <div class="custom_select">
                        <select>
                            <option value="">Balai Bahasa Jawa Tengah</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield">
                        <label>Peneliti*</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Judul*</label>
                        <textarea class="textarea"></textarea>
                    </div> 

                    <div class="inputfield">
                        <label>Kerja Sama</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield-date">
                        <label>Tanggal Mulai Penelitian</label>
                        <input type="date" class="input">
                    </div> 

                    <div class="inputfield-date">
                        <label>Tanggal Selesai Penelitian</label>
                        <input type="date" class="input">
                    </div> 

                    <div class="inputfield-kecil">
                        <label>Lama Penelitian</label>
                        <input type="text" class="input">
                        <div class="custom_select" style="margin-left: 30px; width: 120px">
                            <select>
                            <option value="">Tahun</option>
                            <option value="">Bulan</option>
                            <option value="">Minggu</option>
                            <option value="">Hari</option>
                            </select>
                        </div>
                    </div> 

                    <div class="inputfield-select">
                        <label>Publikasi</label>
                        <div class="custom_select">
                        <select>
                            <option value="">Terbit</option>
                            <option value="">Belum Terbit</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield-kecil">
                        <label>Tahun Terbit</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Abstrak*</label>
                        <textarea class="textarea"></textarea>
                    </div> 

                </form>
            </div>
            </div>
        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
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