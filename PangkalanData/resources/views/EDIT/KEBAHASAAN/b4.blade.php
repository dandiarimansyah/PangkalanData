@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA PENYULUHAN</th>
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
                    <th>KEGIATAN</th>
                    <th>NARASUMBER</th>
                    <th>SASARAN</th>
                    <th>JUMLAH</th>
                    <th>MATERI</th>
                    <th>MEDIA</th>
                    <th>EDIT/HAPUS</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($penyuluhan as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> kota}}</td>
                        <td>
                            @if ($a -> tanggal_awal != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_awal)->format('d-m-Y')}}
                            @else
                                -
                            @endif
                                s.d
                            @if ($a -> tanggal_akhir != null)
                                {{ \Carbon\Carbon::parse($a->tanggal_akhir)->format('d-m-Y')}}
                            @else
                                -
                            @endif 
                        </td>
                        <td>{{ $a -> nama_kegiatan}}</td>
                        <td>{{ $a -> narasumber}}</td>
                        <td>{{ $a -> sasaran}}</td>
                        <td>{{ $a -> jumlah_peserta}}</td>
                        <td>{{ $a -> materi}}</td>
                        <td></td>
                        
                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-provinsi="{{ $a->unit }}"
                                data-kota="{{ $a->kota }}"
                                data-nama_kegiatan="{{ $a->nama_kegiatan }}"
                                data-tanggal_awal="{{ $a->tanggal_awal }}"
                                data-tanggal_akhir="{{ $a->tanggal_akhir }}"
                                data-narasumber="{{ $a->narasumber }}"
                                data-sasaran="{{ $a->sasaran }}"
                                data-jumlah_peserta="{{ $a->jumlah_peserta }}"
                                data-materi="{{ $a->materi }}"
                                data-media="{{ $a->media }}"
                                
                            >Edit</button>
                            <a class="hapus" href="{{ url('/operator/edit/kebahasaan/penyuluhan/hapus/' . $a->id) }}" data-toggle="tooltip" onclick="return konfirmasi()" id="pesan">Hapus</a>
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

                        <div class="alert-danger">{{ $errors->first('tanggal_awal') }}</div>
                        <div class="inputfield-date">
                            <label>Tanggal Awal Pelaksanaan</label>
                            <input name="tanggal_awal" type="date" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('tanggal_akhir') }}</div>
                        <div class="inputfield-date">
                            <label>Tanggal Akhir Pelaksanaan</label>
                            <input name="tanggal_akhir" type="date" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('narasumber') }}</div>
                        <div class="inputfield">
                            <label>Narasumber</label>
                            <input name="narasumber" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('sasaran') }}</div>
                        <div class="inputfield">
                            <label>Sasaran</label>
                            <input name="sasaran" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('jumlah_peserta') }}</div>
                        <div class="inputfield">
                            <label>Jumlah Peserta</label>
                            <input name="jumlah_peserta" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('materi') }}</div>
                        <div class="inputfield">
                            <label>Materi</label>
                            <textarea name="materi" class="textarea"></textarea>
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