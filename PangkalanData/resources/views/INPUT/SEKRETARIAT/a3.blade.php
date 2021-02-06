@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA KEPEGAWAIAN UNIT/SATUAN KERJA</th>
  </div>

  @if ($errors->any())
      @foreach ($errors->all() as $e)
          <div>{{ $e }}</div>
      @endforeach
  @endif

  <div class="wrapper">
      <div class="form">

        <form role="form" action="/operator/input/sekretariat/kepegawaian" method="POST">
          @csrf

        <div class="alert-danger">{{ $errors->first('unit') }}</div>
        <div class="inputfield-select">
            <label>Unit/Satuan Kerja*</label>
            <div class="custom_select">
              <select name="unit">
                <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('laki') }}</div>
        <div class="inputfield">
            <label>Jumlah Pegawai Laki-Laki</label>
            <input name="laki" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('perempuan') }}</div>
        <div class="inputfield">
            <label>Jumlah Pegawai Perempuan</label>
            <input name="perempuan" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('semua_kelamin') }}</div>
        <div class="inputfield">
            <label>Jumlah Pegawai Keseluruhan</label>
            <input name="semua_kelamin" type="text" class="input">
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
            <p for="">SMA</p>
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
            <p for="">4E</p>
          </div>
        </div>

        <div style="justify-content: center; margin-bottom:0" class="inputfield">
          <div class="mini">
            <input name="T_4D" type="text" class="input">
            <p for="">4D</p>
          </div>
          <div class="mini">
            <input name="T_4C" type="text" class="input">
            <p for="">4C</p>
          </div>
          <div class="mini">
            <input name="T_4B" type="text" class="input">
            <p for="">4B</p>
          </div>
          <div class="mini">
            <input name="T_4A" type="text" class="input">
            <p for="">4A</p>
          </div>
          <div class="mini">
            <input name="T_3D" type="text" class="input">
            <p for="">3D</p>
          </div>
          <div class="mini">
            <input name="T_3C" type="text" class="input">
            <p for="">3C</p>
          </div>
          <div class="mini">
            <input name="T_3B" type="text" class="input">
            <p for="">3B</p>
          </div>
          <div class="mini">
            <input name="T_3A" type="text" class="input">
            <p for="">3A</p>
          </div>
        </div>

        <div style="justify-content: center; margin-bottom:0" class="inputfield">
          <div class="mini">
            <input name="T_2D" type="text" class="input">
            <p for="">2D</p>
          </div>
          <div class="mini">
            <input name="T_2C" type="text" class="input">
            <p for="">2C</p>
          </div>
          <div class="mini">
            <input name="T_2B" type="text" class="input">
            <p for="">2B</p>
          </div>
          <div class="mini">
            <input name="T_2A" type="text" class="input">
            <p for="">2A</p>
          </div>
          <div class="mini">
            <input name="T_1D" type="text" class="input">
            <p for="">1D</p>
          </div>
          <div class="mini">
            <input name="T_1C" type="text" class="input">
            <p for="">1C</p>
          </div>
          <div class="mini">
            <input name="T_1B" type="text" class="input">
            <p for="">1B</p>
          </div>
          <div class="mini">
            <input name="T_1A" type="text" class="input">
            <p for="">1A</p>
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