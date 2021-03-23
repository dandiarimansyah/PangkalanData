@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

@if (session('status'))
    <div id="flash" data-url="{{ URL('operator/edit/sekretariat/kerja_sama')}}" data-flash="{{ session('status') }}"></div>
@endif

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
    <th>INPUT DATA KERJA SAMA</th>

    <div class="import-input">
      <h6>Klik "IMPORT EXCEL" untuk memasukkan data menggunakan file excel.</h6>
      <button loc="{{ asset('/Template/Template Kerja Sama.xlsx')}}" href="{{url('/import/sekretariat/kerja_sama')}}" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
        <i style="margin-right: 4px" class="fa fa-upload" aria-hidden="true"></i>
        IMPORT EXCEL
      </button>
    </div>

  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="{{url('/operator/input/sekretariat/kerja_sama')}}" method="POST" enctype="multipart/form-data">
          @csrf

        <div class="alert-danger">{{ $errors->first('kategori') }}</div>
        <div class="inputfield-select">
            <label>Kategori</label>
            <div class="custom_select">
              <select name="kategori">
                <option value="Internal">Internal</option>
                <option value="Eksternal">Eksternal</option>
              </select>
            </div>
        </div>

        <div class="alert-danger">{{ $errors->first('instansi') }}</div>
        <div class="inputfield">
            <label>Nama Instansi*</label>
            <input name="instansi" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('tanggal_awal') }}</div>
        <div class="inputfield-date">
            <label>Tanggal Kerja sama*</label>
            <input id="date" name="tanggal_awal" type="date" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('tanggal_akhir') }}</div>
        <div class="inputfield-date">
            <label>Tanggal Berakhir</label>
            <input name="tanggal_akhir" type="date" class="input">
        </div> 
        
        <div class="alert-danger">{{ $errors->first('nomor') }}</div>
        <div class="inputfield">
            <label>No.Kerja sama</label>
            <input name="nomor" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('perihal') }}</div>
        <div class="inputfield">
            <label>Perihal</label>
            <textarea name="perihal" class="textarea"></textarea>
        </div>   

        <div class="inputfield">
            <label>Keterangan</label>
            <textarea name="keterangan" class="textarea"></textarea>
        </div>   

        <div class="alert-danger">{{ $errors->first('ttd_1') }}</div>
        <div class="inputfield">
            <label>Ditandatangani Oleh (1)</label>
            <input name="ttd_1" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('instansi_1') }}</div>
        <div class="inputfield">
            <label>Instansi (1)</label>
            <div class="custom_select" style="width: 100%">
              <select name="instansi_1">
                <option value="Badan Pengembangan Bahasa dan Perbukuan">Badan Pengembangan Bahasa dan Perbukuan</option>
                <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('ttd_2') }}</div>
        <div class="inputfield">
            <label>Ditandatangani Oleh (2)</label>
            <input name="ttd_2" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('instansi_2') }}</div>
        <div class="inputfield">
            <label>Instansi (2)</label>
            <div class="custom_select" style="width: 100%">
              <select name="instansi_2">
                <option value="Badan Pengembangan Bahasa dan Perbukuan">Badan Pengembangan Bahasa dan Perbukuan</option>
                <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="inputfield-kecil">
          <label for="">Unggah File</label>
          <input type="file" name="media">
        </div>

        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="submit" value="Simpan" class="inputan">
        </div> 

        </form>
        
        <div class="">
          <label style="font-weight:bold; font-style:italic;">Data dengan tanda * WAJIB diisi</label>
        </div>
        
      </div>
  </div>	

</div>
@endsection