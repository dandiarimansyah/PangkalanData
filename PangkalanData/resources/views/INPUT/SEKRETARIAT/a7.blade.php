@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuInput')

@if (session('status'))
    <div id="flash" data-url="{{ URL('operator/edit/sekretariat/inventarisasi_bmn')}}" data-flash="{{ session('status') }}"></div>
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
    <th>INPUT DATA INVENTARISASI BARANG MILIK NEGARA</th>

    <div class="import-input">
      <h6>Klik "IMPORT EXCEL" untuk memasukkan data menggunakan file excel.</h6>
      <button loc="{{ asset('/Template/Template Inventarisasi BMN.xlsx')}}" href="{{url('/import/sekretariat/inventarisasi_bmn')}}" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
        <i style="margin-right: 4px" class="fa fa-upload" aria-hidden="true"></i>  
        IMPORT EXCEL
      </button>
    </div>

  </div>

  <div class="wrapper">
      <div class="form">

      <form role="form" action="{{url('/operator/input/sekretariat/inventarisasi_bmn')}}" method="POST">
          @csrf

        <!-- <div class="inputfield">
            <label>Unit/Satuan Kerja</label>
            <input readonly type="text" value="Balai Bahasa Provinsi Jawa Tengah" class="input">
        </div>  -->

        <div class="alert-danger">{{ $errors->first('tahun_anggaran') }}</div>
        <div class="inputfield">
            <label>Tahun Anggaran*</label>
            <input name="tahun_anggaran" type="text" class="input">
        </div> 

        <div class="row">
            <div class="col">
                <div class="inputfield" style="margin: 25px 0 0 0; font-weight:bold" >
                    <label>Barang Elektronik</label>
                </div> 

                <div class="alert-danger">{{ $errors->first('laptop') }}</div>
                <div class="inputfield-list">
                    <li> <label>Laptop</label> </li>
                    <input name="laptop" type="text" class="input">
                </div> 

                <div class="alert-danger">{{ $errors->first('komputer') }}</div>
                <div class="inputfield-list">
                    <li> <label>Komputer</label> </li>
                    <input name="komputer" type="text" class="input">
                </div> 
            
                <div class="alert-danger">{{ $errors->first('printer') }}</div>
                <div class="inputfield-list">
                    <li> <label>Printer</label> </li>
                    <input name="printer" type="text" class="input">
                </div> 

                <div class="alert-danger">{{ $errors->first('fotocopy') }}</div>
                <div class="inputfield-list">
                    <li> <label>Fotocopy</label> </li>
                    <input name="fotocopy" type="text" class="input">
                </div> 

                <div class="alert-danger">{{ $errors->first('faximili') }}</div>
                <div class="inputfield-list">
                    <li> <label>Faximili</label> </li>
                    <input name="faximili" type="text" class="input">
                </div> 

                <div class="alert-danger">{{ $errors->first('LCD') }}</div>
                <div class="inputfield-list">
                    <li> <label>LCD Projector</label> </li>
                    <input name="LCD" type="text" class="input">
                </div> 

                <div class="alert-danger">{{ $errors->first('TV') }}</div>
                <div class="inputfield-list">
                    <li> <label>TV</label> </li>
                    <input name="TV" type="text" class="input">
                </div> 

                <div class="alert-danger">{{ $errors->first('lain') }}</div>
                <div class="inputfield-list">
                    <li> <label>Lain-Lain</label> </li>
                    <input name="lain" type="text" class="input">
                </div> 
            </div>

            <div class="col">
                <div class="inputfield" style="margin: 25px 0 0 0; font-weight:bold" >
                    <label >Furniture/Meubelair</label>
                </div> 

                <div class="alert-danger">{{ $errors->first('furniture') }}</div>
                <div class="inputfield-list">
                    <li> <label>Jumlah Furniture</label> </li>
                    <input name="furniture" type="text" class="input">
                </div> 

                <div class="inputfield" style="margin: 25px 0 0 0; font-weight:bold" >
                    <label>Kendaraan</label>
                </div> 

                <div class="alert-danger">{{ $errors->first('roda_dua') }}</div>
                <div class="inputfield-list">
                    <li> <label>Roda Dua</label> </li>
                    <input name="roda_dua" type="text" class="input">
                </div> 

                <div class="alert-danger">{{ $errors->first('roda_empat') }}</div>
                <div class="inputfield-list">
                    <li> <label>Roda Empat</label> </li>
                    <input name="roda_empat" type="text" class="input">
                </div> 

                <div class="alert-danger">{{ $errors->first('roda_enam') }}</div>
                <div class="inputfield-list">
                    <li> <label>Roda Enam</label> </li>
                    <input name="roda_enam" type="text" class="input">
                </div> 
            </div>
        </div>
        

        <div class="tombol">
          <input type="reset" value="Ulangi" class="reset">
          <input type="submit" value="Simpan" class="inputan">
        </div> 
        
        </form>

        <label style="font-weight:bold; font-style:italic;">Data dengan tanda * WAJIB diisi</label>
        
          <!-- 
            
        <div class="inputfield">
            <label>Keterangan</label>
            <textarea class="textarea"></textarea>
        </div>   
        

            <div class="inputfield">
            <label>Last Name</label>
            <input type="text" class="input">
        </div>  
        <div class="inputfield">
            <label>Password</label>
            <input type="password" class="input">
        </div>  
        <div class="inputfield">
            <label>Confirm Password</label>
            <input type="password" class="input">
        </div> 
        
          <div class="inputfield">
            <label>Email Address</label>
            <input type="text" class="input">
        </div> 
        <div class="inputfield">
            <label>Phone Number</label>
            <input type="text" class="input">
        </div> 
        
        <div class="inputfield">
            <label>Postal Code</label>
            <input type="text" class="input">
        </div>  -->

      </div>
  </div>	

</div>
@endsection