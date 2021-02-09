@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

<div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA INVENTARISASI TANAH DAN BANGUNAN BALAI/KANTOR BAHASA</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">TANGGAL DATA</th>
                    <th rowspan="2">BALAI/KANTOR</th>
                    <th colspan="2">TANAH</th>
                    <th colspan="2">BANGUNAN</th>
                    <th rowspan="2">KONDISI</th>
                    <th rowspan="2">STATUS PEMEROLEHAN</th>
                    <th rowspan="2">KETERANGAN</th>
                    <!-- <th rowspan="2">MEDIA</th> -->
                    <th rowspan="2">EDIT/HAPUS</th>
                </tr>
                <tr>
                    <th>STATUS</th>
                    <th>SERTIFIKAT</th>
                    <th>STATUS</th>
                    <th>IMB</th>
                </tr>
            </thead>

            <tbody>

              @forelse ($tanah_bangunan as $key => $a)
                  <tr>
                      <td>{{ $key + 1}}</td>
                      <td>{{ $a -> updated_at->format('m-d-Y')}}</td>
                      <td>{{ $a -> kantor}}</td>
                      <td>{{ $a -> status_tanah}}</td>
                      <td>{{ $a -> sertif_tanah}}</td>
                      <td>{{ $a -> status_bangunan}}</td>
                      <td>{{ $a -> imb}}</td>
                      <td>{{ $a -> kondisi}}</td>
                      <td>{{ $a -> status_peroleh}}</td>
                      <td>{{ $a -> keterangan}}</td>

                      <!-- <td>
                        @if ($a->media != null)
                          <a class="btn btn-info btn-sm" href={{ Storage::url($a->media) }} target="_blank">Media</a>
                        @else
                          Tidak ada media
                        @endif
                        {{-- {{ $a -> media}} --}}
                      </td> -->

                      <td style="display: flex; justify-content:center">
                          <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-kantor="{{ $a->kantor }}"
                                data-status_tanah="{{ $a->status_tanah }}"
                                data-sertif_tanah="{{ $a->sertif_tanah }}"
                                data-status_bangunan="{{ $a->status_bangunan }}"
                                data-imb="{{ $a->imb }}"
                                data-kondisi="{{ $a->kondisi }}"
                                data-status_peroleh="{{ $a->status_peroleh }}"
                                data-keterangan="{{ $a->keterangan }}"
                                
                            >Edit</button>

                          <a class="hapus" href="{{ url('/operator/edit/sekretariat/tanah_dan_bangunan/hapus/' . $a->id) }}" data-toggle="tooltip" onclick="return konfirmasi()" id="pesan">Hapus</a>
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
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA INVENTARISASI TANAH DAN BANGUNAN BALAI/KANTOR BAHASA</h5>
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
                    
                      <div class="alert-danger">{{ $errors->first('kantor') }}</div>
                      <div class="inputfield-select">
                          <label>	Balai/Kantor*</label>
                          <div class="custom_select">
                            <select id="kantor" name="kantor">
                              <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
                            </select>
                          </div>
                      </div> 

                      <div class="alert-danger">{{ $errors->first('alamat') }}</div>
                      <div class="inputfield">
                          <label>Alamat</label>
                          <textarea id="alamat" name="alamat" class="textarea"></textarea>
                      </div>  

                      <div class="inputfield-radio">
                        <label class="label-atas">Status Tanah</label>

                        <input type="radio" id="Milik_Sendiri/Kemendikbud" name="status_tanah" value="Milik Sendiri/Kemendikbud">
                        <label for="Milik_Sendiri/Kemendikbud">Miik Sendiri/ Kemendikbud</label><br>

                        <input type="radio" id="Milik_Pemda" name="status_tanah" value="Milik Pemda">
                        <label for="Milik_Pemda">Milik Pemda</label><br>

                        <input type="radio" id="Pinjam_Pakai" name="status_tanah" value="Pinjam Pakai">
                        <label for="Pinjam_Pakai">Pinjam Pakai</label>
                      </div> 

                      <div class="inputfield-radio">
                        <label  class="label-atas">Sertifikat Tanah</label>

                        <input type="radio" id="Asli" name="sertif_tanah" value="Asli">
                        <label for="Asli">Asli</label><br>

                        <input type="radio" id="Fotokopi" name="sertif_tanah" value="Fotokopi">
                        <label for="Fotokopi">Fotokopi</label><br>

                        <input type="radio" id="Tidak_Ada" name="sertif_tanah" value="Tidak Ada">
                        <label for="Tidak_Ada">Tidak Ada</label><br>
                      </div> 

                      <div class="inputfield-radio">
                        <label class="label-atas">Status Bangunan</label>

                        <input type="radio" id="Milik_Sendiri/Kemendikbud_2" name="status_bangunan" value="Milik Sendiri/Kemendikbud">
                        <label for="Milik_Sendiri/Kemendikbud_2">Miik Sendiri/ Kemendikbud</label><br>

                        <input type="radio" id="Milik_Pemda_2" name="status_bangunan" value="Milik Pemda">
                        <label for="Milik_Pemda_2">Milik Pemda</label><br>

                        <input type="radio" id="Sewa_Kontrak" name="status_bangunan" value="Sewa Kontrak">
                        <label for="Sewa_Kontrak">Sewa Kontrak</label>
                      </div> 
                      
                      <div class="inputfield-radio">
                        <label class="label-atas">IMB</label>

                        <input type="radio" id="Asli_2" name="imb" value="Asli">
                        <label for="Asli_2">Asli</label><br>

                        <input type="radio" id="Fotokopi_2" name="imb" value="Fotokopi">
                        <label for="Fotokopi_2">Fotokopi</label><br>

                        <input type="radio" id="Tidak_Ada_2" name="imb" value="Tidak Ada">
                        <label for="Tidak_Ada_2">Tidak Ada</label><br>
                      </div> 

                      <div class="alert-danger">{{ $errors->first('kondisi') }}</div>
                      <div class="inputfield-select">
                          <label>Kondisi Bangunan</label>
                          <div class="custom_select">
                            <select id="kodisi" name="kondisi">
                              <option value="Baik">Baik</option>
                              <option value="Rusak Sedang">Rusak Sedang</option>
                              <option value="Rusak Berat">Rusak Berat</option>
                            </select>
                          </div>
                      </div> 

                      <div class="alert-danger">{{ $errors->first('status_peroleh') }}</div>
                      <div class="inputfield-select">
                          <label>Status Pemerolehan Tanah/Bangunan</label>
                          <div class="custom_select">
                            <select id="status_peroleh" name="status_peroleh">
                              <option value="Hibah">Hibah</option>
                              <option value="Beli">Beli</option>
                            </select>
                          </div>
                      </div> 

                      <div class="alert-danger">{{ $errors->first('keterangan') }}</div>
                      <div class="inputfield">
                          <label>Keterangan</label>
                          <textarea id="keterangan" name="keterangan" class="textarea"></textarea>
                      </div>

                      <!-- <div class="inputfield-kecil">
                        <label for="">Unggah File</label>
                        <input id="media" type="file" name="media">
                      </div> -->

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
                let kantor = $(this).data('kantor');
                let kondisi = $(this).data('kondisi');
                let status_peroleh = $(this).data('status_peroleh');

                let status_tanah = $(this).data('status_tanah');
                let sertif_tanah = $(this).data('sertif_tanah');
                let status_bangunan = $(this).data('status_bangunan');
                let imb = $(this).data('imb');
                let keterangan = $(this).data('keterangan');

                let id = $(this).data('id');

                $('#kantor option').filter(function(){
                    return ($(this).val() == kantor)
                }).prop('selected', true);

                $('#kondisi option').filter(function(){
                    return ($(this).val() == kondisi)
                }).prop('selected', true);

                $('#status_peroleh option').filter(function(){
                    return ($(this).val() == status_peroleh)
                }).prop('selected', true);

                $('#status_tanah').val(status_tanah);
                $('#sertif_tanah').val(sertif_tanah);
                $('#status_bangunan').val(status_bangunan);
                $('#imb').val(imb);
                $('#keterangan').val(keterangan);
                
                $('#edit_form').attr('action', '/operator/edit/sekretariat/tanah_dan_bangunan/' + id);
          })
      </script>
@endpush