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

        <div class="inputfield-select">
          <label>Status Tanah</label>

          <input type="radio" id="Milik_Sendiri/Kemendikbud" name="status_tanah" value="Milik Sendiri/Kemendikbud">
          <label for="Milik Sendiri/Kemendikbud">Miik Sendiri/Kemendikbud</label><br>

          <input type="radio" id="Milik_Pemda" name="status_tanah" value="Milik Pemda">
          <label for="Milik Pemda">Milik Pemda</label><br>

          <input type="radio" id="Pinjam_Pakai" name="status_tanah" value="Pinjam Pakai">
          <label for="Pinjam Pakai">Pinjam Pakai</label>
        </div> 

        <div class="inputfield-select">
          <label>Sertifikat Tanah</label>

          <input type="radio" id="Ada" name="sertifikat_tanah" value="Ada">
          <label for="Ada">Ada</label><br>

          <input type="radio" id="Tidak_Ada" name="sertifikat_tanah" value="Tidak Ada">
          <label for="Tidak Ada">Tidak Ada</label><br>
        </div> 

        <div class="inputfield-select">
          <label>Jika Ada</label>

          <input type="radio" id="Asli" name="sertifikat_tanah" value="Asli">
          <label for="Asli">Asli</label><br>

          <input type="radio" id="Fotokopi" name="sertifikat_tanah" value="Fotokopi">
          <label for="Fotokopi">Fotokopi</label><br>
        </div> 

        <div class="inputfield-select">
          <label>Status Bangunan</label>

          <input type="radio" id="Milik_Sendiri/Kemendikbud_2" name="status_tanah" value="Milik Sendiri/Kemendikbud">
          <label for="Milik Sendiri/Kemendikbud">Miik Sendiri/Kemendikbud</label><br>

          <input type="radio" id="Milik_Pemda_2" name="status_tanah" value="Milik Pemda">
          <label for="Milik Pemda">Milik Pemda</label><br>

          <input type="radio" id="Sewa_Kontrak" name="status_tanah" value="Sewa Kontrak">
          <label for="Sewa Kontrak">Sewa Kontrak</label>
        </div> 
        
        <div class="inputfield-select">
          <label>IMB</label>

          <input type="radio" id="Ada_2" name="IMB" value="Ada">
          <label for="Ada">Ada</label><br>

          <input type="radio" id="Tidak_Ada_2" name="IMB" value="Tidak Ada">
          <label for="Tidak Ada">Tidak Ada</label><br>
        </div> 

        <div class="inputfield-select">
          <label>Jika Ada</label>

          <input type="radio" id="Asli_2" name="sertifikat_tanah" value="Asli">
          <label for="Asli">Asli</label><br>

          <input type="radio" id="Fotokopi_2" name="sertifikat_tanah" value="Fotokopi">
          <label for="Fotokopi">Fotokopi</label><br>
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