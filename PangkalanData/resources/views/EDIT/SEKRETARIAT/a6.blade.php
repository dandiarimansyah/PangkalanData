@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA PERPUSTAKAAN</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TANGGAL DIPERBAHARUI</th>
                    <th>PROVINSI</th>
                    <th>UNIT KERJA</th>
                    <th>JUMLAH BUKU</th>
                    <th>JUMLAH JUDUL</th>
                    <th>JENIS</th>
                    <th>JUMLAH PENGUNJUNG</th>
                    <th>SUMBER DATA</th>
                    <th>EDIT/HAPUS</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($perpustakaan as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> updated_at->format('m-d-Y')}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> unit}}</td>
                        <td>{{ $a -> jumlah_buku}}</td>
                        <td>{{ $a -> jumlah_judul}}</td>
                        <td>{{ $a -> jenis_buku}}</td>
                        <td>{{ $a -> jumlah_pengunjung}}</td>
                        <td>{{ $a -> sumber_data}}</td>

                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-provinsi="{{ $a->provinsi }}"
                                data-unit="{{ $a->unit }}"
                                data-jumlah_buku="{{ $a->jumlah_buku }}"
                                data-jumlah_judul="{{ $a->jumlah_judul }}"
                                data-jenis_buku_2="{{ $a->jenis_buku_2 }}"
                                data-jenis_buku="{{ $a->jenis_buku }}"
                                data-jumlah_pengunjung="{{ $a->jumlah_pengunjung }}"
                                data-sumber_data="{{ $a->sumber_data }}"
                            >Edit</button>

                            <a class="hapus" href="{{ url('/operator/edit/sekretariat/perpustakaan/hapus/' . $a->id) }}" data-toggle="tooltip" onclick="return konfirmasi()" id="pesan">Hapus</a>
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
                    <form id="edit_form" action="" method="POST">
                            @csrf
                            @method('PUT')
                    
                        <div class="alert-danger">{{ $errors->first('provinsi') }}</div>
                        <div class="inputfield-select">
                            <label>Provinsi*</label>
                            <div class="custom_select">
                            <select name="provinsi">
                                <option value="Jawa Tengah">Jawa Tengah</option>
                            </select>
                            </div>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('unit') }}</div>
                        <div class="inputfield-select">
                            <label>Unit Kerja*</label>
                            <div class="custom_select">
                            <select name="unit">
                                <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
                            </select>
                            </div>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('jumlah_buku') }}</div>
                        <div class="inputfield">
                            <label>Jumlah Buku</label>
                            <input name="jumlah_buku" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('jumlah_judul') }}</div>
                        <div class="inputfield">
                            <label>Jumlah Judul</label>
                            <input name="jumlah_judul" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('jenis_buku') }}</div>
                        <div class="inputfield-select">
                            <label>Jenis Buku**</label>
                            <div class="custom_select">
                            <select name="jenis_buku" onchange='jenis_lain(this.value);'>
                                <option disabled="disabled" selected="selected" value="">-- Pilih --</option>
                                <option value="Umum">Umum</option>
                                <option value="Karya Sastra">Karya Sastra</option>
                                <option value="Kritik Sastra">Kritik Sastra</option>
                                <option value="Umum">Umum</option>
                                <option value="Teori Sastra/Bahasa">Teori Sastra/Bahasa</option>
                                <option value="Kamus">Kamus</option>
                                <option value="Ensiklopedia">Ensiklopedia</option>
                                <option value="Lain">Lain-lain</option>
                            </select>
                            </div>
                        </div>

                        <div class="inputfield" style="margin-bottom: 0">
                        <label></label>
                        <input disabled placeholder="Pilih Lain-Lain" id="a" style='display:block;' type="text" class="input">
                        </div> 

                        <div class="inputfield" style="margin-top: -8px">
                        <label></label>
                        <input placeholder="Tuliskan jenis buku..." id="jenis_buku_2" style='display:none;' name="jenis_buku_2" type="text" class="input">
                        </div>   

                        <div class="alert-danger">{{ $errors->first('jumlah_pengunjung') }}</div>
                        <div class="inputfield">
                            <label>Jumlah Pengunjung</label>
                            <input name="jumlah_pengunjung" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('sumber_data') }}</div>
                        <div class="inputfield">
                            <label>Sumber Data</label>
                            <input name="sumber_data" type="text" class="input">
                        </div> 
                    
                        <div class="tombol">
                        <input type="reset" value="Ulangi" class="reset">
                        <input type="submit" value="Simpan" class="inputan">
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