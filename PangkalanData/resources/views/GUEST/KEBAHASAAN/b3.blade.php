@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuData')

<div class="isi-konten">

    <div class="judul">
        <th>DATA TERBITAN UMUM</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KATEGORI</th>
                    <th>JUDUL</th>
                    <th>PENULIS</th>
                    <th>ISBN</th>
                    <th>TAHUN TERBIT</th>
                    <th>DESKRIPSI FISIK</th>
                    <th>UNIT/SATKER</th>
                    <th>INFO PRODUK</th>
                    <!-- <th>MEDIA</th> -->
                </tr>
            </thead>

            <tbody>

                @forelse ($terbitan_umum as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> kategori}}</td>
                        <td>{{ $a -> judul}}</td>
                        <td>{{ $a -> penulis}}</td>
                        <td>{{ $a -> no_isbn}}</td>
                        <td>{{ $a -> tahun_terbit}}</td>
                        <td>{{ $a -> deskripsi}}</td>
                        <td>Balai Bahasa Jawa Tengah</td>
                        <td>{{ $a -> info_produk}}</td>
                        <!-- <td></td> -->
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
                        <label>Kategori Terbitan*</label>
                        <div class="custom_select">
                        <select>
                            <option value="">Bahasa</option>
                            <option value="">Sastra</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield">
                        <label>Judul*</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Penulis</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>No.ISBN</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Tahun Terbit</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Deskripsi Fisik</label>
                        <textarea class="textarea"></textarea>
                    </div>  

                    <div class="inputfield-select">
                        <label>Info Produk</label>
                        <div class="custom_select">
                        <select>
                            <option value="">--Pilih Info--</option>
                            <option value="">Produk Pusat</option>
                            <option value="">Produk Balai/Kantor</option>
                            <option value="">Produk Luar</option>
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