@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA PERPUSTAKAAN</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TANGGAL DIPERBAHARUI</th>
                    <th>PROVINSI</th>
                    <th>UNIT KERJA</th>
                    <th>JUMLAH BUKU</th>
                    <th>JUMLAH JUDUL</th>
                    <th>JENIS</th>
                    <th>JUMLAH PENGUNJUNG</th>
                    <th>SUMBER DATA</th>
                    <th>EDIT/HAPUS</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($perpustakaan as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> updated_at->format('m-d-Y')}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> unit}}</td>
                        <td>{{ $a -> jumlah_buku}}</td>
                        <td>{{ $a -> jumlah_judul}}</td>
                        <td>{{ $a -> jenis_buku}}</td>
                        <td>{{ $a -> jumlah_pengunjung}}</td>
                        <td>{{ $a -> sumber_data}}</td>

                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit" data-toggle="modal" data-target="#edit-modal">Edit</button>
                            <a class="hapus" href="{{ url('/operator/edit/sekretariat/perpustakaan/hapus/' . $a->id) }}" data-toggle="tooltip" onclick="return konfirmasi()" id="pesan">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="16" align="center">Tidak ada Data</td>
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
                        <label>Provinsi*</label>
                        <div class="custom_select">
                        <select>
                            <option value="">Jawa Tengah</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield-select">
                        <label>Unit Kerja*</label>
                        <div class="custom_select">
                        <select>
                            <option value="">Balai Bahasa Jawa Tengah</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield">
                        <label>Jumlah Buku</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Jumlah Judul</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield-select">
                        <label>Jenis Buku**</label>
                        <div class="custom_select">
                        <select>
                            <option value="">-- Pilih --</option>
                            <option value="">Umum</option>
                            <option value="">Karya Sastra</option>
                            <option value="">Kritik Sastra</option>
                            <option value="">Umum</option>
                            <option value="">Teori Sastra/Bahasa</option>
                            <option value="">Kamus</option>
                            <option value="">Ensiklopedia</option>
                            <option value="">Lain-lain</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield">
                        <label></label>
                        <textarea class="textarea"></textarea>
                    </div>   

                    <div class="inputfield">
                        <label>Jumlah Pengunjung</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Sumber Data</label>
                        <input type="text" class="input">
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