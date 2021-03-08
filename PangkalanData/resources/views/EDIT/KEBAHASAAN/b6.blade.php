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
        <th>EDIT DATA PENGHARGAAN BAHASA</th>
    </div>
    
    <div class="input-baru">
        <a href="{{ URL("/operator/input/kebahasaan/penghargaan_bahasa")}}" type="button" class="btn btn-primary">
            <i style="margin-right: 4px" class="fa fa-file-text-o" aria-hidden="true"></i>
            INPUT DATA BARU
        </a>
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
                    <th>EDIT/HAPUS</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($penghargaan_bahasa as $key => $a)
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
                            <a class="hapus" href="{{ url('/operator/edit/kebahasaan/penghargaan_bahasa/hapus/' . $a->id) }}" data-toggle="tooltip"  id="pesan">Hapus</a>
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
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA PENGHARGAAN BAHASA</h5>
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
                            <label>Kategori*</label>
                            <div class="custom_select">
                            <select id="kategori" name="kategori">
                                <option disabled="disabled" selected="selected" value="">-- Pilih Kategori --</option>
                                <option value="Anugerah Toko Kebahasaan">Anugerah Toko Kebahasaan</option>
                                <option value="Adibahasa">Adibahasa</option>
                                <option value="Taruna Bahasa">Taruna Bahasa</option>
                                <option value="Wajah Bahasa">Wajah Bahasa</option>
                            </select>
                            </div>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('tahun') }}</div>
                        <div class="inputfield">
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
                let kategori = $(this).data('kategori');

                let tahun = $(this).data('tahun');
                let deskripsi = $(this).data('deskripsi');
                let media = $(this).data('media');

                let id = $(this).data('id');

                $('#kategori option').filter(function(){
                    return ($(this).val() == kategori)
                }).prop('selected', true);

                $('#tahun').val(tahun);
                $('#deskripsi').val(deskripsi);
                $('#media').val(media);
                
                $('#edit_form').attr('action', '/operator/edit/kebahasaan/penghargaan_bahasa/' + id);
          })
      </script>
@endpush