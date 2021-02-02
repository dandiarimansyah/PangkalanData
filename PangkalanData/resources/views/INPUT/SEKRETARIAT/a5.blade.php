@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

<div class="isi-konten">

  <div class="judul">
    <th>INPUT INVENTARISASI TANAH DAN BANGUNAN BALAI/KANTOR BAHASA</th>
  </div>
  <div class="judul">
    <th>MASIH BELUM SELESAI</th>
  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="/operator/input/sekretariat/tanah_dan_bangunan" method="POST">
          @csrf

        <div class="alert-danger">{{ $errors->first('kantor') }}</div>
        <div class="inputfield-select">
            <label>	Balai/Kantor*</label>
            <div class="custom_select">
              <select name="kantor">
                <option value="Balai Bahasa Jawa Tengah">Balai Bahasa Jawa Tengah</option>
              </select>
            </div>
        </div> 

        <div class="alert-danger">{{ $errors->first('alamat') }}</div>
        <div class="inputfield">
            <label>Alamat</label>
            <textarea name="alamat" class="textarea"></textarea>
        </div>  

        <div class="alert-danger">{{ $errors->first('kondisi') }}</div>
        <div class="inputfield-select">
            <label>Kondisi Bangunan</label>
            <div class="custom_select">
              <select name="kondisi">
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
              <select name="status_peroleh">
                <option value="Hibah">Hibah</option>
                <option value="Beli">Beli</option>
              </select>
            </div>
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

</div>
@endsection