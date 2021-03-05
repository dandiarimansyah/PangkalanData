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
        <th>EDIT DATA REALISASI ANGGARAN UNIT/SATUAN KERJA</th>
    </div>

    <div class="input-baru">
        <a href="{{ URL("/operator/input/sekretariat/realisasi_anggaran")}}" type="button" class="btn btn-primary">
            <i style="margin-right: 4px" class="fa fa-file-text-o" aria-hidden="true"></i>
            INPUT DATA BARU
        </a>
    </div>
    
    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TAHUN REALISASI</th>
                    <!-- <th>UNIT/SATUAN KERJA</th> -->
                    <th>NILAI REALISASI(Rp.)</th>
                    <th>KETERANGAN</th>
                    <th>EDIT / HAPUS</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($realisasi_anggaran as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> nilai_realisasi}}</td>
                        <!-- <td>{{ $a -> unit}}</td> -->
                        <td class="rupiah" data-nilai="{{ $a->besar_dana }}">{{ $a -> besar_dana}}</td>
                        <td>{{ $a -> keterangan}}</td>
                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-unit="{{ $a->unit }}"
                                data-nilai_realisasi="{{ $a->nilai_realisasi }}"
                                data-besar_dana="{{ $a->besar_dana }}"
                                data-keterangan="{{ $a->keterangan }}"
                            >Edit</button>                            
                            <a class="hapus" href="{{ url('/operator/edit/sekretariat/realisasi_anggaran/hapus/' . $a->id) }}" data-toggle="tooltip" id="pesan">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

    </div>

    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div id="modal-edit" class="modal-dialog" role="document">
          <div id="modal-content" class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA REALISASI ANGGARAN UNIT/SATUAN KERJA</h5>
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
                    
                        <div class="alert-danger">{{ $errors->first('unit') }}</div>
                        <div class="inputfield-select">
                            <label>Unit/Satuan Kerja*</label>
                            <div class="custom_select">
                              <select name="unit" id="unit">
                                <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
                              </select>
                            </div>
                        </div> 
                
                        <div class="alert-danger">{{ $errors->first('nilai_realisasi') }}</div>
                        <div class="inputfield">
                            <label>Nilai Realisasi Hingga</label>
                            <input id="nilai_realisasi" name="nilai_realisasi" type="text" class="input">
                        </div> 
                
                        <div class="alert-danger">{{ $errors->first('besar_dana') }}</div>
                        <div class="inputfield">
                            <label>Besarnya Dana Realisasi (Rp.)</label>
                            <input id="besar_dana" name="besar_dana" type="text" class="input">
                        </div> 
                        
                        <div class="alert-danger">{{ $errors->first('keterangan') }}</div>
                        <div class="inputfield">
                            <label>Keterangan</label>
                            <textarea id="keterangan" name="keterangan" class="textarea"></textarea>
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

</div>
    

@endsection

@push('scripts')
      <script>

          $(document).on('click','#edit_item',function(){
                let unit = $(this).data('unit');
                let nilai_realisasi = $(this).data('nilai_realisasi');
                let besar_dana = $(this).data('besar_dana');
                let keterangan = $(this).data('keterangan');
                let id = $(this).data('id');

                $('#unit option').filter(function(){
                    return ($(this).val() == unit)
                }).prop('selected', true);

                $('#nilai_realisasi').val(nilai_realisasi);
                $('#besar_dana').val(besar_dana);
                $('#keterangan').val(keterangan);
                
                $('#edit_form').attr('action', '/operator/edit/sekretariat/realisasi_anggaran/' + id);
          })
      </script>
@endpush