@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

@if (session('status'))
    <div id="flash" data-url="{{ URL('operator/edit/kebahasaan/penyuluhan')}}" data-flash="{{ session('status') }}"></div>
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
    <th>INPUT DATA PENYULUHAN</th>

    <div class="import-input">
      <h6>Klik "IMPORT EXCEL" untuk memasukkan data menggunakan file excel.</h6>
      <button loc="{{ asset('/Template/Template Penyuluhan.xlsx')}}" href="/import/kebahasaan/penyuluhan" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
        <i style="margin-right: 4px" class="fa fa-upload" aria-hidden="true"></i>
        IMPORT EXCEL
      </button>
    </div>

  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/kebahasaan/penyuluhan" method="POST" enctype="multipart/form-data">
          @csrf

        <div class="inputfield">
            <label>Provinsi</label>
            <input readonly type="text" value="Jawa Tengah" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('kota') }}</div>
        <div class="inputfield">
            <label>Kabupaten/Kota*</label>
            <input name="kota" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('nama_kegiatan') }}</div>
        <div class="inputfield">
            <label>Nama Kegiatan</label>
            <input name="nama_kegiatan" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('tanggal_awal') }}</div>
        <div class="inputfield-date">
            <label>Tanggal Awal Pelaksanaan</label>
            <input name="tanggal_awal" type="date" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('tanggal_akhir') }}</div>
        <div class="inputfield-date">
            <label>Tanggal Akhir Pelaksanaan</label>
            <input name="tanggal_akhir" type="date" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('narasumber') }}</div>
        <div class="inputfield-kecil">
            <label>Narasumber</label>
            <label style="width: 110px; margin-right:10px">Jumlah Narasumber</label>
            <div style="width: 80px" class="custom_select">
              <select onchange="narasumberFunction()" id="jumlah_narasumber" name="jumlah_narasumber">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
            </div>
            <p>*Pilih Jumlah Narasumber</p>
        </div>

        <div id="parent_narasumber">
          
        </div>

        {{-- @for ($i = 1; $i <= 2; $i++)
          <div class="inputfield">
            <label></label>
            <label style="margin-right:10px; margin-left:35px">Narasumber {{$i}}</label>
            <input name="narasumber{{$i}}" type="text" class="input">
          </div> 
        @endfor --}}

        <div class="alert-danger">{{ $errors->first('sasaran') }}</div>
        <div class="inputfield">
            <label>Sasaran</label>
            <input name="sasaran" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('jumlah_peserta') }}</div>
        <div class="inputfield">
            <label>Jumlah Peserta</label>
            <input name="jumlah_peserta" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('materi') }}</div>
        <div class="inputfield">
            <label>Materi</label>
            <textarea name="materi" class="textarea"></textarea>
        </div>  

        <div class="inputfield-kecil">
          <label for="">Unggah Media</label>
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

@push('scripts')
  <script>
    function narasumberFunction() {
      var jumlah = document.getElementById("jumlah_narasumber").value;
      var parent = document.getElementById("parent_narasumber");
      parent.innerHTML = '';

      for (var i = 1; i <= jumlah; i++) {
        var div = document.createElement("div");
        var label1 = document.createElement("label");
        var label2 = document.createElement("label");
        var input = document.createElement("input");

        div.className = "inputfield";
        label2.className = "narasumber_css";
        label2.innerHTML = "Narasumber " + i;
        input.className = "input";
        input.setAttribute('name', 'narasumber'+i);

        div.appendChild(label1);
        div.appendChild(label2);
        div.appendChild(input);

        parent.appendChild(div);
      }
    }
  </script>
@endpush