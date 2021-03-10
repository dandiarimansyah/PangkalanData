@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

<div class="isi-konten">

    <div class="judul">
        <th>VALIDASI DATA PENELITIAN</th>
    </div>

    <div class="ketjudul" style="margin-top:0px ;">
        <th>Klik tombol <b>"Pilih Semua"</b> untuk mencentang semua data</th>
        <br>
        <th>Klik tombol <b>"Validasi Data"</b>  untuk memvalidasi data yang telah dicentang</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center; margin-top:3px;">
        <!-- <div class="btn-group kategori">
            <button type="button" class="btn btn-primary" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                EKSPOR KE PDF 
            </button>
        </div> -->
        
        <div class="pilih_semua">
            <label for="valid">PILIH SEMUA</label>
            <input type='checkbox' id='valid'>
        </div>

        <div class="btn-group kategori">
            <button href="{{ URL('validator/penelitian/penelitian')}}" id="tombol_validasi" type="button" class="btn btn-success" style="border-radius: 5px">
                VALIDASI DATA
            </button>
        </div>
    </div>

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
                    <th>EDIT</th>
                    <th>VALIDASI</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($penelitian as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tanggal_awal}}</td>
                        <td>{{ $a -> tanggal_akhir}}</td>
                        <!-- <td>{{ $a -> unit}}</td> -->
                        <td>{{ $a -> judul}}</td>
                        <td>{{ $a -> peneliti}}</td>
                        <td>{{ $a -> kerja_sama}}</td>
                        <td>{{ $a -> abstrak}}</td>
                        <td>{{ $a -> lama_penelitian}}</td>
                        <td>{{ $a -> publikasi}}</td>
                        <td>{{ $a -> tahun_terbit}}</td>
                        <td>
                            @if ($a->media == "")
                            <div style="margin:5px auto">
                                <p style="font-size: 12px">Tidak ada Dokumen</p>
                            </div>
                            @else
                                <a target="_blank" type="button" class="btn btn-sm btn-success" href="{{ Storage::url($a->media) }}">Dokumen</a>
                            @endif
                        </td>

                        <td>
                        <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-unit="{{ $a->unit }}"
                                data-peneliti="{{ $a->peneliti }}"
                                data-judul="{{ $a->judul }}"
                                data-kerja_sama="{{ $a->kerja_sama }}"
                                data-tanggal_awal="{{ $a->tanggal_awal }}"
                                data-tanggal_akhir="{{ $a->tanggal_akhir }}"
                                data-lama_penelitian="{{ $a->lama_penelitian }}"
                                data-tipe_waktu="{{ $a->tipe_waktu }}"
                                data-publikasi="{{ $a->publikasi }}"
                                data-tahun_terbit="{{ $a->tahun_terbit }}"
                                data-abstrak="{{ $a->abstrak }}"
                            >Edit</button>
                        </td>
                        <td>
                            <div class="validate"> 
                            @if ($a -> validasi == "belum")
                            <form action="" method="POST">
                                <input data-id="{{ $a->id }}"class="check" type="checkbox" value="sudah" name="validasi">
                            </form>
                            @else
                                <p>Tervalidasi</p>
                            @endif
                            </div>
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


<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div id="modal-edit" class="modal-dialog" role="document">
          <div id="modal-content" class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA PENELITIAN</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="wrapper" style="margin: 0">
                    <div class="form">
                    <form id="edit_form" action="" method="POST">
                            @csrf
                            @method('PUT')

                        <!-- <div class="alert-danger">{{ $errors->first('unit') }}</div>
                        <div class="inputfield-select">
                            <label>Unit/Satuan Kerja*</label>
                            <div class="custom_select">
                            <select id="unit" name="unit">
                                <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
                            </select>
                            </div>
                        </div>  -->

                        <div class="alert-danger">{{ $errors->first('peneliti') }}</div>
                        <div class="inputfield">
                            <label>Peneliti*</label>
                            <input id="peneliti" name="peneliti" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('judul') }}</div>
                        <div class="inputfield">
                            <label>Judul*</label>
                            <textarea id="judul" name="judul" class="textarea"></textarea>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('kerja_sama') }}</div>
                        <div class="inputfield">
                            <label>Kerja Sama</label>
                            <input id="kerja_sama" name="kerja_sama" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('tanggal_awal') }}</div>
                        <div class="inputfield-date">
                            <label>Tanggal Mulai Penelitian</label>
                            <input id="tanggal_awal" name="tanggal_awal" type="date" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('tanggal_akhir') }}</div>
                        <div class="inputfield-date">
                            <label>Tanggal Selesai Penelitian</label>
                            <input id="tanggal_akhir" name="tanggal_akhir" type="date" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('lama_penelitian') }}</div>
                        <div class="inputfield-kecil">
                            <label>Lama Penelitian</label>
                            <input id="lama_penelitian" name="lama_penelitian" type="text" class="input">
                            <div class="custom_select" style="margin-left: 30px; width: 120px">
                                <select id="tipe_waktu" name="tipe_waktu">
                                    <option value="Tahun">Tahun</option>
                                    <option value="Bulan">Bulan</option>
                                    <option value="Minggu">Minggu</option>
                                    <option value="Hari">Hari</option>
                                </select>
                            </div>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('publikasi') }}</div>
                        <div class="inputfield-select">
                            <label>Publikasi</label>
                            <div class="custom_select">
                            <select id="publikasi" name="publikasi">
                                <option value="Terbit">Terbit</option>
                                <option value="Belum Terbit">Belum Terbit</option>
                            </select>
                            </div>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('tahun_terbit') }}</div>
                        <div class="inputfield-kecil">
                            <label>Tahun Terbit</label>
                            <input id="tahun_terbit" name="tahun_terbit" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('abstrak') }}</div>
                        <div class="inputfield">
                            <label>Abstrak*</label>
                            <textarea id="abstrak" name="abstrak" class="textarea"></textarea>
                        </div> 

                        <!-- <div class="inputfield-kecil">
                        <label for="">Unggah Media</label>
                        <input id="media" type="file" name="media">
                        </div> -->

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>

                </form>
            </div>
            </div>
        </div>
          </div>
        </div>
      </div>

@endsection

@push('scripts')
      <script>

          $(document).on('click','#edit_item',function(){
                let unit = $(this).data('unit');
                let lama_penelitian = $(this).data('lama_penelitian');
                let tipe_waktu = $(this).data('tipe_waktu');
                let publikasi = $(this).data('publikasi');
                let peneliti = $(this).data('peneliti');
                let judul = $(this).data('judul');
                let kerja_sama = $(this).data('kerja_sama');
                let tanggal_awal = $(this).data('tanggal_awal');
                let tanggal_akhir = $(this).data('tanggal_akhir');
                let tahun_terbit = $(this).data('tahun_terbit');
                let abstrak = $(this).data('abstrak');

                let id = $(this).data('id');

                $('#unit option').filter(function(){
                    return ($(this).val() == unit)
                }).prop('selected', true);

                $('#publikasi option').filter(function(){
                    return ($(this).val() == publikasi)
                }).prop('selected', true);

                $('#tipe_waktu option').filter(function(){
                    return ($(this).val() == tipe_waktu)
                }).prop('selected', true);

                $('#peneliti').val(peneliti);
                $('#judul').val(judul);
                $('#kerja_sama').val(kerja_sama);
                $('#tanggal_awal').val(tanggal_awal);
                $('#tanggal_akhir').val(tanggal_akhir);
                $('#tahun_terbit').val(tahun_terbit);
                $('#lama_penelitian').val(lama_penelitian);
                $('#abstrak').val(abstrak);
                
                $('#edit_form').attr('action', '/operator/edit/penelitian/penelitian/' + id);
          })
      </script>
@endpush