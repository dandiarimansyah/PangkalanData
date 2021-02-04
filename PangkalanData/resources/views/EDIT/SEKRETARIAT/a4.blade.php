@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA KERJA SAMA</th>
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
                    <th>KOREKSI</th>
                    <th>TANGGAL KERJA SAMA</th>
                    <th>UNIT/SATUAN KERJA</th>
                    <th>INSTANSI</th>
                    <th>KATEGORI</th>
                    <th>NO. KERJA SAMA</th>
                    <th>PERIHAL</th>
                    <th>KETERANGAN</th>
                    <th>DITANDATANGANI</th>
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
                </tr>
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
                        <label>Kategori</label>
                        <div class="custom_select">
                        <select>
                            <option value="">Internal</option>
                            <option value="">Eksternal</option>
                        </select>
                        </div>
                    </div>

                    <div class="inputfield">
                        <label>Nama Instansi*</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Tanggal Kerja sama*</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Tanggal Berakhir</label>
                        <input type="text" class="input">
                    </div> 
                    
                    <div class="inputfield">
                        <label>No.Kerja sama</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Perihal</label>
                        <textarea class="textarea"></textarea>
                    </div>   

                    <div class="inputfield">
                        <label>Keterangan</label>
                        <textarea class="textarea"></textarea>
                    </div>   

                    <div class="inputfield">
                        <label>Ditandatangani Oleh (1)</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Instansi (1)</label>
                        <div class="custom_select" style="width: 100%">
                        <select>
                            <option value="">Badan Pengembangan Bahasa dan Perbukuan</option>
                            <option value="">Balai Bahasa Jawa Tengah</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield">
                        <label>Ditandatangani Oleh (2)</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Instansi (2)</label>
                        <div class="custom_select" style="width: 100%">
                        <select>
                            <option value="">Badan Pengembangan Bahasa dan Perbukuan</option>
                            <option value="">Balai Bahasa Jawa Tengah</option>
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