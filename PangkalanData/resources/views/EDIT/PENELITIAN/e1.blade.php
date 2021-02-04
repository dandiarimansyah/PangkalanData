@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

    <div class="judul">
        <th>EDIT DATA PENELITIAN</th>
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
                    <th>TGL.MULAI</th>
                    <th>TGL.SELESAI</th>
                    <th>UNIT/SATUAN KERJA</th>
                    <th>JUDUL</th>
                    <th>PENELITI</th>
                    <th>KERJA SAMA</th>
                    <th>ABSTRAK</th>
                    <th>LAMA PENELITIAN</th>
                    <th>PUBLIKASI</th>
                    <th>TAHUN TERBIT</th>
                    <th>MEDIA</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($penelitian as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-modal">Edit</button>
                        </td>
                        <td>{{ $a -> tanggal_awal}}</td>
                        <td>{{ $a -> tanggal_akhir}}</td>
                        <td>{{ $a -> unit}}</td>
                        <td>{{ $a -> judul}}</td>
                        <td>{{ $a -> peneliti}}</td>
                        <td>{{ $a -> abstrak}}</td>
                        <td>{{ $a -> lama_penelitian}}</td>
                        <td>{{ $a -> publikasi}}</td>
                        <td>{{ $a -> tahun_terbit}}</td>
                        <td>{{ $a -> file}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="13" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

                {{-- <tr>
                    <td>1</td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit-modal">Edit</button>
                    </td>
                    <td>01-02-2017</td>
                    <td>30-11-2017</td>
                    <td>Balai Bahasa Jawa Tengah</td>
                    <td>Kajian Penggunaan Bahasa Media Massa di Jawa Tengah</td>
                    <td>Endro Nugroho Wasono Aji, Sri Wahyuni, Kahar Dwi Prihantono, Inni Inayati Istiana</td>
                    <td></td>
                    <td>...Selengkapnya</td>
                    <td>10 BULAN</td>
                    <td>BELUM TERBIT</td>
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
                </tr> --}}
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
                        <label>Kategori Penelitian*</label>
                        <div class="custom_select">
                        <select>
                            <option value="">Bahasa</option>
                            <option value="">Sastra</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield-select">
                        <label>Unit/Satuan Kerja*</label>
                        <div class="custom_select">
                        <select>
                            <option value="">Balai Bahasa Jawa Tengah</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield">
                        <label>Peneliti*</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Judul*</label>
                        <textarea class="textarea"></textarea>
                    </div> 

                    <div class="inputfield">
                        <label>Kerja Sama</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield-date">
                        <label>Tanggal Mulai Penelitian</label>
                        <input type="date" class="input">
                    </div> 

                    <div class="inputfield-date">
                        <label>Tanggal Selesai Penelitian</label>
                        <input type="date" class="input">
                    </div> 

                    <div class="inputfield-kecil">
                        <label>Lama Penelitian</label>
                        <input type="text" class="input">
                        <div class="custom_select" style="margin-left: 30px; width: 120px">
                            <select>
                            <option value="">Tahun</option>
                            <option value="">Bulan</option>
                            <option value="">Minggu</option>
                            <option value="">Hari</option>
                            </select>
                        </div>
                    </div> 

                    <div class="inputfield-select">
                        <label>Publikasi</label>
                        <div class="custom_select">
                        <select>
                            <option value="">Terbit</option>
                            <option value="">Belum Terbit</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield-kecil">
                        <label>Tahun Terbit</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Abstrak*</label>
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