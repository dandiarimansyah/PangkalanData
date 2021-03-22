@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

<div class="isi-konten">

    <div class="judul">
        <th>VALIDASI DATA PESULUH</th>
    </div>

    <div class="ketjudul" style="margin-top:0px ;">
        <th>Klik tombol <b>"Pilih Semua"</b> untuk mencentang semua data</th>
        <br>
        <th>Klik tombol <b>"Validasi Data"</b>  untuk memvalidasi data yang telah dicentang</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center; margin-top:3px;">
        <!-- <div class="btn-group kategori">
            <button type="button" class="btn btn-primary" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                EKSPOR KE PDF 
            </button>
        </div> -->
        
        <div class="pilih_semua">
            <label for="valid">PILIH SEMUA</label>
            <input type='checkbox' id='valid'>
        </div>

        <div class="btn-group kategori">
            <button href="{{ URL('validator/kebahasaan/pesuluh')}}" id="tombol_validasi" type="button" class="btn btn-success" style="border-radius: 5px">
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
                    <th>KABUPATEN/KOTA</th>
                    <th>PENYULUHAN</th>
                    <th>PERIODE</th>
                    <th>NAMA</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TGL LAHIR</th>
                    <th>SEKOLAH</th>
                    <th>TINGKAT</th>
                    <th>EDIT</th>
                    <th>VALIDASI</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($pesuluh as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> penyuluhan -> kota}}</td>
                        <td>{{ $a -> penyuluhan -> nama_kegiatan}}</td>
                        <td>Tahun</td>
                        <td>{{ $a -> nama}}</td>
                        <td>{{ $a -> tempat_lahir}}</td>
                        <td>{{ $a -> tanggal_lahir}}</td>
                        <td>{{ $a -> instansi}}</td>
                        <td>{{ $a -> tingkat}}</td>
                        
                        <td style="display: flex; justify-content:center">
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
                        <td colspan="12" align="center">Tidak ada Data</td>
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