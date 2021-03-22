@extends('PARTIAL.indexV')

@section('style')
<style>
    th.sorting,
    th.sorting_asc,
    th.sorting_desc {
        padding-right: 10px !important;
    }

    th.sorting::before,
    th.sorting::after,
    th.sorting_asc::before,
    th.sorting_asc::after,
    th.sorting_desc::before,
    th.sorting_desc::after {
        content: none !important;
    }
</style>
@endsection

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
        <th>EDIT DATA INVENTARISASI BARANG MILIK NEGARA</th>
    </div>

    <div class="input-baru">
        <a href="{{ URL("/operator/input/sekretariat/inventarisasi_bmn")}}" type="button" class="btn btn-primary">
            <i style="margin-right: 4px" class="fa fa-file-text-o" aria-hidden="true"></i>
            INPUT DATA BARU
        </a>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th rowspan="2">NO</th>
                    <th style="max-width: 90px" rowspan="2">TANGGAL DIPERBARUI</th>
                    <!-- <th rowspan="2">BALAI/KANTOR</th> -->
                    <th style="max-width: 90px" rowspan="2">TAHUN ANGGARAN</th>
                    <th colspan="8">ELEKTRONIK</th>
                    <th rowspan="2">FURNITURE</th>
                    <th colspan="3">KENDARAAN</th>
                    <th rowspan="2">EDIT/HAPUS</th>
                </tr>
                <tr>
                    <th>LAPTOP</th>
                    <th>KOMPUTER</th>
                    <th>PRINTER</th>
                    <th>FOTOCOPY</th>
                    <th>FAXIMILI</th>
                    <th style="max-width: 100px">LCD PROJECTOR</th>
                    <th>TV</th>
                    <th style="max-width: 60px">LAIN-LAIN</th>
                    <th style="max-width: 50px">RODA 2</th>
                    <th style="max-width: 50px">RODA 4</th>
                    <th style="max-width: 50px">RODA 6</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($inventarisasi as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> updated_at->format('d-m-Y')}}</td>
                        <!-- <td>{{ $a -> unit}}</td> -->
                        <td>{{ $a -> tahun_anggaran}}</td>
                        <td>{{ $a -> laptop}}</td>
                        <td>{{ $a -> komputer}}</td>
                        <td>{{ $a -> printer}}</td>
                        <td>{{ $a -> fotocopy}}</td>
                        <td>{{ $a -> faximili}}</td>
                        <td>{{ $a -> LCD}}</td>
                        <td>{{ $a -> TV}}</td>
                        <td>{{ $a -> lain}}</td>
                        <td>{{ $a -> furniture}}</td>
                        <td>{{ $a -> roda_dua}}</td>
                        <td>{{ $a -> roda_empat}}</td>
                        <td>{{ $a -> roda_enam}}</td>

                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-unit="{{ $a->unit }}"
                                data-tahun_anggaran="{{ $a->tahun_anggaran }}"
                                data-laptop="{{ $a->laptop }}"
                                data-komputer="{{ $a->komputer }}"
                                data-printer="{{ $a->printer }}"
                                data-fotocopy="{{ $a->fotocopy }}"
                                data-faximili="{{ $a->faximili }}"
                                data-lcd="{{ $a->LCD }}"
                                data-tv="{{ $a->TV }}"
                                data-lain="{{ $a->lain }}"
                                data-furniture="{{ $a->furniture }}"
                                data-roda_dua="{{ $a->roda_dua }}"
                                data-roda_empat="{{ $a->roda_empat }}"
                                data-roda_enam="{{ $a->roda_enam }}"
                            >Edit</button>

                            <a class="hapus" href="{{ url('/operator/edit/sekretariat/inventarisasi_bmn/hapus/' . $a->id) }}" data-toggle="tooltip" id="pesan">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="17" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>

    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div id="modal-edit" class="modal-dialog" role="document">
          <div id="modal-content" class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">EDIT DATA INVENTARISASI BARANG MILIK NEGARA</h5>
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
                    
                        <!-- <div class="alert-danger">{{ $errors->first('unit') }}</div>
                        <div class="inputfield-select">
                            <label>Unit/Satuan Kerja*</label>
                            <div class="custom_select">
                            <select id="unit" name="unit">
                                <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
                            </select>
                            </div>
                        </div>  -->

                        <div class="alert-danger">{{ $errors->first('tahun_anggaran') }}</div>
                        <div class="inputfield">
                            <label>Tahun Anggaran*</label>
                            <input id="tahun_anggaran" name="tahun_anggaran" type="text" class="input">
                        </div> 

                        <div class="row">
                            <div class="col">
                                <div class="inputfield" style="margin: 25px 0 0 0; font-weight:bold" >
                                    <label>Barang Elektronik</label>
                                </div> 

                                <div class="alert-danger">{{ $errors->first('laptop') }}</div>
                                <div class="inputfield-list">
                                    <li> <label>Laptop</label> </li>
                                    <input id="laptop" name="laptop" type="text" class="input">
                                </div> 

                                <div class="alert-danger">{{ $errors->first('komputer') }}</div>
                                <div class="inputfield-list">
                                    <li> <label>Komputer</label> </li>
                                    <input id="komputer" name="komputer" type="text" class="input">
                                </div> 
                            
                                <div class="alert-danger">{{ $errors->first('printer') }}</div>
                                <div class="inputfield-list">
                                    <li> <label>Printer</label> </li>
                                    <input id="printer" name="printer" type="text" class="input">
                                </div> 

                                <div class="alert-danger">{{ $errors->first('fotocopy') }}</div>
                                <div class="inputfield-list">
                                    <li> <label>Fotocopy</label> </li>
                                    <input id="fotocopy" name="fotocopy" type="text" class="input">
                                </div> 

                                <div class="alert-danger">{{ $errors->first('faximili') }}</div>
                                <div class="inputfield-list">
                                    <li> <label>Faximili</label> </li>
                                    <input id="faximili" name="faximili" type="text" class="input">
                                </div> 

                                <div class="alert-danger">{{ $errors->first('LCD') }}</div>
                                <div class="inputfield-list">
                                    <li> <label>LCD Projector</label> </li>
                                    <input id="lcd" name="LCD" type="text" class="input">
                                </div> 

                                <div class="alert-danger">{{ $errors->first('TV') }}</div>
                                <div class="inputfield-list">
                                    <li> <label>TV</label> </li>
                                    <input id="tv" name="TV" type="text" class="input">
                                </div> 

                                <div class="alert-danger">{{ $errors->first('lain') }}</div>
                                <div class="inputfield-list">
                                    <li> <label>Lain-Lain</label> </li>
                                    <input id="lain" name="lain" type="text" class="input">
                                </div> 
                            </div>

                            <div class="col">
                                <div class="inputfield" style="margin: 25px 0 0 0; font-weight:bold" >
                                    <label>Furniture/Meubelair</label>
                                </div> 

                                <div class="alert-danger">{{ $errors->first('furniture') }}</div>
                                <div class="inputfield-list">
                                    <li> <label>Jumlah Furniture</label> </li>
                                    <input id="furniture" name="furniture" type="text" class="input">
                                </div> 

                                <div class="inputfield" style="margin: 25px 0 0 0; font-weight:bold" >
                                    <label>Kendaraan</label>
                                </div> 

                                <div class="alert-danger">{{ $errors->first('roda_dua') }}</div>
                                <div class="inputfield-list">
                                    <li> <label>Roda Dua</label> </li>
                                    <input id="roda_dua" name="roda_dua" type="text" class="input">
                                </div> 

                                <div class="alert-danger">{{ $errors->first('roda_empat') }}</div>
                                <div class="inputfield-list">
                                    <li> <label>Roda Empat</label> </li>
                                    <input id="roda_empat" name="roda_empat" type="text" class="input">
                                </div> 

                                <div class="alert-danger">{{ $errors->first('roda_enam') }}</div>
                                <div class="inputfield-list">
                                    <li> <label>Roda Enam</label> </li>
                                    <input id="roda_enam" name="roda_enam" type="text" class="input">
                                </div> 
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
                let tahun_anggaran = $(this).data('tahun_anggaran');
                let laptop = $(this).data('laptop');
                let komputer = $(this).data('komputer');
                let printer = $(this).data('printer');
                let fotocopy = $(this).data('fotocopy');
                let faximili = $(this).data('faximili');
                let lcd = $(this).data('lcd');
                let tv = $(this).data('tv');
                let lain = $(this).data('lain');
                let furniture = $(this).data('furniture');
                let roda_dua = $(this).data('roda_dua');
                let roda_empat = $(this).data('roda_empat');
                let roda_enam = $(this).data('roda_enam');

                let id = $(this).data('id');

                $('#unit option').filter(function(){
                    return ($(this).val() == unit)
                }).prop('selected', true);

                $('#tahun_anggaran').val(tahun_anggaran);
                $('#laptop').val(laptop);
                $('#komputer').val(komputer);
                $('#printer').val(printer);
                $('#fotocopy').val(fotocopy);
                $('#faximili').val(faximili);
                $('#lcd').val(lcd);
                $('#tv').val(tv);
                $('#lain').val(lain);
                $('#furniture').val(furniture);
                $('#roda_dua').val(roda_dua);
                $('#roda_empat').val(roda_empat);
                $('#roda_enam').val(roda_enam);
                
                $('#edit_form').attr('action', '/operator/edit/sekretariat/inventarisasi_bmn/' + id);
          })
      </script>
@endpush