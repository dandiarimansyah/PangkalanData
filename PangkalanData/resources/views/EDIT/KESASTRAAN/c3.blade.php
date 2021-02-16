@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

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
        <th>EDIT DATA MUSIKALISASI PUISI NASIONAL</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TAHUN</th>
                    <th>PEMENANG I</th>
                    <th>PEMENANG II</th>
                    <th>PEMENANG III</th>
                    <th>FAVORIT</th>
                    <th>KETERANGAN</th>
                    <!-- <th>MEDIA</th> -->
                    <th>EDIT/HAPUS</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($musikalisasi_puisi_nasional as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tahun}}</td>
                        <td>{{ $a -> pemenang_1}}</td>
                        <td>{{ $a -> pemenang_2}}</td>
                        <td>{{ $a -> pemenang_3}}</td>
                        <td>{{ $a -> favorit}}</td>
                        <td>{{ $a -> keterangan}}</td>
                        <!-- <td></td> -->

                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-tahun="{{ $a->tahun }}"
                                data-pemenang_1="{{ $a->pemenang_1 }}"
                                data-pemenang_2="{{ $a->pemenang_2 }}"
                                data-pemenang_3="{{ $a->pemenang_3 }}"
                                data-favorit="{{ $a->favorit }}"
                                data-keterangan="{{ $a->keterangan }}"
                            >Edit</button>

                            <a class="hapus" href="{{ url('/operator/edit/kesastraan/musikalisasi_puisi_nasional/hapus/' . $a->id) }}" data-toggle="tooltip"  id="pesan">Hapus</a>
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
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA MUSIKALISASI PUISI NASIONAL</h5>
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
                    
                        <div class="alert-danger">{{ $errors->first('tahun') }}</div>
                        <div class="inputfield-kecil">
                            <label>Tahun</label>
                            <input id="tahun" name="tahun" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('pemenang_1') }}</div>
                        <div class="inputfield">
                            <label>Pemenang I</label>
                            <input id="pemenang_1" name="pemenang_1" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('pemenang_2') }}</div>
                        <div class="inputfield">
                            <label>Pemenang II</label>
                            <input id="pemenang_2" name="pemenang_2" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('pemenang_3') }}</div>
                        <div class="inputfield">
                            <label>Pemenang III</label>
                            <input id="pemenang_3" name="pemenang_3" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('favorit') }}</div>
                        <div class="inputfield">
                            <label>Favorit</label>
                            <input id="favorit" name="favorit" type="text" class="input">
                        </div>     

                        <div class="alert-danger">{{ $errors->first('keterangan') }}</div>
                        <div class="inputfield">
                            <label>Keterangan</label>
                            <textarea id="keterangan" name="keterangan" class="textarea"></textarea>
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
                let tahun = $(this).data('tahun');
                let pemenang_1 = $(this).data('pemenang_1');
                let pemenang_2 = $(this).data('pemenang_2');
                let pemenang_3 = $(this).data('pemenang_3');
                let favorit = $(this).data('favorit');
                let keterangan = $(this).data('keterangan');
                // let media = $(this).data('media');

                let id = $(this).data('id');

                $('#tahun').val(tahun);
                $('#pemenang_1').val(pemenang_1);
                $('#pemenang_2').val(pemenang_2);
                $('#pemenang_3').val(pemenang_3);
                $('#favorit').val(favorit);
                $('#keterangan').val(keterangan);
                // $('#media').val(media);
                
                $('#edit_form').attr('action', '/operator/edit/kesastraan/musikalisasi_puisi_nasional/' + id);
          })
      </script>
@endpush