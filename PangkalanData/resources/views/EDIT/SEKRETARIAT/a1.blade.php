@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')
    
<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA ANGGARAN UNIT/SATUAN KERJA PER TAHUN</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table id="datatable" class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TAHUN ANGGARAN</th>
                    <th>UNIT/SATUAN KERJA</th>
                    <th>NILAI ANGGARAN(Rp.)</th>
                    <th>EDIT / HAPUS</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($anggaran as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tahun_anggaran}}</td>
                        <td>{{ $a -> unit}}</td>
                        <td>{{ $a -> nilai_anggaran}}</td>
                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-unit="{{ $a->unit }}"
                                data-tahun_anggaran="{{ $a->tahun_anggaran }}"
                                data-nilai_anggaran="{{ $a->nilai_anggaran }}"
                            >Edit</button>
                            
                            <a class="hapus" href="{{ url('/operator/edit/sekretariat/anggaran/hapus/' . $a->id) }}" data-toggle="tooltip" id="pesan">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

    </div>

        <div class="modal fade" id="edit-modal">
            <div id="modal-edit" class="modal-dialog" role="document">
            <div id="modal-content" class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDIT DATA ANGGARAN UNIT/SATUAN KERJA PER TAHUN</h5>
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
                            
                            <div class="alert-danger">{{ $errors->first('tahun_anggaran') }}</div>
                            <div class="inputfield">
                                <label>Tahun Anggaran*</label>
                                <input name="tahun_anggaran" id="tahun_anggaran" type="text" class="input" placeholder="lalal">
                            </div> 
                    
                            <div class="alert-danger">{{ $errors->first('nilai_anggaran') }}</div>
                            <div class="inputfield">
                                <label>Nilai Anggaran (Rp.)</label>
                                <input name="nilai_anggaran" id="nilai_anggaran" type="text" class="input">
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