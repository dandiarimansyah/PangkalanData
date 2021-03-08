@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuData')
    
<div class="isi-konten">

    <div class="judul">
        <th>DATA ANGGARAN UNIT/SATUAN KERJA PER TAHUN</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead> 
                <tr>
                    <th>NO</th>
                    <th>TAHUN ANGGARAN</th>
                    <th>UNIT/SATUAN KERJA</th>
                    <th>NILAI ANGGARAN(Rp.)</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($anggaran as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tahun_anggaran}}</td>
                        <td>{{ $a -> unit}}</td>
                        <td class="rupiah" data-nilai="{{ $a->nilai_anggaran }}">{{ $a -> nilai_anggaran}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" align="center">Tidak ada Data</td>
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
                    {{-- <div class="form">
                        <form role="form" action="" method="POST">
                            @csrf
                            @method('PUT')
                  
                          <div class="alert-danger">{{ $errors->first('unit') }}</div>
                          <div class="inputfield-select">
                              <label>Unit/Satuan Kerja*</label>
                              <div class="custom_select">
                                <select name="unit">
                                  <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
                                </select>
                              </div>
                          </div>
                          
                          <div class="alert-danger">{{ $errors->first('tahun_anggaran') }}</div>
                          <div class="inputfield">
                              <label>Tahun Anggaran*</label>
                              <input name="tahun_anggaran" value="{{ old('tahun_anggaran', $anggaran->tahun_anggaran) }}" type="text" class="input">
                          </div> 
                  
                          <div class="alert-danger">{{ $errors->first('nilai_anggaran') }}</div>
                          <div class="inputfield">
                              <label>Nilai Anggaran (Rp.)</label>
                              <input name="nilai_anggaran" value="{{ old('tahun_anggaran', $anggaran->nilai_anggaran) }}" type="text" class="input">
                          </div>  
                          
                          <div class="tombol">
                            <input type="reset" value="Ulangi" class="reset">
                            <input type="submit" value="Simpan" class="inputan">
                          </div>
                  
                        </form> --}}
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    

@endsection