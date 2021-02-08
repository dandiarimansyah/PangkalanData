@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA KEPEGAWAIAN UNIT/SATUAN KERJA</th>
    </div>

    <!-- <div class="menu" style="display:flex; justify-content:center">
        <div class="btn-group kategori">
            <a  type="button" class="btn btn-info" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false" href="/operator/edit">
                KEMBALI KE MENU EDIT
            </a>
        </div>
    </div> -->

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
                            <button type="button" class="edit" data-toggle="modal" data-target="#edit-modal">Edit</button>
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
                <form>
                    
                    <div class="inputfield-select">
                        <label>Unit/Satuan Kerja*</label>
                        <div class="custom_select">
                        <select>
                            <option value="">Balai Bahasa Jawa Tengah</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield">
                        <label>Jumlah Pegawai Laki-Laki</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Jumlah Pegawai Perempuan</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Jumlah Pegawai Keseluruhan</label>
                        <input type="text" class="input">
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