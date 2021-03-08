@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuData')

<div class="isi-konten">

    <div class="judul">
        <th>DATA INVENTARISASI TANAH DAN BANGUNAN BALAI/KANTOR BAHASA</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">TANGGAL DATA</th>
                    <th rowspan="2">BALAI/KANTOR</th>
                    <th colspan="2">TANAH</th>
                    <th colspan="2">BANGUNAN</th>
                    <th rowspan="2">KONDISI</th>
                    <th rowspan="2">STATUS PEMEROLEHAN</th>
                    <th rowspan="2">KETERANGAN</th>
                    <!-- <th rowspan="2">MEDIA</th> -->
                </tr>
                <tr>
                    <th>STATUS</th>
                    <th>SERTIFIKAT</th>
                    <th>STATUS</th>
                    <th>IMB</th>
                </tr>
            </thead>

            <tbody>

              @forelse ($tanah_bangunan as $key => $a)
                  <tr>
                      <td>{{ $key + 1}}</td>
                      <td></td>
                      <td>{{ $a -> kantor}}</td>
                      <!-- <td>{{ $a -> alamat}}</td> -->
                      <td>{{ $a -> status_tanah}}</td>
                      <td>{{ $a -> sertif_tanah}}</td>
                      <td>{{ $a -> status_bangunan}}</td>
                      <td>{{ $a -> imb}}</td>
                      <td>{{ $a -> kondisi}}</td>
                      <td>{{ $a -> status_peroleh}}</td>
                      <td>{{ $a -> keterangan}}</td>
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