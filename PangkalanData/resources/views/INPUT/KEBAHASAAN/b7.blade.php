@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT DATA DUTA BAHASA NASIONAL</th>
  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/sekretariat/duta_bahasa_nasional" method="POST">
          @csrf

        <div class="alert-danger">{{ $errors->first('provinsi') }}</div>
        <div class="inputfield-select">
            <label>Asal Provinsi*</label>
            <div class="custom_select">
              <select name="provinsi">
                <option value="">-- Pilih Kategori --</option>
                <option value="Aceh">Aceh</option>
                <option value="Sumatera Utara">Sumatera Utara</option>
                <option value="Sumatera Barat">Sumatera Barat</option>
                <option value="Bengkulu">Bengkulu</option>
                <option value="Riau">Riau</option>
                <option value="Kepulauan Riau">Kepulauan Riau</option>
                <option value="Jambi">Jambi</option>
                <option value="Sumatera Selatan">Sumatera Selatan</option>
                <option value="Lampung">Lampung</option>
                <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                <option value="DKI Jakarta">DKI Jakarta</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Banten">Banten</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
                <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                <option value="Jawa Timur">Jawa Timur</option>
                <option value="Kalimantan Barat">Kalimantan Barat</option>
                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                <option value="Bali">Bali</option>
                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                <option value="Sulawesi Barat">Sulawesi Barat</option>
                <option value="Sulawesi Utara">Sulawesi Utara</option>
                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                <option value="Gorontalo">Gorontalo</option>
                <option value="Maluku">Maluku</option>
                <option value="Maluku Utara">Maluku Utara</option>
                <option value="Papua Barat">Papua Barat</option>
                <option value="Papua">Papua</option>
                <option value="Kalimantan Utara">Kalimantan Utara</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('tahun') }}</div>
        <div class="inputfield">
            <label>Tahun</label>
            <input name="tahun" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_1') }}</div>
        <div class="inputfield">
            <label>Pemenang I (1)</label>
            <input name="pemenang_1" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_12') }}</div>
        <div class="inputfield">
            <label>Pemenang I (2)</label>
            <input name="pemenang_12" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_2') }}</div>
        <div class="inputfield">
            <label>Pemenang II (1)</label>
            <input name="pemenang_2" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_22') }}</div>
        <div class="inputfield">
            <label>Pemenang II (2)</label>
            <input name="pemenang_21" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_3') }}</div>
        <div class="inputfield">
            <label>Pemenang III (1)</label>
            <input name="pemenang_3" type="text" class="input">
        </div> 

        <div class="alert-danger">{{ $errors->first('pemenang_32') }}</div>
        <div class="inputfield">
            <label>Pemenang III (2)</label>
            <input name="pemenang_32" type="text" class="input">
        </div> 

        <div class="inputfield">
            <label>Keterangan</label>
            <textarea class="textarea"></textarea>
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