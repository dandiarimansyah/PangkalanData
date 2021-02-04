@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

    <div class="judul">
        <th>EDIT DATA MUSIKALISASI PUISI PROVINSI</th>
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
                    <th>TAHUN</th>
                    <th>PROVINSI</th>
                    <th>PEMENANG I</th>
                    <th>PEMENANG II</th>
                    <th>PEMENANG III</th>
                    <th>FAVORIT</th>
                    <th>KETERANGAN</th>
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
                        <label>Provinsi*</label>
                        <div class="custom_select">
                        <select>
                            <option value="">-- Pilih Provinsi--</option>
                            <option value="">Jawa Tengah</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield-kecil">
                        <label>Tahun</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Pemenang I</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Pemenang II</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Pemenang III</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Favorit</label>
                        <input type="text" class="input">
                    </div>     

                    <div class="inputfield">
                        <label>Keterangan</label>
                        <textarea class="textarea"></textarea>
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