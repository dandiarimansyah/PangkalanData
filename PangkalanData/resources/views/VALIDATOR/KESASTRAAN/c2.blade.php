@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

<div class="isi-konten">

    <div class="judul">
        <th>VALIDASI DATA PENGHARGAAN SATRA</th>
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
            <button href="{{ URL('validator/kesastraan/penghargaan_sastra')}}" id="tombol_validasi" type="button" class="btn btn-success" style="border-radius: 5px">
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
                    <th>KATEGORI</th>
                    <th>TAHUN</th>
                    <th>DESKRIPSI</th>
                    <th>EDIT</th>
                    <th>VALIDASI</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($penghargaan_sastra as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> kategori}}</td>
                        <td>{{ $a -> tahun}}</td>
                        <td>{{ $a -> deskripsi}}</td>

                        <td style="display: flex; justify-content:center">
                        <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-kategori="{{ $a->kategori }}"
                                data-tahun="{{ $a->tahun }}"
                                data-deskripsi="{{ $a->deskripsi }}"
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
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA PENGHARGAAN SATRA</h5>
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
                                <option disabled="disabled" selected="selected" value="">-- Pilih Kategori--</option>
                                <option value="Acarya Sastra">Acarya Sastra</option>
                                <option value="Taruna Sastra">Taruna Sastra</option>
                                <option value="Anugrah Tokoh Kesastraan">Anugrah Tokoh Kesastraan</option>
                                <option value="Sastra Badan Bahasa">Sastra Badan Bahasa</option>
                                <option value="Sea Write Awards">Sea Write Awards</option>
                                <option value="Sayembara Menulis">Sayembara Menulis</option>
                            </select>
                            </div>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('tahun') }}</div>
                        <div class="inputfield-kecil">
                            <label>Tahun</label>
                            <input id="tahun" name="tahun" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('deskripsi') }}</div>
                        <div class="inputfield">
                            <label>Deskripsi</label>
                            <textarea id="deskripsi" name="deskripsi" class="textarea"></textarea>
                        </div> 

                        <!-- <div class="inputfield-kecil">
                        <label for="">Unggah Media</label>
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

                let tahun = $(this).data('tahun');
                let deskripsi = $(this).data('deskripsi');
                
                let id = $(this).data('id');

                $('#kategori option').filter(function(){
                    return ($(this).val() == kategori)
                }).prop('selected', true);

                $('#tahun').val(tahun);
                $('#deskripsi').val(deskripsi);
                
                $('#edit_form').attr('action', '/operator/edit/kesastraan/penghargaan_sastra/' + id);
          })
      </script>
@endpush