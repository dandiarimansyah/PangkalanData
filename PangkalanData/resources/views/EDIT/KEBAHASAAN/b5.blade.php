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
        <th>EDIT DATA PESULUH</th>
    </div>

    <div class="input-baru">
        <a href="{{ URL("/operator/input/kebahasaan/pesuluh")}}" type="button" class="btn btn-primary">
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
                    <th>KABUPATEN/KOTA</th>
                    <th>KEGIATAN</th>
                    <th>TAHUN</th>
                    <th>NAMA</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TGL LAHIR</th>
                    <th>INSTANSI</th>
                    <th>TINGKAT</th>
                    <th>EDIT/HAPUS</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($pesuluh as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> penyuluhan -> kota}}</td>
                        <td>{{ $a -> penyuluhan -> nama_kegiatan}}</td>
                        <td>{{ \Carbon\Carbon::parse($a->penyuluhan->tanggal_awal)->format('Y')}}</td>
                        <td>{{ $a -> nama}}</td>
                        <td>{{ $a -> tempat_lahir}}</td>
                        <td>{{ \Carbon\Carbon::parse($a->tanggal_lahir)->format('d-m-Y')}}</td>
                        <td>{{ $a -> instansi}}</td>
                        <td>{{ $a -> tingkat}}</td>
                        
                        <td>
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-nama="{{ $a->nama }}"
                                data-tempat_lahir="{{ $a->tempat_lahir }}"
                                data-tanggal_lahir="{{ $a->tanggal_lahir }}"
                                data-instansi="{{ $a->instansi }}"
                                data-tingkat="{{ $a->tingkat }}"
                            >Edit</button>
                            <a class="hapus" href="{{ url('/operator/edit/kebahasaan/pesuluh/hapus/' . $a->id) }}" data-toggle="tooltip" id="pesan">Hapus</a>
                        </td>
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
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA PESULUH</h5>
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
                
                    <div class="alert-danger">{{ $errors->first('nama') }}</div>
                    <div class="inputfield">
                        <label>Nama Pesuluh*</label>
                        <input id="nama" name="nama" type="text" class="input">
                    </div> 
                
                    <div class="alert-danger">{{ $errors->first('tempat_lahir') }}</div>
                    <div class="inputfield">
                        <label>Tempat Lahir</label>
                        <input id="tempat_lahir" name="tempat_lahir" type="text" class="input">
                    </div>
                
                    <div class="alert-danger">{{ $errors->first('tanggal_lahir') }}</div>
                    <div class="inputfield-date">
                        <label>Tanggal Lahir</label>
                        <input id="tanggal_lahir" name="tanggal_lahir" type="date" class="input">
                    </div> 
                
                    <div class="alert-danger">{{ $errors->first('instansi') }}</div>
                    <div class="inputfield">
                        <label>Instansi</label>
                        <textarea id="instansi" name="instansi" class="textarea"></textarea>
                    </div>  
                
                    <div class="inputfield-select">
                        <label>Tingkat</label>
                        <div class="custom_select">
                        <select id="tingkat" name="tingkat">
                            <option disabled selected value="--PILIH--">--PILIH--</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                            <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                            <option value="Lain-Lain">Lain-Lain</option>
                        </select>
                        </div>
                    </div> 

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
                let nama = $(this).data('nama');
                let tempat_lahir = $(this).data('tempat_lahir');
                let tanggal_lahir = $(this).data('tanggal_lahir');
                let instansi = $(this).data('instansi');
                let tingkat = $(this).data('tingkat');
                let id = $(this).data('id');

                $('#nama').val(nama);
                $('#tempat_lahir').val(tempat_lahir);
                $('#tanggal_lahir').val(tanggal_lahir);
                $('#instansi').val(instansi);
                $('#tingkat option').filter(function(){
                    return ($(this).val() == tingkat)
                }).prop('selected', true);

                
                $('#edit_form').attr('action', '/operator/edit/kebahasaan/pesuluh/' + id);
          })
      </script>
@endpush