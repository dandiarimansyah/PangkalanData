@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

    <div class="judul">
        <th>EDIT DATA INVENTARISASI TANAH DAN BANGUNAN BALAI/KANTOR BAHASA</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center">
        <div class="btn-group kategori">
            <a  type="button" class="btn btn-info" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false" href="/operator/edit">
                KEMBALI KE MENU EDIT
            </a>
        </div>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">KOREKSI</th>
                    <th rowspan="2">TANGGAL DATA</th>
                    <th rowspan="2">BALAI/KANTOR</th>
                    <th colspan="2">TANAH</th>
                    <th colspan="2">BANGUNAN</th>
                    <th rowspan="2">KONDISI</th>
                    <th rowspan="2">STATUS PEMEROLEHAN</th>
                    <th rowspan="2">KETERANGAN</th>
                    <th rowspan="2">MEDIA</th>
                </tr>
                <tr>
                    <th>STATUS</th>
                    <th>SERTIFIKAT</th>
                    <th>STATUS</th>
                    <th>IMB</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-modal">Edit</button>
                    </td>
                    <td>11-12-2018</td>
                    <td>Balai Bahasa Jawa Tengah Jalan Elang raya nomor 1, Mangunharjo, Tembalang, Semarang, Jawa Tengah</td>
                    <td>PINJAM PAKAI</td>
                    <td>TIDAK ADA/-</td>
                    <td>MILIK SENDIRI</td>
                    <td>ADA/ASLI</td>
                    <td>Baik</td>
                    <td>Baik</td>
                    <td>Status tanah pinjam pakai sampai dengan tahun 2021</td>
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
                      <label>	Balai/Kantor*</label>
                      <div class="custom_select">
                        <select>
                          <option value="">Balai Bahasa Jawa Tengah</option>
                        </select>
                      </div>
                  </div> 

                  <div class="inputfield">
                      <label>Alamat</label>
                      <textarea class="textarea"></textarea>
                  </div>  

                  <div class="inputfield-select">
                      <label>Kondisi Bangunan</label>
                      <div class="custom_select">
                        <select>
                          <option value="">Baik</option>
                          <option value="">Rusak Sedang</option>
                          <option value="">Rusak Berat</option>
                        </select>
                      </div>
                  </div> 

                  <div class="inputfield-select">
                      <label>Status Pemerolehan Tanah/Bangunan</label>
                      <div class="custom_select">
                        <select>
                          <option value="">Hibah</option>
                          <option value="">Beli</option>
                        </select>
                      </div>
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