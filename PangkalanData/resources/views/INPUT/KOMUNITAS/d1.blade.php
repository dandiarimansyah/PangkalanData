@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

@if (session('status'))
    <div id="flash" data-url="{{ URL('operator/edit/komunitas/komunitas_bahasa')}}" data-flash="{{ session('status') }}"></div>
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
        <th>INPUT KOMUNITAS BAHASA</th>

        <div class="import-input">
      <h6>Klik "IMPORT EXCEL" untuk memasukkan data menggunakan file excel.</h6>
      <button loc="{{ asset('/Template/Template Komunitas Bahasa.xlsx')}}" href="{{url('/import/komunitas/komunitas_bahasa')}}" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
        <i style="margin-right: 4px" class="fa fa-upload" aria-hidden="true"></i>
        IMPORT EXCEL
      </button>
    </div>

    </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="{{url('/operator/input/komunitas/komunitas_bahasa')}}" method="POST">
          @csrf

        <div class="alert-danger">{{ $errors->first('nama_komunitas') }}</div>
        <div class="inputfield">
            <label>Nama Komunitas</label>
            <input name="nama_komunitas" type="text" class="input">
        </div> 
        
        <!-- <div class="alert-danger">{{ $errors->first('provinsi') }}</div>
        <div class="inputfield-select">
            <label>Provinsi*</label>
            <div class="custom_select">
              <select name="provinsi">
                <option value="Jawa Tengah">Jawa Tengah</option>
              </select>
            </div>
        </div>  -->

        <div class="alert-danger">{{ $errors->first('kota') }}</div>
        <div class="inputfield-select">
            <label>Kabupaten/Kota*</label>
            <div class="custom_select">
              <select name="kota">
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
            <input name="kecamatan" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('alamat') }}</div>
        <div class="inputfield">
            <label>Alamat</label>
            <input name="alamat" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('koordinat') }}</div>
        <div class="inputfield-kecil">
            <label>Koordinat</label>
            <input name="koordinat" type="text" class="input" style="width: 200px">
            <a target="_blank" class="btn btn-success" href="https://www.google.co.id/maps">Google Maps</a>
        </div> 

        <div class="inputfield">
            <label>Keterangan</label>
            <textarea name="keterangan" class="textarea"></textarea>
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

@endsection