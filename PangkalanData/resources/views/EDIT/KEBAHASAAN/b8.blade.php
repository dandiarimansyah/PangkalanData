@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA DUTA BAHASA PROVINSI</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TAHUN</th>
                    <th>PROVINSI</th>
                    <th>PEMENANG I</th>
                    <th>PEMENANG II</th>
                    <th>PEMENANG III</th>
                    <th>FAVORIT</th>
                    <th>KETERANGAN</th>
                    <th>MEDIA</th>
                    <th>EDIT/HAPUS</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($duta_provinsi as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tahun}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>1. {{ $a -> pemenang_1_1}} <br> 2. {{ $a -> pemenang_1_2}}</td>
                        <td>1. {{ $a -> pemenang_2_1}} <br> 2. {{ $a -> pemenang_2_2}}</td>
                        <td>1. {{ $a -> pemenang_3_1}} <br> 2. {{ $a -> pemenang_3_2}}</td>
                        <td>1. {{ $a -> favorit_1}} <br> 2. {{ $a -> favorit_2}}</td>
                        <td>{{ $a -> keterangan}}</td>
                        <td></td>

                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-provinsi="{{ $a->provinsi }}"
                                data-tahun="{{ $a->tahun }}"
                                data-pemenang_1_1="{{ $a->pemenang_1_1 }}"
                                data-pemenang_1_2="{{ $a->pemenang_1_2 }}"
                                data-pemenang_2_1="{{ $a->pemenang_2_1 }}"
                                data-pemenang_2_2="{{ $a->pemenang_2_2 }}"
                                data-pemenang_3_1="{{ $a->pemenang_3_1 }}"
                                data-pemenang_3_2="{{ $a->pemenang_3_2 }}"
                                data-pemenang_3_2="{{ $a->pemenang_3_2 }}"
                                data-favorit_1="{{ $a->favorit_1 }}"
                                data-favorit_2="{{ $a->favorit_2 }}"
                                data-keterangan="{{ $a->keterangan }}"
                                data-media="{{ $a->media }}"
                            >Edit</button>

                            <a class="hapus" href="{{ url('/operator/edit/kebahasaan/duta_provinsi/hapus/' . $a->id) }}" data-toggle="tooltip" onclick="return konfirmasi()" id="pesan">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="16" align="center">Tidak ada Data</td>
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
                        <label>Asal Provinsi*</label>
                        <div class="custom_select">
                        <select>
                            <option value="">-- Pilih Kategori --</option>
                            <option value="">Jawa Tengah</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield">
                        <label>Tahun</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Pemenang I (1)</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Pemenang I (2)</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Pemenang II (1)</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Pemenang II (2)</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Pemenang III (1)</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Pemenang III (2)</label>
                        <input type="text" class="input">
                    </div> 

                    <div class="inputfield">
                        <label>Keterangan</label>
                        <textarea class="textarea"></textarea>
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