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
        <th>EDIT DATA ANGGARAN UNIT/SATUAN KERJA PER TAHUN</th>
    </div>

    <div class="input-baru">
        <a href="{{ URL("/operator/input/sekretariat/anggaran")}}" type="button" class="btn btn-primary">
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
                    <th>TAHUN ANGGARAN</th>
                    <!-- <th>UNIT/SATUAN KERJA</th> -->
                    <th>NILAI ANGGARAN(Rp.)</th>
                    <th>EDIT / HAPUS</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($anggaran as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tahun_anggaran}}</td>
                        {{-- <td>{{ $a -> unit}}</td>  --}}
                        <td class="rupiah" data-nilai="{{ $a->nilai_anggaran }}">{{ $a -> nilai_anggaran}}</td>
                        <td>
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

                            {{-- <div class="inputfield">
                                <label>Unit/Satuan Kerja</label>
                                <input name="unit" readonly type="text" value="Balai Bahasa Provinsi Jawa Tengah" class="input">
                            </div>  --}}
                            
                            <div class="alert-danger">{{ $errors->first('tahun_anggaran') }}</div>
                            <div class="inputfield">
                                <label>Tahun Anggaran*</label>
                                <input name="tahun_anggaran" id="tahun_anggaran" type="text" class="input">
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

        //   //Bahasa Indo Datatable
        //     $(document).ready(function () {
        //         // let elemen9 = $("#datatable_length label select");
        //         let elemen1 = $("#datatable_length");
        //         let elemen2 = document.getElementById("datatable_filter");
        //         let elemen3 = document.getElementById("datatable_info");

        //         elemen1.html(" ");
        //         elemen2.innerHTML = " ";
        //         elemen3.innerHTML = " ";

        //         var select = $("<select name='datatable_length' aria-controls='datatable' class='custom-select custom-select-sm form-control form-control-sm'><option value='10'>10</option><option value='25'>25</option><option value='50'>50</option><option value='100'>100</option></select>");
                
        //         var label1 = $("<label></label>").text("Tampil ");
        //         label1.append(select);
        //         label1.append(" baris");
        //         elemen1.append(label1);

        //         var label2 = document.createElement("label");
        //         var input = document.createElement("input");

        //         var aria = document.createAttribute("aria-controls");
        //         aria.value = "datatable";
        //         var type = document.createAttribute("type");
        //         type.value = "search";

        //         input.setAttributeNode(aria);
        //         input.setAttributeNode(type);
        //         input.className = "form-control form-control-sm";

        //         label2.innerHTML = "Cari :";
        //         label2.appendChild(input);

        //         elemen2.appendChild(label2);
        //     })

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