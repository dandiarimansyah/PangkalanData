@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA KAMUS / ENSIKLOPEDIA</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KATEGORI</th>
                    <th>JUDUL</th>
                    <th>EDISI</th>
                    <th>TIM REDAKSI</th>
                    <th>ISBN</th>
                    <th>PENERBIT</th>
                    <th>LINGKUP</th>
                    <th>KETERANGAN</th>
                    <th>UNIT/SATKER</th>
                    <th>INFO PRODUK</th>
                    <th>MEDIA</th>
                    <th>EDIT/HAPUS</th>
                </tr>
            </thead>

            <tbody>

              @forelse ($kamus as $key => $a)
                  <tr>
                      <td>{{ $key + 1}}</td>
                      <td>{{ $a -> kategori}}</td>
                      <td>{{ $a -> judul}}</td>
                      <td>{{ $a -> tim_redaksi}}</td>
                      <td>{{ $a -> edisi}}</td>
                      <td>{{ $a -> no_isbn}}</td>
                      <td>{{ $a -> lingkup}}</td>
                      <td>{{ $a -> penerbit}}</td>
                      <td>{{ $a -> tahun_terbit}}</td>
                      <td>{{ $a -> keterangan}}</td>
                      <td>{{ $a -> info_produk}}</td>
                      <td></td>

                      <td style="display: flex; justify-content:center">
                          <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-kategori="{{ $a->kategori }}"
                                data-judul="{{ $a->judul }}"
                                data-tim_redaksi="{{ $a->tim_redaksi }}"
                                data-edisi="{{ $a->edisi }}"
                                data-no_isbn="{{ $a->no_isbn }}"
                                data-lingkup="{{ $a->lingkup }}"
                                data-penerbit="{{ $a->penerbit }}"
                                data-tahun_terbit="{{ $a->tahun_terbit }}"
                                data-keterangan="{{ $a->keterangan }}"
                                data-info_produk="{{ $a->info_produk }}"
                                data-media="{{ $a->media }}"
                            >Edit</button>

                          <a class="hapus" href="{{ url('/operator/edit/kebahasaan/Kamus/hapus/' . $a->id) }}" data-toggle="tooltip" onclick="return konfirmasi()" id="pesan">Hapus</a>
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

    <!-- EDIT MODAL -->
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
                          <label>Kategori*</label>
                          <div class="custom_select">
                            <select name="kategori">
                              <option value="KAMUS">KAMUS</option>
                              <option value="ENSIKLOPEDIA">ENSIKLOPEDIA</option>
                              <option value="TESAURUS">TESAURUS</option>
                              <option value="GLOSARIUM">GLOSARIUM</option>
                              <option value="LEMA">LEMA</option>
                            </select>
                          </div>
                      </div> 

                      <div class="alert-danger">{{ $errors->first('judul') }}</div>
                      <div class="inputfield">
                          <label>Judul*</label>
                          <input name="judul" type="text" class="input">
                      </div> 

                      <div class="alert-danger">{{ $errors->first('tim_redaksi') }}</div>
                      <div class="inputfield">
                          <label>Tim Redaksi*</label>
                          <input name="tim_redaksi" type="text" class="input">
                      </div> 

                      <div class="alert-danger">{{ $errors->first('edisi') }}</div>
                      <div class="inputfield">
                          <label>Edisi</label>
                          <input name="edisi" type="text" class="input">
                      </div> 

                      <div class="alert-danger">{{ $errors->first('no_isbn') }}</div>
                      <div class="inputfield">
                          <label>No.ISBN</label>
                          <input name="no_isbn" type="text" class="input">
                      </div> 

                      <div class="alert-danger">{{ $errors->first('lingkup') }}</div>
                      <div class="inputfield-select">
                          <label>Lingkup*</label>
                          <div class="custom_select">
                            <select name="lingkup">
                              <option value="DAERAH">DAERAH</option>
                              <option value="NASIONAL">NASIONAL</option>
                              <option value="INTERNASIONAL">INTERNASIONAL</option>
                            </select>
                          </div>
                      </div> 

                      <div class="alert-danger">{{ $errors->first('penerbit') }}</div>
                      <div class="inputfield">
                          <label>Penerbit</label>
                          <input name="penerbit" type="text" class="input">
                      </div> 

                      <div class="alert-danger">{{ $errors->first('tahun_terbit') }}</div>
                      <div class="inputfield">
                          <label>Tahun Terbit</label>
                          <input name="tahun_terbit" type="text" class="input">
                      </div> 

                      <div class="inputfield">
                          <label>Keterangan</label>
                          <textarea name="keterangan" class="textarea"></textarea>
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