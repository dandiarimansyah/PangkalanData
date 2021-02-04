@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA PENGHARGAAN SATRA</th>
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
                    <th>TAHUN</th>
                    <th>DESKRIPSI</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-modal">Edit</button>
                    </td>
                    <td>Anugerah Tokoh Kesastraan</td>
                    <td>2017</td>
                    <td>Penerima Prasidatama 2017

 

Tokoh bahasa dan sastra Indonesia
Penerima: Sosiawan Leak untuk

Nomine: Handry Tm dan Mukti Sutarman Espe

Tokoh bahasa dan sastra Jawa
Penerima: Triman Laksana

Nomine: Sucipto Hadi Purnomo dan Hadi Utomo

Tokoh penggiat bahasa dan sastra Indonesia
Penerima: Bandung Mawardi

Nomine: Bandung Mawardi dan Adin Hysteria

Penggiat bahasa dan sastra
Penerima: Jawa Sayuti Anggoro

Nomine: RMA Sudijatmana dan Wanto Tirto
Pendidik peduli bahasa dan sastra
Penerima: S. Prasetyo Uyomo

Nomine: Sawali Tuhu Setya dan Sus S.Hardjono
Penggiat sastra panggung 
Penerima: Gigok Anurogo

Nomine: Thomas Haryanto Sukiran dan Eko Tunas</td>
                </tr>
                <tr>
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
                            <option value="">-- Pilih Kategori--</option>
                            <option value="">Acarya Sastra</option>
                            <option value="">Taruna Sastra</option>
                            <option value="">Anugrah Tokoh Kesastraan</option>
                            <option value="">Sastra Badan Bahasa</option>
                            <option value="">Sea Write Awards</option>
                            <option value="">Sayembara Menulis</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield-kecil">
                        <label>Tahun</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Deskripsi</label>
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