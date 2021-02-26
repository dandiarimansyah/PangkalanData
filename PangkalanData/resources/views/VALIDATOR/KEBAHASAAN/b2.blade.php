@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

<div class="isi-konten">

    <div class="judul">
        <th>VALIDASI DATA JURNAL / MAJALAH</th>
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
            <button href="{{ URL('validator/kebahasaan/jurnal_majalah')}}" id="tombol_validasi" type="button" class="btn btn-success" style="border-radius: 5px">
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
                    <th>JUDUL</th>
                    <th>VOLUME</th>
                    <th>TIM REDAKSI</th>
                    <th>ISSN</th>
                    <th>PENERBIT</th>
                    <th>LINGKUP</th>
                    <th>KETERANGAN</th>
                    <!-- <th>UNIT/SATKER</th> -->
                    <th>INFO PRODUK</th>
                    <th>DOKUMEN</th>
                    <th>EDIT</th>
                    <th>VALIDASI</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($jurnal as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> kategori}}</td>
                        <td>{{ $a -> judul}}</td>
                        <td>{{ $a -> volume}}</td>
                        <td>{{ $a -> tim_redaksi}}</td>
                        <td>{{ $a -> no_issn}}</td>
                        <td>{{ $a -> penerbit}}</td>
                        <td>{{ $a -> lingkup}}</td>
                        <!-- <td>{{ $a -> tahun_terbit}}</td> -->
                        <td>{{ $a -> keterangan}}</td>
                        <td>{{ $a -> info_produk}}</td>
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
                                data-judul="{{ $a->judul }}"
                                data-tim_redaksi="{{ $a->tim_redaksi }}"
                                data-volume="{{ $a->volume }}"
                                data-no_issn="{{ $a->no_issn }}"
                                data-lingkup="{{ $a->lingkup }}"
                                data-penerbit="{{ $a->penerbit }}"
                                data-tahun_terbit="{{ $a->tahun_terbit }}"
                                data-keterangan="{{ $a->keterangan }}"
                                data-info_produk="{{ $a->info_produk }}"
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
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA JURNAL / MAJALAH</h5>
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
                              <option value="JURNAL">JURNAL</option>
                              <option value="MAJALAH">MAJALAH</option>
                            </select>
                          </div>
                      </div> 

                      <div class="alert-danger">{{ $errors->first('judul') }}</div>
                      <div class="inputfield">
                          <label>Judul*</label>
                          <input id="judul" name="judul" type="text" class="input">
                      </div> 

                      <div class="alert-danger">{{ $errors->first('tim_redaksi') }}</div>
                      <div class="inputfield">
                          <label>Tim Redaksi*</label>
                          <input id="tim_redaksi" name="tim_redaksi" type="text" class="input">
                      </div> 

                      <div class="alert-danger">{{ $errors->first('volume') }}</div>
                      <div class="inputfield">
                          <label>Volume</label>
                          <input id="volume" name="volume" type="text" class="input">
                      </div> 

                      <div class="alert-danger">{{ $errors->first('no_issn') }}</div>
                      <div class="inputfield">
                          <label>No.ISSN</label>
                          <input id="no_issn" name="no_issn" type="text" class="input">
                      </div> 

                      <div class="alert-danger">{{ $errors->first('lingkup') }}</div>
                      <div class="inputfield-select">
                          <label>Lingkup*</label>
                          <div class="custom_select">
                            <select id="lingkup" name="lingkup">
                              <option value="DAERAH">DAERAH</option>
                              <option value="NASIONAL">NASIONAL</option>
                              <option value="INTERNASIONAL">INTERNASIONAL</option>
                            </select>
                          </div>
                      </div> 

                      <div class="alert-danger">{{ $errors->first('penerbit') }}</div>
                      <div class="inputfield">
                          <label>Penerbit</label>
                          <input id="penerbit" name="penerbit" type="text" class="input">
                      </div> 

                      <!-- <div class="alert-danger">{{ $errors->first('tahun_terbit') }}</div>
                      <div class="inputfield">
                          <label>Tahun Terbit</label>
                          <input id="tahun_terbit" name="tahun_terbit" type="text" class="input">
                      </div>  -->

                      <div class="inputfield">
                          <label>Keterangan</label>
                          <textarea id="keterangan" name="keterangan" class="textarea"></textarea>
                      </div>  

                      <div class="alert-danger">{{ $errors->first('info_produk') }}</div>
                      <div class="inputfield-select">
                          <label>Info Produk</label>
                          <div class="custom_select">
                            <select id="info_produk" name="info_produk">
                              <option selected disabled value="">--Pilih Info--</option>
                              <option value="Produk Pusat">Produk Pusat</option>
                              <option value="Produk Balai/Kantor">Produk Balai/Kantor</option>
                              <option value="Produk Luar">Produk Luar</option>
                            </select>
                          </div>
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
                let lingkup = $(this).data('lingkup');
                let info_produk = $(this).data('info_produk');

                let judul = $(this).data('judul');
                let tim_redaksi = $(this).data('tim_redaksi');
                let volume = $(this).data('volume');
                let no_issn = $(this).data('no_issn');
                let penerbit = $(this).data('penerbit');
                // let tahun_terbit = $(this).data('tahun_terbit');
                let keterangan = $(this).data('keterangan');

                let id = $(this).data('id');

                $('#kategori option').filter(function(){
                    return ($(this).val() == kategori)
                }).prop('selected', true);

                $('#lingkup option').filter(function(){
                    return ($(this).val() == lingkup)
                }).prop('selected', true);

                $('#info_produk option').filter(function(){
                    return ($(this).val() == info_produk)
                }).prop('selected', true);

                $('#judul').val(judul);
                $('#tim_redaksi').val(tim_redaksi);
                $('#volume').val(volume);
                $('#no_issn').val(no_issn);
                $('#penerbit').val(penerbit);
                // $('#tahun_terbit').val(tahun_terbit);
                $('#keterangan').val(keterangan);
                
                $('#edit_form').attr('action', '/operator/edit/kebahasaan/jurnal_majalah/' + id);
          })
      </script>
@endpush