@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA INVENTARISASI BARANG MILIK NEGARA</th>
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
                    <th rowspan="2">NO</th>
                    <th rowspan="2">EDIT</th>
                    <th rowspan="2">TANGGAL DIPERBAHARUI</th>
                    <th rowspan="2">BALAI/KANTOR</th>
                    <th rowspan="2">TAHUN ANGGARAN</th>
                    <th colspan="8">ELEKTRONIK</th>
                    <th rowspan="2">FURNITURE</th>
                    <th colspan="3">KENDARAAN</th>
                </tr>
                <tr>
                    <th>LAPTOP</th>
                    <th>KOMPUTER</th>
                    <th>PRINTER</th>
                    <th>FOTOCOPY</th>
                    <th>FAXIMILI</th>
                    <th>LCD PROJECTOR</th>
                    <th>TV</th>
                    <th>LAIN-LAIN</th>
                    <th>RODA 2</th>
                    <th>RODA 4</th>
                    <th>RODA 6</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-modal">Edit</button>
                    </td>
                    <td>11-12-2018</td>
                    <td>Balai Bahasa Provinsi Jawa Tengah</td>
                    <td>2018</td>
                    <td>13</td>
                    <td>46</td>
                    <td>29</td>
                    <td>1</td>
                    <td>1</td>
                    <td>7</td>
                    <td>1</td>
                    <td>0</td>
                    <td>437</td>
                    <td>3</td>
                    <td>1</td>
                    <td>0</td>
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
                        <label>Unit/Satuan Kerja*</label>
                        <div class="custom_select">
                        <select>
                            <option value="">Balai Bahasa Jawa Tengah</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield">
                        <label>Tahun Anggaran*</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="row">
                        <div class="col">
                            <div class="inputfield" style="margin: 25px 0 0 0; font-weight:bold" >
                                <label >Barang Elektronik</label>
                            </div> 
                            
                            <div class="inputfield-list">
                                <li> <label>Laptop</label> </li>
                                <input type="text" class="input">
                            </div> 

                            <div class="inputfield-list">
                                <li> <label>Komputer</label> </li>
                                <input type="text" class="input">
                            </div> 
                        
                            <div class="inputfield-list">
                                <li> <label>Printer</label> </li>
                                <input type="text" class="input">
                            </div> 

                            <div class="inputfield-list">
                                <li> <label>Fotocopy</label> </li>
                                <input type="text" class="input">
                            </div> 

                            <div class="inputfield-list">
                                <li> <label>Faximili</label> </li>
                                <input type="text" class="input">
                            </div> 

                            <div class="inputfield-list">
                                <li> <label>LCD Projector</label> </li>
                                <input type="text" class="input">
                            </div> 

                            <div class="inputfield-list">
                                <li> <label>TV</label> </li>
                                <input type="text" class="input">
                            </div> 

                            <div class="inputfield-list">
                                <li> <label>Lain-Lain</label> </li>
                                <input type="text" class="input">
                            </div> 
                        </div>

                        <div class="col">
                            <div class="inputfield" style="margin: 25px 0 0 0; font-weight:bold" >
                                <label >Furniture/Meubelair</label>
                            </div> 
                            <div class="inputfield-list">
                                <li> <label>Jumlah Furniture</label> </li>
                                <input type="text" class="input">
                            </div> 

                            <div class="inputfield" style="margin: 25px 0 0 0; font-weight:bold" >
                                <label >Kendaraan</label>
                            </div> 

                            <div class="inputfield-list">
                                <li> <label>Roda Dua</label> </li>
                                <input type="text" class="input">
                            </div> 

                            <div class="inputfield-list">
                                <li> <label>Roda Empat</label> </li>
                                <input type="text" class="input">
                            </div> 

                            <div class="inputfield-list">
                                <li> <label>Roda Enam</label> </li>
                                <input type="text" class="input">
                            </div> 
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