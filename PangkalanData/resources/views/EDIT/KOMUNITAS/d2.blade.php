@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA KOMUNITAS SASTRA</th>
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
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>KECAMATAN</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>PROVINSI</th>
                    <th>KOORDINAT</th>
                    <th>KETERANGAN</th>
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
                    
                    <div class="inputfield">
                        <label>Nama Komunitas</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield-select">
                        <label>Provinsi*</label>
                        <div class="custom_select">
                        <select>
                            <option value="">-- Pilih Provinsi--</option>
                            <option value="">Jawa Tengah</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield-select">
                        <label>Kabupaten/Kota*</label>
                        <div class="custom_select">
                        <select>
                            <option value="">-- Pilih Kabupaten/Kota--</option>
                            <option value="">Kabupaten Cilacap</option>
                            <option value="">Kabupaten Banyumas</option>
                            <option value="">Kabupaten Purbalingga</option>
                            <option value="">Kabupaten Banjarnegara</option>
                            <option value="">Kabupaten Kebumen</option>
                            <option value="">Kabupaten Purworejo</option>
                            <option value="">Kabupaten Wonosobo</option>
                            <option value="">Kabupaten Magelang</option>
                            <option value="">Kabupaten Boyolali</option>
                            <option value="">Kabupaten Klaten</option>
                            <option value="">Kabupaten Sukoharjo</option>
                            <option value="">Kabupaten Wonogiri</option>
                            <option value="">Kabupaten Karanganyar</option>
                            <option value="">Kabupaten Sragen</option>
                            <option value="">Kabupaten Grobogan</option>
                            <option value="">Kabupaten Blora</option>
                            <option value="">Kabupaten Rembang</option>
                            <option value="">Kabupaten Pati</option>
                            <option value="">Kabupaten Kudus</option>
                            <option value="">Kabupaten Jepara</option>
                            <option value="">Kabupaten Demak</option>
                            <option value="">Kabupaten Semarang</option>
                            <option value="">Kabupaten Temanggung</option>
                            <option value="">Kabupaten Kendal</option>
                            <option value="">Kabupaten Batang</option>
                            <option value="">Kabupaten Pekalongan</option>
                            <option value="">Kabupaten Pemalang</option>
                            <option value="">Kabupaten Tegal</option>
                            <option value="">Kabupaten Brebes</option>
                            <option value="">Kota Magelang</option>
                            <option value="">Kota Surakarta</option>
                            <option value="">Kota Salatiga</option>
                            <option value="">Kota Semarang</option>
                            <option value="">Kota Pekalongan</option>
                            <option value="">Kota Tegal</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield">
                        <label>Kecamatan</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Alamat</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield-kecil">
                        <label>Koordinat</label>
                        <input type="text" class="input" style="width: 200px">
                        <a href="https://www.google.co.id/maps">Buka Maps</a>
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