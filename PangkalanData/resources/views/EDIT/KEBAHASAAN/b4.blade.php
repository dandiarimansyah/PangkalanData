@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

@if ($errors->any())
        <div class="error">
            <p>----- Pesan Error -----</p>
        @foreach ($errors->all() as $error)
            <div class="errors">
            {{ $error }}
            </div>
        @endforeach
        </div>
    @endif

    <div class="judul">
        <th>EDIT DATA PENYULUHAN</th>
    </div>

    <div class="input-baru">
        <a href="{{ URL("/operator/input/kebahasaan/penyuluhan")}}" type="button" class="btn btn-primary">
            <i style="margin-right: 4px" class="fa fa-file-text-o" aria-hidden="true"></i>
            INPUT DATA BARU
        </a>
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
                    <th>KEGIATAN</th>
                    <th>NARASUMBER</th>
                    <th>SASARAN</th>
                    <th>JUMLAH</th>
                    <th>MATERI</th>
                    <!-- <th>MEDIA</th> -->
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
                                
                            >Edit</button>
                            <a class="hapus" href="{{ url('/operator/edit/kebahasaan/penyuluhan/hapus/' . $a->id) }}" data-toggle="tooltip" id="pesan">Hapus</a>
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
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA PENYULUHAN</h5>
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

                        <div class="alert-danger">{{ $errors->first('tanggal_awal') }}</div>
                        <div class="inputfield-date">
                            <label>Tanggal Awal Pelaksanaan</label>
                            <input id="tanggal_awal" name="tanggal_awal" type="date" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('tanggal_akhir') }}</div>
                        <div class="inputfield-date">
                            <label>Tanggal Akhir Pelaksanaan</label>
                            <input id="tanggal_akhir" name="tanggal_akhir" type="date" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('narasumber') }}</div>
                        <div class="inputfield">
                            <label>Narasumber</label>
                            <input id="narasumber" name="narasumber" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('sasaran') }}</div>
                        <div class="inputfield">
                            <label>Sasaran</label>
                            <input id="sasaran" name="sasaran" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('jumlah_peserta') }}</div>
                        <div class="inputfield">
                            <label>Jumlah Peserta</label>
                            <input id="jumlah_peserta" name="jumlah_peserta" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('materi') }}</div>
                        <div class="inputfield">
                            <label>Materi</label>
                            <textarea id="materi" name="materi" class="textarea"></textarea>
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
                let tanggal_awal = $(this).data('tanggal_awal');
                let tanggal_akhir = $(this).data('tanggal_akhir');
                let nama_kegiatan = $(this).data('nama_kegiatan');
                let narasumber = $(this).data('narasumber');
                let sasaran = $(this).data('sasaran');
                let jumlah_peserta = $(this).data('jumlah_peserta');
                let materi = $(this).data('materi');

                let id = $(this).data('id');

                $('#provinsi option').filter(function(){
                    return ($(this).val() == provinsi)
                }).prop('selected', true);

                $('#kota').val(kota);
                $('#tanggal_awal').val(tanggal_awal);
                $('#tanggal_akhir').val(tanggal_akhir);
                $('#nama_kegiatan').val(nama_kegiatan);
                $('#narasumber').val(narasumber);
                $('#sasaran').val(sasaran);
                $('#jumlah_peserta').val(jumlah_peserta);
                $('#materi').val(materi);
                
                $('#edit_form').attr('action', '/operator/edit/kebahasaan/penyuluhan/' + id);
          })
      </script>
@endpush