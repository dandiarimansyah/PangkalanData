@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA TERBITAN UMUM</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KATEGORI</th>
                    <th>JUDUL</th>
                    <th>PENULIS</th>
                    <th>ISBN</th>
                    <th>TAHUN TERBIT</th>
                    <th>DESKRIPSI FISIK</th>
                    <th>UNIT/SATKER</th>
                    <th>INFO PRODUK</th>
                    <th>MEDIA</th>
                    <th>EDIT/MEDIA</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($terbitan_umum as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> kategori}}</td>
                        <td>{{ $a -> judul}}</td>
                        <td>{{ $a -> penulis}}</td>
                        <td>{{ $a -> no_isbn}}</td>
                        <td>{{ $a -> tahun_terbit}}</td>
                        <td>{{ $a -> deskripsi}}</td>
                        <td>{{ $a -> info_produk}}</td>
                        <td></td>
                        <td></td>
                        
                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-kategori="{{ $a->kategori }}"
                                data-judul="{{ $a->judul }}"
                                data-penulis="{{ $a->penulis }}"
                                data-no_isbn="{{ $a->no_isbn }}"
                                data-tahun_terbit="{{ $a->tahun_terbit }}"
                                data-deskripsi="{{ $a->deskripsi }}"
                                data-info_produk="{{ $a->info_produk }}"
                                data-media="{{ $a->media }}"
                            >Edit</button>

                            <a class="hapus" href="{{ url('/operator/edit/kebahasaan/terbitan_umum/hapus/' . $a->id) }}" data-toggle="tooltip" onclick="return konfirmasi()" id="pesan">Hapus</a>
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
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
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
                            <label>Kategori Terbitan*</label>
                            <div class="custom_select">
                            <select name="kategori">
                                <option value="Bahasa">Bahasa</option>
                                <option value="Sastra">Sastra</option>
                            </select>
                            </div>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('judul') }}</div>
                        <div class="inputfield">
                            <label>Judul*</label>
                            <input name="judul" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('penulis') }}</div>
                        <div class="inputfield">
                            <label>Penulis</label>
                            <input name="penulis" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('no_isbn') }}</div>
                        <div class="inputfield">
                            <label>No.ISBN</label>
                            <input name="no_isbn" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('tahun_terbit') }}</div>
                        <div class="inputfield">
                            <label>Tahun Terbit</label>
                            <input name="tahun_terbit" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('deskripsi') }}</div>
                        <div class="inputfield">
                            <label>Deskripsi Fisik</label>
                            <textarea name="deskripsi" class="textarea"></textarea>
                        </div>  

                        <div class="alert-danger">{{ $errors->first('info_produk') }}</div>
                        <div class="inputfield-select">
                            <label>Info Produk</label>
                            <div class="custom_select">
                            <select name="info_produk">
                                <option disabled="disabled" selected="selected" value="">--Pilih Info--</option>
                                <option value="Produk Pusat">Produk Pusat</option>
                                <option value="Produk Balai/Kantor">Produk Balai/Kantor</option>
                                <option value="Produk Luar">Produk Luar</option>
                            </select>
                            </div>
                        </div> 

                        <div class="inputfield-kecil">
                        <label for="">Unggah Media</label>
                        <input type="file" name="media">
                        </div>
                        
                        <div class="tombol">
                        <input type="reset" value="Ulangi" class="reset">
                        <input type="submit" value="Simpan" class="inputan">
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

@endsection

@push('scripts')
      <script>

          $(document).on('click','#edit_item',function(){
                let unit = $(this).data('unit');
                let tahun_anggaran = $(this).data('tahun_anggaran');
                let nilai_anggaran = $(this).data('nilai_anggaran');
                let id = $(this).data('id');

                $('#unit option').filter(function(){
                    return ($(this).val() == unit)
                }).prop('selected', true);

                $('#tahun_anggaran').val(tahun_anggaran);
                $('#nilai_anggaran').val(nilai_anggaran);
                
                $('#edit_form').attr('action', '/operator/edit/sekretariat/anggaran/' + id);
          })
      </script>
@endpush