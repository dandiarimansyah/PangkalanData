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

        <div class="inputfield-radio">
          <label class="label-atas">Status Tanah</label>

          <input type="radio" id="Milik_Sendiri/Kemendikbud" name="status_tanah" value="Milik Sendiri/Kemendikbud">
          <label for="Milik_Sendiri/Kemendikbud">Miik Sendiri/ Kemendikbud</label><br>

          <input type="radio" id="Milik_Pemda" name="status_tanah" value="Milik Pemda">
          <label for="Milik_Pemda">Milik Pemda</label><br>

          <input type="radio" id="Pinjam_Pakai" name="status_tanah" value="Pinjam Pakai">
          <label for="Pinjam_Pakai">Pinjam Pakai</label>
        </div> 

        <div class="inputfield-radio">
          <label  class="label-atas">Sertifikat Tanah</label>

          <input type="radio" id="Asli" name="sertif_tanah" value="Asli">
          <label for="Asli">Asli</label><br>

          <input type="radio" id="Fotokopi" name="sertif_tanah" value="Fotokopi">
          <label for="Fotokopi">Fotokopi</label><br>

          <input type="radio" id="Tidak_Ada" name="sertif_tanah" value="Tidak Ada">
          <label for="Tidak_Ada">Tidak Ada</label><br>
        </div> 

        <div class="inputfield-radio">
          <label class="label-atas">Status Bangunan</label>

          <input type="radio" id="Milik_Sendiri/Kemendikbud_2" name="status_bangunan" value="Milik Sendiri/Kemendikbud">
          <label for="Milik_Sendiri/Kemendikbud_2">Miik Sendiri/ Kemendikbud</label><br>

          <input type="radio" id="Milik_Pemda_2" name="status_bangunan" value="Milik Pemda">
          <label for="Milik_Pemda_2">Milik Pemda</label><br>

          <input type="radio" id="Sewa_Kontrak" name="status_bangunan" value="Sewa Kontrak">
          <label for="Sewa_Kontrak">Sewa Kontrak</label>
        </div> 
        
        <div class="inputfield-radio">
          <label class="label-atas">IMB</label>

          <input type="radio" id="Asli_2" name="imb" value="Asli">
          <label for="Asli_2">Asli</label><br>

          <input type="radio" id="Fotokopi_2" name="imb" value="Fotokopi">
          <label for="Fotokopi_2">Fotokopi</label><br>

          <input type="radio" id="Tidak_Ada_2" name="imb" value="Tidak Ada">
          <label for="Tidak_Ada_2">Tidak Ada</label><br>
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