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
                                data-s3="{{ $a->S3 }}"
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
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA KEPEGAWAIAN UNIT/SATUAN KERJA</h5>
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

                    <div class="alert-danger">{{ $errors->first('S3') }}</div>
                    <div class="mini">
                        <input id="s3" name="S3" type="text" class="input">
                        <p for="">S3</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('S2') }}</div>
                    <div class="mini">
                        <input id="s2" name="S2" type="text" class="input">
                        <p for="">S2</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('S1') }}</div>
                    <div class="mini">
                        <input id="s1" name="S1" type="text" class="input">
                        <p for="">S1</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('D3') }}</div>
                    <div class="mini">
                        <input id="d3" name="D3" type="text" class="input">
                        <p for="">D3</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('SMA') }}</div>
                    <div class="mini">
                        <input id="sma" name="SMA" type="text" class="input">
                        <p for="">SMA/K</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('SMP') }}</div>
                    <div class="mini">
                        <input id="smp" name="SMP" type="text" class="input">
                        <p for="">SMP</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('SD') }}</div>
                    <div class="mini">
                        <input id="sd" name="SD" type="text" class="input">
                        <p for="">SD</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('T_4E') }}</div>
                    <div class="mini">
                        <input id="t_4e" name="T_4E" type="text" class="input">
                        <p for="">IV/e</p>
                    </div>
                    </div>

                    <div style="justify-content: center; margin-bottom:0" class="inputfield">

                    <div class="alert-danger">{{ $errors->first('T_4D') }}</div>
                    <div class="mini">
                        <input id="t_4d" name="T_4D" type="text" class="input">
                        <p for="">IV/d</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('T_4C') }}</div>
                    <div class="mini">
                        <input id="t_4c" name="T_4C" type="text" class="input">
                        <p for="">IV/c</p>
                    </div>
                    
                    <div class="alert-danger">{{ $errors->first('T_4B') }}</div>
                    <div class="mini">
                        <input id="t_4b" name="T_4B" type="text" class="input">
                        <p for="">IV/b</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('T_4A') }}</div>
                    <div class="mini">
                        <input id="t_4a" name="T_4A" type="text" class="input">
                        <p for="">IV/a</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('T_3D') }}</div>
                    <div class="mini">
                        <input id="t_3d" name="T_3D" type="text" class="input">
                        <p for="">III/d</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('T_3C') }}</div>
                    <div class="mini">
                        <input id="t_3c" name="T_3C" type="text" class="input">
                        <p for="">III/c</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('T_3B') }}</div>
                    <div class="mini">
                        <input id="t_3b" name="T_3B" type="text" class="input">
                        <p for="">III/b</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('T_3A') }}</div>
                    <div class="mini">
                        <input id="t_3a" name="T_3A" type="text" class="input">
                        <p for="">III/a</p>
                    </div>
                    </div>

                    <div style="justify-content: center; margin-bottom:0" class="inputfield">
                    
                    <div class="alert-danger">{{ $errors->first('T_2D') }}</div>
                    <div class="mini">
                        <input id="t_2d" name="T_2D" type="text" class="input">
                        <p for="">II/d</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('T_2C') }}</div>
                    <div class="mini">
                        <input id="t_2c" name="T_2C" type="text" class="input">
                        <p for="">II/c</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('T_2B') }}</div>
                    <div class="mini">
                        <input id="t_2b" name="T_2B" type="text" class="input">
                        <p for="">II/b</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('T_2A') }}</div>
                    <div class="mini">
                        <input id="t_2a" name="T_2A" type="text" class="input">
                        <p for="">II/a</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('T_1D') }}</div>
                    <div class="mini">
                        <input id="t_1d" name="T_1D" type="text" class="input">
                        <p for="">I/d</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('T_1C') }}</div>
                    <div class="mini">
                        <input id="t_1c" name="T_1C" type="text" class="input">
                        <p for="">I/c</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('T_1B') }}</div>
                    <div class="mini">
                        <input id="t_1b" name="T_1B" type="text" class="input">
                        <p for="">I/b</p>
                    </div>

                    <div class="alert-danger">{{ $errors->first('T_1A') }}</div>
                    <div class="mini">
                        <input id="t_1a" name="T_1A" type="text" class="input">
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
                let s3 = $(this).data('s3');
                let s2 = $(this).data('s2');
                let s1 = $(this).data('s1');
                let d3 = $(this).data('d3');
                let sma = $(this).data('sma');
                let smp = $(this).data('smp');
                let sd = $(this).data('sd');
                let t_4d = $(this).data('t_4d');
                let t_4e = $(this).data('t_4e');
                let t_4c = $(this).data('t_4c');
                let t_4b = $(this).data('t_4b');
                let t_4a = $(this).data('t_4a');
                let t_3d = $(this).data('t_3d');
                let t_3c = $(this).data('t_3c');
                let t_3b = $(this).data('t_3b');
                let t_3a = $(this).data('t_3a');
                let t_2d = $(this).data('t_2d');
                let t_2c = $(this).data('t_2c');
                let t_2b = $(this).data('t_2b');
                let t_2a = $(this).data('t_2a');
                let t_1d = $(this).data('t_1d');
                let t_1c = $(this).data('t_1c');
                let t_1b = $(this).data('t_1b');
                let t_1a = $(this).data('t_1a');

                let id = $(this).data('id');

                $('#unit option').filter(function(){
                    return ($(this).val() == unit)
                }).prop('selected', true);

                $('#tanggal_diperbarui').val(tanggal_diperbarui);
                $('#semua_kelamin').val(semua_kelamin);
                $('#laki').val(laki);
                $('#perempuan').val(perempuan);
                $('#s3').val(s3);
                $('#s2').val(s2);
                $('#s1').val(s1);
                $('#d3').val(d3);
                $('#sma').val(sma);
                $('#smp').val(smp);
                $('#sd').val(sd);
                $('#t_4e').val(t_4e);
                $('#t_4d').val(t_4d);
                $('#t_4c').val(t_4c);
                $('#t_4b').val(t_4b);
                $('#t_4a').val(t_4a);
                $('#t_3d').val(t_3d);
                $('#t_3c').val(t_3c);
                $('#t_3b').val(t_3b);
                $('#t_3a').val(t_3a);
                $('#t_2d').val(t_2d);
                $('#t_2c').val(t_2c);
                $('#t_2b').val(t_2b);
                $('#t_2a').val(t_2a);
                $('#t_1d').val(t_1d);
                $('#t_1c').val(t_1c);
                $('#t_1b').val(t_1b);
                $('#t_1a').val(t_1a);
                
                $('#edit_form').attr('action', '/operator/edit/sekretariat/kepegawaian/' + id);
          })
      </script>
@endpush