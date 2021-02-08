@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA JURNAL / MAJALAH</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
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
                    <th>UNIT/SATKER</th>
                    <th>INFO PRODUK</th>
                    <th>MEDIA</th>
                    <th>EDIT/HAPUS</th>
                </tr>
            </thead>

            <tbody>

              @forelse ($jurnal as $key => $a)
                  <tr>
                      <td>{{ $key + 1}}</td>
                      <td>{{ $a -> kategori}}</td>
                      <td>{{ $a -> judul}}</td>
                      <td>{{ $a -> tim_redaksi}}</td>
                      <td>{{ $a -> volume}}</td>
                      <td>{{ $a -> no_issn}}</td>
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
                                data-volume="{{ $a->volume }}"
                                data-no_issn="{{ $a->no_issn }}"
                                data-lingkup="{{ $a->lingkup }}"
                                data-penerbit="{{ $a->penerbit }}"
                                data-keterangan="{{ $a->keterangan }}"
                                data-info_produk="{{ $a->info_produk }}"
                                data-media="{{ $a->media }}"
                            >Edit</button>

                          <a class="hapus" href="{{ url('/operator/edit/kebahasaan/jurnal/hapus/' . $a->id) }}" data-toggle="tooltip" onclick="return konfirmasi()" id="pesan">Hapus</a>
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
              <form>

                <div class="inputfield-select">
                    <label>Kategori*</label>
                    <div class="custom_select">
                      <select>
                        <option value="">JURNAL</option>
                        <option value="">MAJALAH</option>
                      </select>
                    </div>
                </div> 
        
                <div class="inputfield">
                    <label>Judul*</label>
                    <input type="text" class="input">
                </div> 
        
                <div class="inputfield">
                    <label>Tim Redaksi*</label>
                    <input type="text" class="input">
                </div> 
        
                <div class="inputfield">
                    <label>Volume</label>
                    <input type="text" class="input">
                </div> 
        
                <div class="inputfield">
                    <label>No.ISSN</label>
                    <input type="text" class="input">
                </div> 
        
                <div class="inputfield-select">
                    <label>Lingkup*</label>
                    <div class="custom_select">
                      <select>
                        <option value="">DAERAH</option>
                        <option value="">NASIONAL</option>
                        <option value="">INTERNASIONAL</option>
                      </select>
                    </div>
                </div> 
        
                <div class="inputfield">
                    <label>Penerbit</label>
                    <input type="text" class="input">
                </div> 
        
                <div class="inputfield">
                    <label>Tahun Terbit</label>
                    <input type="text" class="input">
                </div> 
        
                <div class="inputfield">
                    <label>Keterangan</label>
                    <textarea class="textarea"></textarea>
                </div>  
        
                <div class="inputfield-select">
                    <label>Info Produk</label>
                    <div class="custom_select">
                      <select>
                        <option value="">--Pilih Info--</option>
                        <option value="">Produk Pusat</option>
                        <option value="">Produk Balai/Kantor</option>
                        <option value="">Produk Luar</option>
                      </select>
                    </div>
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