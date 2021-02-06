@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA PENELITIAN</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
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
                    <th>EDIT/HAPUS</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($penelitian as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tanggal_awal}}</td>
                        <td>{{ $a -> tanggal_akhir}}</td>
                        <td>{{ $a -> unit}}</td>
                        <td>{{ $a -> judul}}</td>
                        <td>{{ $a -> peneliti}}</td>
                        <td>{{ $a -> kerja_sama}}</td>
                        <td>{{ $a -> abstrak}}</td>
                        <td>{{ $a -> lama_penelitian}}</td>
                        <td>{{ $a -> publikasi}}</td>
                        <td>{{ $a -> tahun_terbit}}</td>
                        {{-- <td>{{ $a -> media}}</td> --}}
                        <td></td>
                        <td style="display: flex; justify-content:center;">
                            <button type="button" class="edit" data-toggle="modal" data-target="#edit-modal">Edit</button>
                            <a class="hapus" href="{{ url('/operator/edit/penelitian/penelitian/hapus/' . $a->id) }}" data-toggle="tooltip" id="pesan">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="14" align="center">Tidak ada Data</td>
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