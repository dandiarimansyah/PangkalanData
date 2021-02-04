@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

    <div class="judul">
        <th>EDIT DATA PENYULUHAN</th>
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
                    <th>PROVINSI</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>TANGGAL</th>
                    <th>KEGIATAN</th>
                    <th>NARASUMBER</th>
                    <th>SASARAN</th>
                    <th>JUMLAH</th>
                    <th>MATERI</th>
                    <th>MEDIA</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-modal">Edit</button>
                    </td>
                    <td>Jawa Tengah</td>
                    <td>Kabupaten Klaten</td>
                    <td>16-10-2019 - 03-11-2020</td>
                    <td>Penyuluhan Penggunaan Bahasa Media Massa Kabupaten Klaten</td>
                    <td>1. Drs. Jaka Suwandi, M.M. ; 2. Dr. Tirto Suwondo, M.Hum. ;3. Shintya, M.S.</td>
                    <td>Pejabat struktural di lingkungan Pemerintah Daerah Kabupaten Klaten</td>
                    <td>40 Orang</td>
                    <td>
                        1. Kebijakan Pemerintah Kabupaten Klaten dalam Penggunaan Bahasa Indonesia di Kabupaten Klaten
                        2. Pemaparan Rekomendasi Penggunaan Bahasa Media Massa di Kabupaten Klaten
                        3. Sosialisasi Hasil Pemantauan Penggunaan Bahasa Media Massa di Kabupaten Klaten
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
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
                            <option value="">Jawa Tengah</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield">
                        <label>Kabupaten/Kota*</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Nama Kegiatan</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Tanggal Awal Pelaksanaan</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Tanggal Akhir Pelaksanaan</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>narasumber</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Sasaran</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Jumlah Peserta</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Materi</label>
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