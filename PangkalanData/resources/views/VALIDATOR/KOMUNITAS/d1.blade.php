@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

<div class="isi-konten">

    <div class="judul">
        <th>VALIDASI DATA KOMUNITAS BAHASA</th>
    </div>

    <div class="ketjudul" style="margin-top:0px ;">
        <th>Klik tombol <b>"Pilih Semua"</b> untuk mencentang semua data</th>
        <br>
        <th>Klik tombol <b>"Validasi Data"</b>  untuk memvalidasi data yang telah dicentang</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center; margin-top:3px;">
        <div class="btn-group kategori">
            <button type="button" class="btn btn-primary" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                EKSPOR KE PDF 
            </button>
        </div>
        
        <div class="pilih_semua">
            <label for="valid">PILIH SEMUA</label>
            <input type='checkbox' id='valid'>
        </div>

        <div class="btn-group kategori">
            <button href="{{ URL('validator/komunitas/komunitas_bahasa')}}" id="tombol_validasi" type="button" class="btn btn-success" style="border-radius: 5px">
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
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>KECAMATAN</th>
                    <th>KABUPATEN/KOTA</th>
                    <th>PROVINSI</th>
                    <th>KOORDINAT</th>
                    <th>KETERANGAN</th>
                    <th>EDIT</th>
                    <th>VALIDASI</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($komunitas_bahasa as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> nama_komunitas}}</td>
                        <td>{{ $a -> alamat}}</td>
                        <td>{{ $a -> kecamatan}}</td>
                        <td>{{ $a -> kota}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> koordinat}}</td>
                        <td>{{ $a -> keterangan}}</td>

                        <td style="display: flex; justify-content:center">
                        <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-nama_komunitas="{{ $a->nama_komunitas }}"
                                data-provinsi="{{ $a->provinsi }}"
                                data-kota="{{ $a->kota }}"
                                data-kecamatan="{{ $a->kecamatan }}"
                                data-alamat="{{ $a->alamat }}"
                                data-koordinat="{{ $a->koordinat }}"
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
                        <td colspan="16" align="center">Tidak ada Data</td>
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
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA KOMUNITAS BAHASA</h5>
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
                    
                        <div class="alert-danger">{{ $errors->first('nama_komunitas') }}</div>
                        <div class="inputfield">
                            <label>Nama Komunitas</label>
                            <input id="nama_komunitas" name="nama_komunitas" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('provinsi') }}</div>
                        <div class="inputfield-select">
                            <label>Provinsi*</label>
                            <div class="custom_select">
                            <select id="provinsi" name="provinsi">
                                <option disabled="disabled" selected="selected" value="">-- Pilih Provinsi--</option>
                                <option value="Jawa Tengah">Jawa Tengah</option>
                            </select>
                            </div>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('kota') }}</div>
                        <div class="inputfield-select">
                            <label>Kabupaten/Kota*</label>
                            <div class="custom_select">
                            <select id="kota" name="kota">
                                <option disabled="disabled" selected="selected" value="">-- Pilih Kabupaten/Kota--</option>
                                <option value="Kabupaten Cilacap">Kabupaten Cilacap</option>
                                <option value="Kabupaten Banyumas">Kabupaten Banyumas</option>
                                <option value="Kabupaten Purbalingga">Kabupaten Purbalingga</option>
                                <option value="Kabupaten Banjarnegara">Kabupaten Banjarnegara</option>
                                <option value="Kabupaten Kebumen">Kabupaten Kebumen</option>
                                <option value="Kabupaten Purworejo">Kabupaten Purworejo</option>
                                <option value="Kabupaten Wonosobo">Kabupaten Wonosobo</option>
                                <option value="Kabupaten Magelang">Kabupaten Magelang</option>
                                <option value="Kabupaten Boyolali">Kabupaten Boyolali</option>
                                <option value="Kabupaten Klaten">Kabupaten Klaten</option>
                                <option value="Kabupaten Sukoharjo">Kabupaten Sukoharjo</option>
                                <option value="Kabupaten Wonogiri">Kabupaten Wonogiri</option>
                                <option value="Kabupaten Karanganyar">Kabupaten Karanganyar</option>
                                <option value="Kabupaten Sragen">Kabupaten Sragen</option>
                                <option value="Kabupaten Grobogan">Kabupaten Grobogan</option>
                                <option value="Kabupaten Blora">Kabupaten Blora</option>
                                <option value="Kabupaten Rembang">Kabupaten Rembang</option>
                                <option value="Kabupaten Pati">Kabupaten Pati</option>
                                <option value="Kabupaten Kudus">Kabupaten Kudus</option>
                                <option value="Kabupaten Jepara">Kabupaten Jepara</option>
                                <option value="Kabupaten Demak">Kabupaten Demak</option>
                                <option value="Kabupaten Semarang">Kabupaten Semarang</option>
                                <option value="Kabupaten Temanggung">Kabupaten Temanggung</option>
                                <option value="Kabupaten Kendal">Kabupaten Kendal</option>
                                <option value="Kabupaten Batang">Kabupaten Batang</option>
                                <option value="Kabupaten Pekalongan">Kabupaten Pekalongan</option>
                                <option value="Kabupaten Pemalang">Kabupaten Pemalang</option>
                                <option value="Kabupaten Tegal">Kabupaten Tegal</option>
                                <option value="Kabupaten Brebes">Kabupaten Brebes</option>
                                <option value="Kota Magelang">Kota Magelang</option>
                                <option value="Kota Surakarta">Kota Surakarta</option>
                                <option value="Kota Salatiga">Kota Salatiga</option>
                                <option value="Kota Semarang">Kota Semarang</option>
                                <option value="Kota Pekalongan">Kota Pekalongan</option>
                                <option value="Kota Tegal">Kota Tegal</option>
                            </select>
                            </div>
                        </div> 

                        <div class="alert-danger">{{ $errors->first('kecamatan') }}</div>
                        <div class="inputfield">
                            <label>Kecamatan</label>
                            <input id="kecamatan" name="kecamatan" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('alamat') }}</div>
                        <div class="inputfield">
                            <label>Alamat</label>
                            <input id="alamat" name="alamat" type="text" class="input">
                        </div> 

                        <div class="alert-danger">{{ $errors->first('koordinat') }}</div>
                        <div class="inputfield-kecil">
                            <label>Koordinat</label>
                            <input id="koordinat" name="koordinat" type="text" class="input" style="width: 200px">
                            <a href="https://www.google.co.id/maps">Buka Maps</a>
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

@endsection


@push('scripts')
      <script>

          $(document).on('click','#edit_item',function(){
                let provinsi = $(this).data('provinsi');
                let kota = $(this).data('kota');

                let nama_komunitas = $(this).data('nama_komunitas');
                let kecamatan = $(this).data('kecamatan');
                let alamat = $(this).data('alamat');
                let koordinat = $(this).data('koordinat');
                let keterangan = $(this).data('keterangan');

                let id = $(this).data('id');

                $('#provinsi option').filter(function(){
                    return ($(this).val() == provinsi)
                }).prop('selected', true);

                $('#kota option').filter(function(){
                    return ($(this).val() == kota)
                }).prop('selected', true);

                $('#nama_komunitas').val(nama_komunitas);
                $('#kecamatan').val(kecamatan);
                $('#alamat').val(alamat);
                $('#koordinat').val(koordinat);
                $('#keterangan').val(keterangan);
                
                $('#edit_form').attr('action', '/operator/edit/komunitas/komunitas_bahasa/' + id);
          })
      </script>
@endpush