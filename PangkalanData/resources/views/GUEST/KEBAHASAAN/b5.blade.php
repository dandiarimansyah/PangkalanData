@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuData')

<div class="isi-konten">

    <div class="judul">
        <th>DATA PESULUH</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>PROVINSI</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>KEGIATAN</th>
                    <th>TAHUN</th>
                    <th>NAMA</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TGL LAHIR</th>
                    <th>INSTANSI</th>
                    <th>TINGKAT</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($pesuluh as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        {{-- <td>{{ $a -> $penyuluhan -> provinsi}}</td> --}}
                        {{-- <td>{{ $a -> $penyuluhan -> kota}}</td> --}}
                        {{-- <td>{{ $a -> $penyuluhan -> nama_kegiatan}}</td> --}}
                        <td>Tahun</td>
                        <td>{{ $a -> nama}}</td>
                        <td>{{ $a -> tempat_lahir}}</td>
                        <td>{{ $a -> tanggal_lahir}}</td>
                        <td>{{ $a -> instansi}}</td>
                        <td>{{ $a -> tingkat}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="11" align="center">Tidak ada Data</td>
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
                    
                   <!-- INPUT HERE   -->

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