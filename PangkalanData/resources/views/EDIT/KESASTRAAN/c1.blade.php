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
                        <td>
                            @if ($a -> tanggal_awal_pelaksanaan != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_awal_pelaksanaan)->format('d-m-Y')}}
                            @else
                                -
                            @endif
                            <br>
                            @if ($a -> tanggal_akhir_pelaksanaan != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_akhir_pelaksanaan)->format('d-m-Y')}}
                            @else
                                -
                            @endif 
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
                    <form id="edit_form" action="" method="POST">
                            @csrf
                            @method('PUT')
                    
                        <div class="alert-danger">{{ $errors->first('provinsi') }}</div>
                        <div class="inputfield-select">
                            <label>Provinsi*</label>
                            <div class="custom_select">
                                <select name="provinsi">
                                <option value="Jawa Tengah">Jawa Tengah</option>
                                </select>
                            </div>
                        </div> 
                
                        <div class="alert-danger">{{ $errors->first('kota') }}</div>
                        <div class="inputfield">
                            <label>Kabupaten/Kota*</label>
                            <input name="kota" type="text" class="input">
                        </div> 
                
                        <div class="alert-danger">{{ $errors->first('nama_kegiatan') }}</div>
                        <div class="inputfield">
                            <label>Nama Kegiatan</label>
                            <input name="nama_kegiatan" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('tanggal_awal_pelaksanaan') }}</div>
                        <div class="inputfield-date">
                            <label>Tanggal Awal Pelaksanaan</label>
                            <input name="tanggal_awal_pelaksanaan" type="date" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('tanggal_akhir_pelaksanaan') }}</div>
                        <div class="inputfield-date">
                            <label>Tanggal Akhir Pelaksanaan</label>
                            <input name="tanggal_akhir_pelaksanaan" type="date" class="input">
                        </div> 
                
                        <div class="alert-danger">{{ $errors->first('pemateri') }}</div>
                        <div class="inputfield">
                            <label>Pemateri</label>
                            <input name="pemateri" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('jumlah_peserta') }}</div>
                        <div class="inputfield-kecil">
                            <label>Jumlah Peserta</label>
                            <input name="jumlah_peserta" type="text" class="input">
                            <p>Orang</p>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('jumlah_sekolah') }}</div>
                        <div class="inputfield-kecil">
                            <label>Jumlah Sekolah</label>
                            <input name="jumlah_sekolah" type="text" class="input">
                            <p>Sekolah</p>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('jumlah_sekolah_yang_dibina') }}</div>
                        <div class="inputfield-kecil">
                            <label>Jumlah Sekolah yang Dibina</label>
                            <input name="jumlah_sekolah_yang_dibina" type="text" class="input">
                            <p>Sekolah</p>
                        </div> 
                        
                        <div class="alert-danger">{{ $errors->first('nama_sekolah_yang_dibina') }}</div>
                        <div class="inputfield">
                            <label>Nama Sekolah yang Dibina</label>
                            <textarea name="nama_sekolah_yang_dibina" class="textarea"></textarea>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('aktivitas') }}</div>
                        <div class="inputfield">
                            <label>Aktivitas</label>
                            <textarea name="aktivitas" class="textarea"></textarea>
                        </div> 

                        <div class="inputfield-kecil">
                        <label for="">Unggah Media</label>
                        <input type="file" name="media">
                        </div>
                
                        <div class="tombol">
                            <input type="reset" value="Ulangi" class="reset">
                            <input type="submit" value="Simpan" class="inputan">
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

@push('scripts')
      <script>

          $(document).on('click','#edit_item',function(){
                let unit = $(this).data('unit');
                let tahun_anggaran = $(this).data('tahun_anggaran');
                let nilai_anggaran = $(this).data('nilai_anggaran');
                let id = $(this).data('id');

                $('#unit option').filter(function(){
                    return ($(this).val() == unit)
                }).prop('selected', true);

                $('#tahun_anggaran').val(tahun_anggaran);
                $('#nilai_anggaran').val(nilai_anggaran);
                
                $('#edit_form').attr('action', '/operator/edit/sekretariat/anggaran/' + id);
          })
      </script>
@endpush