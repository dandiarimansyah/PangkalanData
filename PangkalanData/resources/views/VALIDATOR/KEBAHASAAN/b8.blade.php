@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

<div class="isi-konten">

    <div class="judul">
        <th>VALIDASI DATA DUTA BAHASA PROVINSI</th>
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
            <button href="{{ URL('validator/kebahasaan/duta_bahasa_provinsi')}}" id="tombol_validasi" type="button" class="btn btn-success" style="border-radius: 5px">
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
                    <th>TAHUN</th>
                    <th>PROVINSI</th>
                    <th>PEMENANG I</th>
                    <th>PEMENANG II</th>
                    <th>PEMENANG III</th>
                    <th>FAVORIT</th>
                    <th>KETERANGAN</th>
                    <th>DOKUMEN</th>
                    <th>EDIT</th>
                    <th>VALIDASI</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($duta_provinsi as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tahun}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> pemenang_1_1}} <br> {{ $a -> pemenang_1_2}}</td>
                        <td>{{ $a -> pemenang_2_1}} <br> {{ $a -> pemenang_2_2}}</td>
                        <td>{{ $a -> pemenang_3_1}} <br> {{ $a -> pemenang_3_2}}</td>
                        <td>{{ $a -> favorit_1}} <br> {{ $a -> favorit_2}}</td>
                        <td>{{ $a -> keterangan}}</td>
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
                                data-provinsi="{{ $a->provinsi }}"
                                data-tahun="{{ $a->tahun }}"
                                data-pemenang_1_1="{{ $a->pemenang_1_1 }}"
                                data-pemenang_1_2="{{ $a->pemenang_1_2 }}"
                                data-pemenang_2_1="{{ $a->pemenang_2_1 }}"
                                data-pemenang_2_2="{{ $a->pemenang_2_2 }}"
                                data-pemenang_3_1="{{ $a->pemenang_3_1 }}"
                                data-pemenang_3_2="{{ $a->pemenang_3_2 }}"
                                data-favorit_1="{{ $a->favorit_1 }}"
                                data-favorit_2="{{ $a->favorit_2 }}"
                                data-keterangan="{{ $a->keterangan }}"
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


    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div id="modal-edit" class="modal-dialog" role="document">
          <div id="modal-content" class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA DUTA BAHASA PROVINSI</h5>
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
                    
                        <!-- <div class="alert-danger">{{ $errors->first('provinsi') }}</div>
                        <div class="inputfield-select">
                            <label>Asal Provinsi*</label>
                            <div class="custom_select">
                            <select id="provinsi" name="provinsi">
                                <option disabled="disabled" selected="selected" value="">-- Pilih Kategori --</option>
                                <option value="Jawa Tengah">Jawa Tengah</option>
                            </select>
                            </div>
                        </div>  -->

                        <div class="alert-danger">{{ $errors->first('tahun') }}</div>
                        <div class="inputfield">
                            <label>Tahun</label>
                            <input id="tahun" name="tahun" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('pemenang_1_1') }}</div>
                        <div class="inputfield">
                            <label>Pemenang I (1)</label>
                            <input id="pemenang_1_1" name="pemenang_1_1" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('pemenang_1_2') }}</div>
                        <div class="inputfield">
                            <label>Pemenang I (2)</label>
                            <input id="pemenang_1_2" name="pemenang_1_2" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('pemenang_2_1') }}</div>
                        <div class="inputfield">
                            <label>Pemenang II (1)</label>
                            <input id="pemenang_2_1" name="pemenang_2_1" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('pemenang_2_2') }}</div>
                        <div class="inputfield">
                            <label>Pemenang II (2)</label>
                            <input id="pemenang_2_2" name="pemenang_2_2" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('pemenang_3_1') }}</div>
                        <div class="inputfield">
                            <label>Pemenang III (1)</label>
                            <input id="pemenang_3_1" name="pemenang_3_1" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('pemenang_3_2') }}</div>
                        <div class="inputfield">
                            <label>Pemenang III (2)</label>
                            <input id="pemenang_3_2" name="pemenang_3_2" type="text" class="input">
                        </div>

                        <div class="alert-danger">{{ $errors->first('favorit_1') }}</div>
                        <div class="inputfield">
                            <label>Favorit 1</label>
                            <input id="favorit_1" name="favorit_1" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('favorit_2') }}</div>
                        <div class="inputfield">
                            <label>Favorit 2</label>
                            <input id="favorit_2" name="favorit_2" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('keterangan') }}</div>
                        <div class="inputfield">
                            <label>Keterangan</label>
                            <textarea id="keterangan" name="keterangan" class="textarea"></textarea>
                        </div>  
<!-- 
                        <div class="inputfield-kecil">
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
               let provinsi = $(this).data('provinsi');

                let tahun = $(this).data('tahun');
                let pemenang_1_1 = $(this).data('pemenang_1_1');
                let pemenang_1_2 = $(this).data('pemenang_1_2');
                let pemenang_2_1 = $(this).data('pemenang_2_1');
                let pemenang_2_2 = $(this).data('pemenang_2_2');
                let pemenang_3_1 = $(this).data('pemenang_3_1');
                let pemenang_3_2 = $(this).data('pemenang_3_2');
                let favorit_1 = $(this).data('favorit_1');
                let favorit_2 = $(this).data('favorit_2');
                let keterangan = $(this).data('keterangan');
                // let media = $(this).data('media');

                let id = $(this).data('id');

                $('#provinsi option').filter(function(){
                    return ($(this).val() == provinsi)
                }).prop('selected', true);

                $('#tahun').val(tahun);
                $('#pemenang_1_1').val(pemenang_1_1);
                $('#pemenang_1_2').val(pemenang_1_2);
                $('#pemenang_2_1').val(pemenang_2_1);
                $('#pemenang_2_2').val(pemenang_2_2);
                $('#pemenang_3_1').val(pemenang_3_1);
                $('#pemenang_3_2').val(pemenang_3_2);
                $('#favorit_1').val(favorit_1);
                $('#favorit_2').val(favorit_2);
                $('#keterangan').val(keterangan);
                // $('#media').val(media);
                
                $('#edit_form').attr('action', '/operator/edit/kebahasaan/duta_bahasa_provinsi/' + id);
          })
      </script>
@endpush