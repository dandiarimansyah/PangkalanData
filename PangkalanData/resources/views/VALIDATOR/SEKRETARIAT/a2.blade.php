@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

<div class="isi-konten">

    <div class="judul">
        <th>VALIDASI DATA REALISASI ANGGARAN UNIT/SATUAN KERJA</th>
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
            <button href="{{ URL('validator/sekretariat/realisasi_anggaran')}}" id="tombol_validasi" type="button" class="btn btn-success" style="border-radius: 5px">
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
                    <th>TAHUN REALISASI</th>
                    <!-- <th>UNIT/SATUAN KERJA</th> -->
                    <th>NILAI REALISASI(Rp.)</th>
                    <th>KETERANGAN</th>
                    <th>EDIT</th>
                    <th>VALIDASI</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($realisasi_anggaran as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tahun_realisasi}}</td>
                        <!-- <td>{{ $a -> unit}}</td> -->
                        <td class="rupiah" data-nilai="{{ $a->besar_dana }}">{{ $a -> besar_dana}}</td>
                        <td>{{ $a -> keterangan}}</td>
                        <td>
                            <button type="button" class="edit"
                            id="edit_item" 
                            data-toggle="modal" 
                            data-target="#edit-modal"
                            data-id="{{ $a->id }}"
                            data-unit="{{ $a->unit }}"
                            data-tahun_realisasi="{{ $a->tahun_realisasi }}"
                            data-besar_dana="{{ $a->besar_dana }}"
                            data-keterangan="{{ $a->keterangan }}"
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
                        <td colspan="7" align="center">Tidak ada Data</td>
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
                
                    <!-- <div class="alert-danger">{{ $errors->first('unit') }}</div>
                    <div class="inputfield-select">
                        <label>Unit/Satuan Kerja*</label>
                        <div class="custom_select">
                          <select name="unit" id="unit">
                            <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
                          </select>
                        </div>
                    </div>  -->
            
                    <div class="alert-danger">{{ $errors->first('tahun_realisasi') }}</div>
                    <div class="inputfield">
                        <label>Nilai Realisasi Hingga</label>
                        <input id="tahun_realisasi" name="tahun_realisasi" type="text" class="input">
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
                let tahun_realisasi = $(this).data('tahun_realisasi');
                let besar_dana = $(this).data('besar_dana');
                let keterangan = $(this).data('keterangan');
                let id = $(this).data('id');

                $('#unit option').filter(function(){
                    return ($(this).val() == unit)
                }).prop('selected', true);

                $('#tahun_realisasi').val(tahun_realisasi);
                $('#besar_dana').val(besar_dana);
                $('#keterangan').val(keterangan);
                
                $('#edit_form').attr('action', '/operator/edit/sekretariat/realisasi_anggaran/' + id);
          })
      </script>
@endpush