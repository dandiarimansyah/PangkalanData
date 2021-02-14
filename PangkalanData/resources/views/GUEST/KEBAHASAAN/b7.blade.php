@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuData')

<div class="isi-konten">

    <div class="judul">
        <th>DATA DUTA BAHASA NASIONAL</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TAHUN</th>
                    <th>ASAL PROVINSI</th>
                    <th>PEMENANG I</th>
                    <th>PEMENANG II</th>
                    <th>PEMENANG III</th>
                    <th>KETERANGAN</th>
                    <!-- <th>MEDIA</th> -->
                </tr>
            </thead>

            <tbody>

                @forelse ($duta_nasional as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tahun}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> pemenang_1_1}} <br> {{ $a -> pemenang_1_2}}</td>
                        <td>{{ $a -> pemenang_2_1}} <br> {{ $a -> pemenang_2_2}}</td>
                        <td>{{ $a -> pemenang_3_1}} <br> {{ $a -> pemenang_3_2}}</td>
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
                        <label>Asal Provinsi*</label>
                        <div class="custom_select">
                        <select>
                            <option value="">-- Pilih Kategori --</option>
                            <option value="">Aceh</option>
                            <option value="">Sumatera Utara</option>
                            <option value="">Sumatera Barat</option>
                            <option value="">Bengkulu</option>
                            <option value="">Riau</option>
                            <option value="">Kepulauan Riau</option>
                            <option value="">Jambi</option>
                            <option value="">Sumatera Selatan</option>
                            <option value="">Lampung</option>
                            <option value="">Kepulauan Bangka Belitung</option>
                            <option value="">DKI Jakarta</option>
                            <option value="">Jawa Barat</option>
                            <option value="">Banten</option>
                            <option value="">Jawa Tengah</option>
                            <option value="">Daerah Istimewa Yogyakarta</option>
                            <option value="">Jawa Timur</option>
                            <option value="">Kalimantan Barat</option>
                            <option value="">Kalimantan Tengah</option>
                            <option value="">Kalimantan Selatan</option>
                            <option value="">Bali</option>
                            <option value="">Nusa Tenggara Barat</option>
                            <option value="">Nusa Tenggara Timur</option>
                            <option value="">Sulawesi Barat</option>
                            <option value="">Sulawesi Utara</option>
                            <option value="">Sulawesi Selatan</option>
                            <option value="">Sulawesi Tenggara</option>
                            <option value="">Sulawesi Tengah</option>
                            <option value="">Gorontalo</option>
                            <option value="">Maluku</option>
                            <option value="">Maluku Utara</option>
                            <option value="">Papua Barat</option>
                            <option value="">Papua</option>
                            <option value="">Kalimantan Utara</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield">
                        <label>Tahun</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Pemenang I (1)</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Pemenang I (2)</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Pemenang II (1)</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Pemenang II (2)</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Pemenang III (1)</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Pemenang III (2)</label>
                        <input type="text" class="input">
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