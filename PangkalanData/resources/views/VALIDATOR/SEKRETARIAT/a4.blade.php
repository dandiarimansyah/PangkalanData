@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

<div class="isi-konten">

    <div class="judul">
        <th>VALIDASI DATA KERJA SAMA</th>
    </div>

    <div class="ketjudul" style="margin-top:0px ;">
        <th>Klik tombol <b>"Pilih Semua"</b> untuk mencentang semua data</th>
        <br>
        <th>Klik tombol <b>"Validasi Data"</b>  untuk memvalidasi data yang telah dicentang</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center; margin-top:3px;">
        <div class="btn-group kategori">
            <button type="button" class="btn btn-primary" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                EKSPOR KE PDF 
            </button>
        </div>
        
        <div class="pilih_semua">
            <label for="valid">PILIH SEMUA</label>
            <input type='checkbox' id='valid'>
        </div>

        <div class="btn-group kategori">
            <button href="{{ URL('validator/sekretariat/kerja_sama')}}" id="tombol_validasi" type="button" class="btn btn-success" style="border-radius: 5px">
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
                    <th>TANGGAL KERJA SAMA</th>
                    <!-- <th>UNIT/SATUAN KERJA</th> -->
                    <th>INSTANSI</th>
                    <th>KATEGORI</th>
                    <th>NO. KERJA SAMA</th>
                    <th>PERIHAL</th>
                    <th>KETERANGAN</th>
                    <th>DITANDATANGANI</th>
                    <th>DOKUMEN</th>
                    <th>EDIT</th>
                    <th>VALIDASI</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($kerja_sama as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>Mulai:{{ $a -> tanggal_awal}} <br> Berakhir:{{ $a -> tanggal_akhir}}  </td>
                        <!-- <td>Balai Bahasa Jawa Tengah</td> -->
                        <td>{{ $a -> instansi}}</td>
                        <td>{{ $a -> kategori}}</td>
                        <td>{{ $a -> nomor}}</td>
                        <td>{{ $a -> perihal}}</td>
                        <td>{{ $a -> keterangan}}</td>
                        <td>1. {{ $a -> ttd_1}} <br>2. {{ $a -> ttd_2}}</td>
                        <!-- <td>{{ $a -> instansi_1}}{{ $a -> instansi_2}}</td> -->
                        <td>
                            @if ($a->media == "")
                            <div style="margin:5px auto">
                                <p style="font-size: 12px">Tidak ada Dokumen</p>
                            </div>
                            @else
                                <a target="_blank" type="button" class="btn btn-sm btn-success" href="{{ Storage::url($a->media) }}">Dokumen</a>
                            @endif
                        </td>

                        <td style="display: flex; justify-content:center">
                        <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-kategori="{{ $a->kategori }}"
                                data-instansi="{{ $a->instansi }}"
                                data-tanggal_awal="{{ $a->tanggal_awal }}"
                                data-tanggal_akhir="{{ $a->tanggal_akhir }}"
                                data-nomor="{{ $a->nomor }}"
                                data-perihal="{{ $a->perihal }}"
                                data-keterangan="{{ $a->keterangan }}"
                                data-ttd_1="{{ $a->ttd_1 }}"
                                data-instansi_1="{{ $a->instansi_1 }}"
                                data-ttd_2="{{ $a->ttd_2 }}"
                                data-instansi_2="{{ $a->instansi_2 }}"
                                data-media="{{ $a->media }}"
                            >Edit</button>

                        </td>
                        <td>
                            <div class="validate"> 
                            @if ($a -> validasi == "belum")
                            <form action="" method="POST">
                                <input data-id="{{ $a->id }}" class="check" type="checkbox" value="sudah" name="validasi">
                            </form>
                            @else
                                <p>Tervalidasi</p>
                            @endif
                            </div>
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


<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div id="modal-edit" class="modal-dialog" role="document">
          <div id="modal-content" class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA KERJA SAMA</h5>
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
                                
                    <div class="alert-danger">{{ $errors->first('kategori') }}</div>
                    <div class="inputfield-select">
                        <label>Kategori</label>
                        <div class="custom_select">
                        <select id="kategori" name="kategori">
                            <option value="Internal">Internal</option>
                            <option value="Eksternal">Eksternal</option>
                        </select>
                        </div>
                    </div>

                    <div class="alert-danger">{{ $errors->first('instansi') }}</div>
                    <div class="inputfield">
                        <label>Nama Instansi*</label>
                        <input id="instansi" name="instansi" type="text" class="input">
                    </div> 

                    <div class="alert-danger">{{ $errors->first('tanggal_awal') }}</div>
                    <div class="inputfield-date">
                        <label>Tanggal Kerja sama*</label>
                        <input id="tanggal_awal" name="tanggal_awal" type="date" class="input">
                    </div> 

                    <div class="alert-danger">{{ $errors->first('tanggal_akhir') }}</div>
                    <div class="inputfield-date">
                        <label>Tanggal Berakhir</label>
                        <input id="tanggal_akhir" name="tanggal_akhir" type="date" class="input">
                    </div> 
                    
                    <div class="alert-danger">{{ $errors->first('nomor') }}</div>
                    <div class="inputfield">
                        <label>No.Kerja sama</label>
                        <input id="nomor" name="nomor" type="text" class="input">
                    </div> 

                    <div class="alert-danger">{{ $errors->first('perihal') }}</div>
                    <div class="inputfield">
                        <label>Perihal</label>
                        <textarea id="perihal" name="perihal" class="textarea"></textarea>
                    </div>   

                    <div class="alert-danger">{{ $errors->first('keterangan') }}</div>
                    <div class="inputfield">
                        <label>Keterangan</label>
                        <textarea id="keterangan" name="keterangan" class="textarea"></textarea>
                    </div>   

                    <div class="alert-danger">{{ $errors->first('ttd_1') }}</div>
                    <div class="inputfield">
                        <label>Ditandatangani Oleh (1)</label>
                        <input id="ttd_1" name="ttd_1" type="text" class="input">
                    </div> 

                    <div class="alert-danger">{{ $errors->first('instansi_1') }}</div>
                    <div class="inputfield">
                        <label>Instansi (1)</label>
                        <div class="custom_select" style="width: 100%">
                        <select id="instansi_1" name="instansi_1">
                            <option value="Badan Pengembangan Bahasa dan Perbukuan">Badan Pengembangan Bahasa dan Perbukuan</option>
                            <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
                        </select>
                        </div>
                    </div> 

                    <div class="alert-danger">{{ $errors->first('ttd_2') }}</div>
                    <div class="inputfield">
                        <label>Ditandatangani Oleh (2)</label>
                        <input id="ttd_2" name="ttd_2" type="text" class="input">
                    </div> 

                    <div class="alert-danger">{{ $errors->first('instansi_2') }}</div>
                    <div class="inputfield">
                        <label>Instansi (2)</label>
                        <div class="custom_select" style="width: 100%">
                        <select id="instansi_2" name="instansi_2">
                            <option value="Badan Pengembangan Bahasa dan Perbukuan">Badan Pengembangan Bahasa dan Perbukuan</option>
                            <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
                        </select>
                        </div>
                    </div> 

                    <!-- <div class="inputfield-kecil">
                    <label for="">Unggah File</label>
                    <input type="file" name="media">
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
                let kategori = $(this).data('kategori');
                let instansi_1 = $(this).data('instansi_1');
                let instansi_2 = $(this).data('instansi_2');

                let instansi = $(this).data('instansi');
                let tanggal_awal = $(this).data('tanggal_awal');
                let tanggal_akhir = $(this).data('tanggal_akhir');
                let nomor = $(this).data('nomor');
                let perihal = $(this).data('perihal');
                let keterangan = $(this).data('keterangan');
                let ttd_1 = $(this).data('ttd_1');
                let ttd_2 = $(this).data('ttd_2');
                let media = $(this).data('media');

                let id = $(this).data('id');

                $('#kategori option').filter(function(){
                    return ($(this).val() == kategori)
                }).prop('selected', true);

                $('#instansi_1 option').filter(function(){
                    return ($(this).val() == instansi_1)
                }).prop('selected', true);

                $('#instansi_2 option').filter(function(){
                    return ($(this).val() == instansi_2)
                }).prop('selected', true);

                $('#instansi').val(instansi);
                $('#tanggal_awal').val(tanggal_awal);
                $('#tanggal_akhir').val(tanggal_akhir);
                $('#nomor').val(nomor);
                $('#perihal').val(perihal);
                $('#keterangan').val(keterangan);
                $('#ttd_1').val(ttd_1);
                $('#ttd_2').val(ttd_2);
                $('#media').val(media);
                
                $('#edit_form').attr('action', '/operator/edit/sekretariat/kerja_sama/' + id);
          })
      </script>
@endpush