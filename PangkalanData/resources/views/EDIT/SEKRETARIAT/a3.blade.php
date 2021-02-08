@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA KEPEGAWAIAN UNIT/SATUAN KERJA</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">TANGGAL DIPERBAHARUI</th>
                    <th rowspan="2">UNIT/SATUAN KERJA</th>
                    <th colspan="3">JUMLAH PEGAWAI</th>
                    <th colspan="7">TINGKAT PENDIDIKAN</th>
                    <th colspan="17">PANGKAT/GOLONGAN</th>
                    <th rowspan="2">EDIT/HAPUS</th>
                </tr>
                <tr>
                    <th>K</th>
                    <th>L</th>
                    <th>P</th>
                    <th>S3</th>
                    <th>S2</th>
                    <th>S1</th>
                    <th>D3</th>
                    <th>SMA</th>
                    <th>SMP</th>
                    <th>SD</th>
                    <th>IV/e</th>
                    <th>IV/d</th>
                    <th>IV/c</th>
                    <th>IV/b</th>
                    <th>IV/a</th>
                    <th>III/d</th>
                    <th>III/c</th>
                    <th>III/b</th>
                    <th>III/a</th>
                    <th>II/d</th>
                    <th>II/c</th>
                    <th>II/b</th>
                    <th>II/a</th>
                    <th>I/d</th>
                    <th>I/c</th>
                    <th>I/b</th>
                    <th>I/a</th>
                </tr> 
            </thead>

            <tbody>

                @forelse ($kepegawaian as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> updated_at->format('m-d-Y')}}</td>
                        <td>{{ $a -> unit }}</td>
                        <td>{{ $a -> semua_kelamin}}</td>
                        <td>{{ $a -> laki}}</td>
                        <td>{{ $a -> perempuan}}</td>
                        <td>{{ $a -> S3}}</td>
                        <td>{{ $a -> S2}}</td>
                        <td>{{ $a -> S1}}</td>
                        <td>{{ $a -> D3}}</td>
                        <td>{{ $a -> SMA}}</td>
                        <td>{{ $a -> SMP}}</td>
                        <td>{{ $a -> SD}}</td>
                        <td>{{ $a -> T_4E}}</td>
                        <td>{{ $a -> T_4D}}</td>
                        <td>{{ $a -> T_4C}}</td>
                        <td>{{ $a -> T_4B}}</td>
                        <td>{{ $a -> T_4A}}</td>
                        <td>{{ $a -> T_3D}}</td>
                        <td>{{ $a -> T_3C}}</td>
                        <td>{{ $a -> T_3B}}</td>
                        <td>{{ $a -> T_3A}}</td>
                        <td>{{ $a -> T_2D}}</td>
                        <td>{{ $a -> T_2C}}</td>
                        <td>{{ $a -> T_2B}}</td>
                        <td>{{ $a -> T_2A}}</td>
                        <td>{{ $a -> T_1D}}</td>
                        <td>{{ $a -> T_1C}}</td>
                        <td>{{ $a -> T_1B}}</td>
                        <td>{{ $a -> T_1A}}</td>
                        
                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-tanggal_diperbarui="{{ $a->tanggal_diperbarui }}"
                                data-unit="{{ $a->unit }}"
                                data-semua_kelamin="{{ $a->semua_kelamin }}"
                                data-laki="{{ $a->laki }}"
                                data-perempuan="{{ $a->perempuan }}"
                                data-S3="{{ $a->S3 }}"
                                data-S2="{{ $a->S2 }}"
                                data-S1="{{ $a->S1 }}"
                                data-D3="{{ $a->D3 }}"
                                data-SMA="{{ $a->SMA }}"
                                data-SMP="{{ $a->SMP }}"
                                data-SD="{{ $a->SD }}"
                                data-T_4E="{{ $a->T_4E }}"
                                data-T_4D="{{ $a->T_4D }}"
                                data-T_4C="{{ $a->T_4C }}"
                                data-T_4B="{{ $a->T_4D }}"
                                data-T_4A="{{ $a->T_4A }}"
                                data-T_3D="{{ $a->T_3D }}"
                                data-T_3C="{{ $a->T_3C }}"
                                data-T_3B="{{ $a->T_3B }}"
                                data-T_3A="{{ $a->T_3A }}"
                                data-T_2D="{{ $a->T_2D }}"
                                data-T_2C="{{ $a->T_2C }}"
                                data-T_2B="{{ $a->T_2B }}"
                                data-T_2A="{{ $a->T_2A }}"
                                data-T_1D="{{ $a->T_1D }}"
                                data-T_1C="{{ $a->T_1C }}"
                                data-T_1B="{{ $a->T_1B }}"
                                data-T_1A="{{ $a->T_1A }}"

                            >Edit</button>

                            <a class="hapus" href="{{ url('/operator/edit/sekretariat/kepegawaian/hapus/' . $a->id) }}" data-toggle="tooltip" onclick="return konfirmasi()" id="pesan">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="32" align="center">Tidak ada Data</td>
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
                    
                            <div class="alert-danger">{{ $errors->first('unit') }}</div>
                    <div class="inputfield-select">
                        <label>Unit/Satuan Kerja*</label>
                        <div class="custom_select">
                        <select name="unit" id="unit">
                            <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
                        </select>
                        </div>
                    </div> 

                    <div class="alert-danger">{{ $errors->first('laki') }}</div>
                    <div class="inputfield">
                        <label>Jumlah Pegawai Laki-Laki</label>
                        <input id="laki" name="laki" type="text" class="input">
                    </div> 

                    <div class="alert-danger">{{ $errors->first('perempuan') }}</div>
                    <div class="inputfield">
                        <label>Jumlah Pegawai Perempuan</label>
                        <input id="perempuan" name="perempuan" type="text" class="input">
                    </div> 

                <div class="alert-danger">{{ $errors->first('semua_kelamin') }}</div>
                    <div class="inputfield">
                        <label>Jumlah Pegawai Keseluruhan</label>
                        <input id="semua_kelamin" name="semua_kelamin" type="text" class="input">
                    </div> 

                    <label style="text-align: center; width:100%;font-weight:bold">Jumlah Pegawai per Tingkatan</label>

                    <div style="justify-content: center; margin-bottom:0" class="inputfield">
                    <div class="mini">
                        <input id="S3" name="S3" type="text" class="input">
                        <p for="">S3</p>
                    </div>
                    <div class="mini">
                        <input id="S2" name="S2" type="text" class="input">
                        <p for="">S2</p>
                    </div>
                    <div class="mini">
                        <input id="S1" name="S1" type="text" class="input">
                        <p for="">S1</p>
                    </div>
                    <div class="mini">
                        <input id="D3" name="D3" type="text" class="input">
                        <p for="">D3</p>
                    </div>
                    <div class="mini">
                        <input id="SMA" name="SMA" type="text" class="input">
                        <p for="">SMA/K</p>
                    </div>
                    <div class="mini">
                        <input id="SMP" name="SMP" type="text" class="input">
                        <p for="">SMP</p>
                    </div>
                    <div class="mini">
                        <input id="SD" name="SD" type="text" class="input">
                        <p for="">SD</p>
                    </div>
                    <div class="mini">
                        <input id="T_4E" name="T_4E" type="text" class="input">
                        <p for="">IV/e</p>
                    </div>
                    </div>

                    <div style="justify-content: center; margin-bottom:0" class="inputfield">
                    <div class="mini">
                        <input id="T_4D" name="T_4D" type="text" class="input">
                        <p for="">IV/d</p>
                    </div>
                    <div class="mini">
                        <input id="T_4C" name="T_4C" type="text" class="input">
                        <p for="">IV/c</p>
                    </div>
                    <div class="mini">
                        <input id="T_4B" name="T_4B" type="text" class="input">
                        <p for="">IV/b</p>
                    </div>
                    <div class="mini">
                        <input id="T_4A" name="T_4A" type="text" class="input">
                        <p for="">IV/a</p>
                    </div>
                    <div class="mini">
                        <input id="T_3D" name="T_3D" type="text" class="input">
                        <p for="">III/d</p>
                    </div>
                    <div class="mini">
                        <input id="T_3C" name="T_3C" type="text" class="input">
                        <p for="">III/c</p>
                    </div>
                    <div class="mini">
                        <input id="T_3B" name="T_3B" type="text" class="input">
                        <p for="">III/b</p>
                    </div>
                    <div class="mini">
                        <input id="T_3A" name="T_3A" type="text" class="input">
                        <p for="">III/a</p>
                    </div>
                    </div>

                    <div style="justify-content: center; margin-bottom:0" class="inputfield">
                    <div class="mini">
                        <input id="T_2D" name="T_2D" type="text" class="input">
                        <p for="">II/d</p>
                    </div>
                    <div class="mini">
                        <input id="T_2C" name="T_2C" type="text" class="input">
                        <p for="">II/c</p>
                    </div>
                    <div class="mini">
                        <input id="T_2B" name="T_2B" type="text" class="input">
                        <p for="">II/b</p>
                    </div>
                    <div class="mini">
                        <input id="T_2A" name="T_2A" type="text" class="input">
                        <p for="">II/a</p>
                    </div>
                    <div class="mini">
                        <input id="T_1D" name="T_1D" type="text" class="input">
                        <p for="">I/d</p>
                    </div>
                    <div class="mini">
                        <input id="T_1C" name="T_1C" type="text" class="input">
                        <p for="">I/c</p>
                    </div>
                    <div class="mini">
                        <input id="T_1B" name="T_1B" type="text" class="input">
                        <p for="">I/b</p>
                    </div>
                    <div class="mini">
                        <input id="T_1A" name="T_1A" type="text" class="input">
                        <p for="">I/a</p>
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
                let unit = $(this).data('unit');

                let tanggal_diperbarui = $(this).data('tanggal_diperbarui');
                let semua_kelamin = $(this).data('semua_kelamin');
                let laki = $(this).data('laki');
                let perempuan = $(this).data('perempuan');
                let S3 = $(this).data('S3');
                let S2 = $(this).data('S2');
                let S1 = $(this).data('S1');
                let D3 = $(this).data('D3');
                let SMK = $(this).data('SMK');
                let SMA = $(this).data('SMA');
                let SMP = $(this).data('SMP');
                let SD = $(this).data('SD');
                let T_4E = $(this).data('T_4E');
                let T_4D = $(this).data('T_4D');
                let T_4C = $(this).data('T_4C');
                let T_4B = $(this).data('T_4B');
                let T_4A = $(this).data('T_4A');
                let T_3D = $(this).data('T_3D');
                let T_3C = $(this).data('T_3C');
                let T_3B = $(this).data('T_3B');
                let T_3A = $(this).data('T_3A');
                let T_2D = $(this).data('T_2D');
                let T_2C = $(this).data('T_2C');
                let T_2B = $(this).data('T_2B');
                let T_2A = $(this).data('T_2A');
                let T_1D = $(this).data('T_1D');
                let T_1C = $(this).data('T_1C');
                let T_1B = $(this).data('T_1B');
                let T_1A = $(this).data('T_1A');

                let id = $(this).data('id');

                $('#unit option').filter(function(){
                    return ($(this).val() == unit)
                }).prop('selected', true);

                $('#tanggal_diperbarui').val(tanggal_diperbarui);
                $('#semua_kelamin').val(semua_kelamin);
                $('#laki').val(laki);
                $('#perempuan').val(perempuan);
                $('#S3').val(S3);
                $('#S2').val(S2);
                $('#S1').val(S1);
                $('#D3').val(D3);
                $('#SMK').val(SMK);
                $('#SMA').val(SMA);
                $('#SMP').val(SMP);
                $('#SD').val(SD);
                $('#T_4E').val(T_4E);
                $('#T_4D').val(T_4D);
                $('#T_4C').val(T_4C);
                $('#T_4B').val(T_4B);
                $('#T_4A').val(T_4A);
                $('#T_3D').val(T_3D);
                $('#T_3C').val(T_3C);
                $('#T_3B').val(T_3B);
                $('#T_3A').val(T_3A);
                $('#T_2D').val(T_2D);
                $('#T_2C').val(T_2C);
                $('#T_2B').val(T_2B);
                $('#T_2A').val(T_2A);
                $('#T_1D').val(T_1D);
                $('#T_1C').val(T_1C);
                $('#T_1B').val(T_1B);
                $('#T_1A').val(T_1A);
                
                $('#edit_form').attr('action', '/operator/edit/sekretariat/kepegawaian/' + id);
          })
      </script>
@endpush