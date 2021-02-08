@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA BENGKEL SASTRA DAN BAHASA</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>PROVINSI</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>TANGGAL</th>
                    <th>KATEGORI</th>
                    <th>KEGIATAN</th>
                    <th>PEMATERI</th>
                    <th>JUMLAH PESERTA</th>
                    <th>JUMLAH SEKOLAH</th>
                    <th>JUMLAH DIBINA</th>
                    <th>SEKOLAH YANG DIBINA</th>
                    <th>AKTIVITAS</th>
                    <th>EDIT/HAPUS</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($bengkel_sastra_dan_bahasa as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> kota}}</td>
                        <td>{{ $a -> tanggal_awal_pelaksanaan}} <br> {{ $a -> tanggal_akhir_pelaksanaan}}</td>
                        <td></td>
                        <td>{{ $a -> nama_kegiatan}}</td>
                        <td>{{ $a -> pemateri}}</td>
                        <td>{{ $a -> jumlah_peserta}}</td>
                        <td>{{ $a -> jumlah_sekolah}}</td>
                        <td>{{ $a -> jumlah_sekolah_yang_dibina}}</td>
                        <td>{{ $a -> nama_sekolah_yang_dibina}}</td>
                        <td>{{ $a -> aktivitas}}</td>

                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-provinsi="{{ $a->provinsi }}"
                                data-nama_kegiatan="{{ $a->nama_kegiatan }}"
                                data-tanggal_awal_pelaksanaan="{{ $a->tanggal_awal_pelaksanaan }}"
                                data-tanggal_akhir_pelaksanaan="{{ $a->tanggal_akhir_pelaksanaan }}"
                                data-pemateri="{{ $a->pemateri }}"
                                data-jumlah_peserta="{{ $a->jumlah_peserta }}"
                                data-jumlah_sekolah="{{ $a->jumlah_sekolah }}"
                                data-jumlah_sekolah_yang_dibina="{{ $a->jumlah_sekolah_yang_dibina }}"
                                data-nama_sekolah_yang_dibina="{{ $a->nama_sekolah_yang_dibina }}"
                                data-aktivitas="{{ $a->aktivitas }}"
                                data-media="{{ $a->media }}"
                            >Edit</button>
                            <a class="hapus" href="{{ url('/operator/edit/kesastraan/bengkel_sastra_dan_bahasa/hapus/' . $a->id) }}" data-toggle="tooltip" onclick="return konfirmasi()" id="pesan">Hapus</a>
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
                    
                <div class="wrapper">
                    <div class="form">
            
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

                    <div class="inputfield-date">
                        <label>Tanggal Awal Pelaksanaan</label>
                        <input type="date" class="input">
                    </div> 

                    <div class="inputfield-date">
                        <label>Tanggal Akhir Pelaksanaan</label>
                        <input type="date" class="input">
                    </div> 
            
                    <div class="inputfield">
                        <label>Pemateri</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield-kecil">
                        <label>Jumlah Peserta</label>
                        <input type="text" class="input">
                        <p>Orang</p>
                    </div> 

                    <div class="inputfield-kecil">
                        <label>Jumlah Sekolah</label>
                        <input type="text" class="input">
                        <p>Sekolah</p>
                    </div> 

                    <div class="inputfield-kecil">
                        <label>Jumlah Sekolah yang Dibina</label>
                        <input type="text" class="input">
                        <p>Sekolah</p>
                    </div> 
                    
                    <div class="inputfield">
                        <label>Nama Sekolah yang Dibina</label>
                        <textarea class="textarea"></textarea>
                    </div> 

                    <div class="inputfield">
                        <label>Aktivitas</label>
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