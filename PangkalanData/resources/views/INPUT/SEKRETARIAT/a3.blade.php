@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

@if (session('status'))
    <div id="flash" data-url="{{ URL('operator/edit/sekretariat/kepegawaian')}}" data-flash="{{ session('status') }}"></div>
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
    <th>INPUT DATA KEPEGAWAIAN UNIT/SATUAN KERJA</th>

    <div class="import-input">
      <h6>Klik "IMPORT EXCEL" untuk memasukkan data menggunakan file excel.</h6>
      <button loc="{{ asset('/Template/Template Kepegawaian.xlsx')}}" href="{{ url('/import/sekretariat/kepegawaian')}}" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
        <i style="margin-right: 4px" class="fa fa-upload" aria-hidden="true"></i>
        IMPORT EXCEL
      </button>
    </div>

  </div>
  

  @if ($errors->any())
      @foreach ($errors->all() as $e)
          <div>{{ $e }}</div>
      @endforeach
  @endif

  <div class="wrapper">
      <div class="form">

        <form role="form" action="{{url('/operator/input/sekretariat/kepegawaian')}}" method="POST">
          @csrf

        <!-- <div class="inputfield">
            <label>Unit/Satuan Kerja</label>
            <input readonly type="text" value="Balai Bahasa Provinsi Jawa Tengah" class="input">
        </div>  -->

        <div class="alert-danger">{{ $errors->first('laki') }}</div>
        <div class="inputfield">
            <label>Jumlah Pegawai Laki-Laki</label>
            <input name="laki" id="jum1" type="text" class="input jum">
        </div> 

        <div class="alert-danger">{{ $errors->first('perempuan') }}</div>
        <div class="inputfield">
            <label>Jumlah Pegawai Perempuan</label>
            <input name="perempuan" id="jum2" type="text" class="input jum">
        </div> 

        <div class="alert-danger">{{ $errors->first('semua_kelamin') }}</div>
        <div class="inputfield">
            <label>Jumlah Pegawai Keseluruhan</label>
            <input name="semua_kelamin" id="all" type="text" class="input" readonly placeholder="Terisi Otomatis">
        </div> 

        <label style="text-align: center; width:100%;font-weight:bold">Jumlah Pegawai per Tingkatan</label>

        <div style="justify-content: center; margin-bottom:0" class="inputfield">
          <div class="mini">
            <input name="S3" type="text" class="input">
            <p for="">S3</p>
          </div>
          <div class="mini">
            <input name="S2" type="text" class="input">
            <p for="">S2</p>
          </div>
          <div class="mini">
            <input name="S1" type="text" class="input">
            <p for="">S1</p>
          </div>
          <div class="mini">
            <input name="D3" type="text" class="input">
            <p for="">D3</p>
          </div>
          <div class="mini">
            <input name="SMA" type="text" class="input">
            <p for="">SMA/K</p>
          </div>
          <div class="mini">
            <input name="SMP" type="text" class="input">
            <p for="">SMP</p>
          </div>
          <div class="mini">
            <input name="SD" type="text" class="input">
            <p for="">SD</p>
          </div>
          <div class="mini">
            <input name="T_4E" type="text" class="input">
            <p for="">IV/e</p>
          </div>
        </div>

        <div style="justify-content: center; margin-bottom:0" class="inputfield">
          <div class="mini">
            <input name="T_4D" type="text" class="input">
            <p for="">IV/d</p>
          </div>
          <div class="mini">
            <input name="T_4C" type="text" class="input">
            <p for="">IV/c</p>
          </div>
          <div class="mini">
            <input name="T_4B" type="text" class="input">
            <p for="">IV/b</p>
          </div>
          <div class="mini">
            <input name="T_4A" type="text" class="input">
            <p for="">IV/a</p>
          </div>
          <div class="mini">
            <input name="T_3D" type="text" class="input">
            <p for="">III/d</p>
          </div>
          <div class="mini">
            <input name="T_3C" type="text" class="input">
            <p for="">III/c</p>
          </div>
          <div class="mini">
            <input name="T_3B" type="text" class="input">
            <p for="">III/b</p>
          </div>
          <div class="mini">
            <input name="T_3A" type="text" class="input">
            <p for="">III/a</p>
          </div>
        </div>

        <div style="justify-content: center; margin-bottom:0" class="inputfield">
          <div class="mini">
            <input name="T_2D" type="text" class="input">
            <p for="">II/d</p>
          </div>
          <div class="mini">
            <input name="T_2C" type="text" class="input">
            <p for="">II/c</p>
          </div>
          <div class="mini">
            <input name="T_2B" type="text" class="input">
            <p for="">II/b</p>
          </div>
          <div class="mini">
            <input name="T_2A" type="text" class="input">
            <p for="">II/a</p>
          </div>
          <div class="mini">
            <input name="T_1D" type="text" class="input">
            <p for="">I/d</p>
          </div>
          <div class="mini">
            <input name="T_1C" type="text" class="input">
            <p for="">I/c</p>
          </div>
          <div class="mini">
            <input name="T_1B" type="text" class="input">
            <p for="">I/b</p>
          </div>
          <div class="mini">
            <input name="T_1A" type="text" class="input">
            <p for="">I/a</p>
          </div>
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
  $(document).on("keyup", ".jum", function(e){
        var jum1 = $("#jum1").val();
        if(jum1 == ""){
          jum1 = "0";
        }

        var jum2 = $("#jum2").val();
        if(jum2 == ""){
          jum2 = "0";
        }

        var all = parseInt(jum1) + parseInt(jum2);

        $("#all").val(all);
  });
</script>
        
@endpush