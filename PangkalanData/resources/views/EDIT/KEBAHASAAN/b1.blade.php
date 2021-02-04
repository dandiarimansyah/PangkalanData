@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA KAMUS / ENSIKLOPEDIA</th>
    </div>

    <!-- <div class="menu" style="display:flex; justify-content:center">
        <div class="btn-group kategori">
            <a  type="button" class="btn btn-info" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false" href="/operator/edit">
                KEMBALI KE MENU EDIT
            </a>
        </div>
    </div> -->

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>EDIT</th>
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
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td></td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-modal">Edit</button>
                    </td>
                    <td></td>
                    <td>Kancil</td>
                    <td>Terbaru</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
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
              <form>

                <div class="inputfield-select">
                    <label>Kategori*</label>
                    <div class="custom_select">
                      <select>
                        <option value="">KAMUS</option>
                        <option value="">ENSIKLOPEDIA</option>
                        <option value="">TESAURUS</option>
                        <option value="">GLOSARIUM</option>
                        <option value="">LEMA</option>
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
                    <label>Edisi</label>
                    <input type="text" class="input">
                </div> 
        
                <div class="inputfield">
                    <label>No.ISBN</label>
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

@push('scripts')
@endpush