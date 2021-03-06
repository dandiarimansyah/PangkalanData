@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

<div class="isi-konten">

    <div class="judul">
        <th>VALIDASI DATA BENGKEL SASTRA DAN BAHASA</th>
    </div>

    <div class="ketjudul" style="margin-top:0px ;">
        <th>Klik tombol <b>"Pilih Semua"</b> untuk mencentang semua data</th>
        <br>
        <th>Klik tombol <b>"Validasi Data"</b>  untuk memvalidasi data yang telah dicentang</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center; margin-top:3px;">
       <!--  <div class="btn-group kategori">
            <button type="button" class="btn btn-primary" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                EKSPOR KE PDF 
            </button>
        </div> -->
        
        <div class="pilih_semua">
            <label for="valid">PILIH SEMUA</label>
            <input type='checkbox' id='valid'>
        </div>

        <div class="btn-group kategori">
            <button href="{{ URL('validator/kesastraan/bengkel_sastra_dan_bahasa')}}" id="tombol_validasi" type="button" class="btn btn-success" style="border-radius: 5px">
                VALIDASI DATA
            </button>
        </div>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>PROVINSI</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>TANGGAL</th>
                    <!-- <th>KATEGORI</th> -->
                    <th>KEGIATAN</th>
                    <th>PEMATERI</th>
                    <th>JUMLAH PESERTA</th>
                    <th>JUMLAH SEKOLAH</th>
                    <th>JUMLAH DIBINA</th>
                    <th>SEKOLAH YANG DIBINA</th>
                    <th>AKTIVITAS</th>
                    <th>DOKUMEN</th>
                    <th>EDIT</th>
                    <th>VALIDASI</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($bengkel_sastra_dan_bahasa as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> kota}}</td>
                        <td>{{ $a -> tanggal_awal_pelaksanaan}} <br> {{ $a -> tanggal_akhir_pelaksanaan}}</td>
                        <!-- <td></td> -->
                        <td>{{ $a -> nama_kegiatan}}</td>
                        <td>{{ $a -> pemateri}}</td>
                        <td>{{ $a -> jumlah_peserta}}</td>
                        <td>{{ $a -> jumlah_sekolah}}</td>
                        <td>{{ $a -> jumlah_sekolah_yang_dibina}}</td>
                        <td>{{ $a -> nama_sekolah_yang_dibina}}</td>
                        <td>{{ $a -> aktivitas}}</td>

                        <td>
                            @if ($a->media == "")
                            <div style="margin:5px auto">
                                <p style="font-size: 12px">Tidak ada Dokumen</p>
                            </div>
                            @else
                                <a target="_blank" type="button" class="btn btn-sm btn-success" href="{{ Storage::url($a->media) }}">Dokumen</a>
                            @endif
                        </td>

                        <td >
                        <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-provinsi="{{ $a->provinsi }}"
                                data-kota="{{ $a->kota }}"
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
                        </td>
                        <td>
                            <div class="validate"> 
                            @if ($a -> validasi == "belum")
                            <form action="" method="POST">
                                <input data-id="{{ $a->id }}" class="check" type="checkbox" value="sudah" name="validasi">
                            </form>
                            @else
                                <p>Tervalidasi</p>
                            @endif
                            </div>
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

</div>


<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div id="modal-edit" class="modal-dialog" role="document">
          <div id="modal-content" class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA BENGKEL SASTRA DAN BAHASA</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="wrapper" style="margin: 0">
                    <div class="form">
                    <form id="edit_form" action="" method="POST">
                            @csrf
                            @method('PUT')
                    
                        <div class="alert-danger">{{ $errors->first('provinsi') }}</div>
                        <div class="inputfield-select">
                            <label>Provinsi*</label>
                            <div class="custom_select">
                                <select id="provinsi" name="provinsi">
                                    <option value="Jawa Tengah">Jawa Tengah</option>
                                </select>
                            </div>
                        </div> 
                
                        <div class="alert-danger">{{ $errors->first('kota') }}</div>
                        <div class="inputfield">
                            <label>Kabupaten/Kota*</label>
                            <input id="kota" name="kota" type="text" class="input">
                        </div> 
                
                        <div class="alert-danger">{{ $errors->first('nama_kegiatan') }}</div>
                        <div class="inputfield">
                            <label>Nama Kegiatan</label>
                            <input id="nama_kegiatan" name="nama_kegiatan" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('tanggal_awal_pelaksanaan') }}</div>
                        <div class="inputfield-date">
                            <label>Tanggal Awal Pelaksanaan</label>
                            <input id="tanggal_awal_pelaksanaan" name="tanggal_awal_pelaksanaan" type="date" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('tanggal_akhir_pelaksanaan') }}</div>
                        <div class="inputfield-date">
                            <label>Tanggal Akhir Pelaksanaan</label>
                            <input id="tanggal_akhir_pelaksanaan" name="tanggal_akhir_pelaksanaan" type="date" class="input">
                        </div> 
                
                        <div class="alert-danger">{{ $errors->first('pemateri') }}</div>
                        <div class="inputfield">
                            <label>Pemateri</label>
                            <input id="pemateri" name="pemateri" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('jumlah_peserta') }}</div>
                        <div class="inputfield-kecil">
                            <label>Jumlah Peserta</label>
                            <input id="jumlah_peserta" name="jumlah_peserta" type="text" class="input">
                            <p>Orang</p>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('jumlah_sekolah') }}</div>
                        <div class="inputfield-kecil">
                            <label>Jumlah Sekolah</label>
                            <input id="jumlah_sekolah" name="jumlah_sekolah" type="text" class="input">
                            <p>Sekolah</p>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('jumlah_sekolah_yang_dibina') }}</div>
                        <div class="inputfield-kecil">
                            <label>Jumlah Sekolah yang Dibina</label>
                            <input id="jumlah_sekolah_yang_dibina" name="jumlah_sekolah_yang_dibina" type="text" class="input">
                            <p>Sekolah</p>
                        </div> 
                        
                        <div class="alert-danger">{{ $errors->first('nama_sekolah_yang_dibina') }}</div>
                        <div class="inputfield">
                            <label>Nama Sekolah yang Dibina</label>
                            <textarea id="nama_sekolah_yang_dibina" name="nama_sekolah_yang_dibina" class="textarea"></textarea>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('aktivitas') }}</div>
                        <div class="inputfield">
                            <label>Aktivitas</label>
                            <textarea id="aktivitas" name="aktivitas" class="textarea"></textarea>
                        </div> 

                        <!-- <div class="inputfield-kecil">
                        <label for="">Unggah Media</label>
                        <input id="media" type="file" name="media">
                        </div> -->
                
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>

                </form>
            </div>
            </div>
        </div>
          </div>
        </div>
      </div>
    
@endsection

@push('scripts')
      <script>

          $(document).on('click','#edit_item',function(){
                let provinsi = $(this).data('provinsi');

                let kota = $(this).data('kota');
                let nama_kegiatan = $(this).data('nama_kegiatan');
                let tanggal_awal_pelaksanaan = $(this).data('tanggal_awal_pelaksanaan');
                let tanggal_akhir_pelaksanaan = $(this).data('tanggal_akhir_pelaksanaan');
                let pemateri = $(this).data('pemateri');
                let jumlah_peserta = $(this).data('jumlah_peserta');
                let jumlah_sekolah = $(this).data('jumlah_sekolah');
                let jumlah_sekolah_yang_dibina = $(this).data('jumlah_sekolah_yang_dibina');
                let nama_sekolah_yang_dibina = $(this).data('nama_sekolah_yang_dibina');
                let aktivitas = $(this).data('aktivitas');
                let media = $(this).data('media');

                let id = $(this).data('id');

                $('#provinsi option').filter(function(){
                    return ($(this).val() == provinsi)
                }).prop('selected', true);

                $('#kota').val(kota);
                $('#nama_kegiatan').val(nama_kegiatan);
                $('#tanggal_awal_pelaksanaan').val(tanggal_awal_pelaksanaan);
                $('#tanggal_akhir_pelaksanaan').val(tanggal_akhir_pelaksanaan);
                $('#pemateri').val(pemateri);
                $('#jumlah_peserta').val(jumlah_peserta);
                $('#jumlah_sekolah').val(jumlah_sekolah);
                $('#jumlah_sekolah_yang_dibina').val(jumlah_sekolah_yang_dibina);
                $('#nama_sekolah_yang_dibina').val(nama_sekolah_yang_dibina);
                $('#aktivitas').val(aktivitas);
                $('#media').val(media);
                
                $('#edit_form').attr('action', '/operator/edit/kesastraan/bengkel_sastra_dan_bahasa/' + id);
          })
      </script>
@endpush