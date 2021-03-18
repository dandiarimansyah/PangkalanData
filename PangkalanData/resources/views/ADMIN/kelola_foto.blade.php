@extends('PARTIAL.indexV')

@section('content')

<div style="min-height: 72.2vh" class="isi-konten">

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

    <div style="border-bottom: 2px solid black" class="judul">
        <th>KELOLA FOTO BALAI BAHASA PROVINSI JAWA TENGAH</th>
    </div>

    <h1 class="judul_foto">FOTO HALAMAN LOGIN</h1>
    
    <div class="foto_login">
        <div class="card" style="width: 600px;">
            <img class="card-img-top" src="{{ Storage::url('Foto/' . $foto_login[0]->gambar) }}" alt="Card image cap">
            <div class="tombol_foto">
                <button type="button"
                    id="edit_item" class="foto1"
                    data-toggle="modal" 
                    data-target="#edit-modal"
                    data-id="{{ $foto_login[0]->id }}"
                    >Ganti Foto
                </button>
            </div>
        </div>
    </div>

    <h1 class="judul_foto">FOTO HALAMAN BERANDA</h1>

    <div class="input-baru">
        <button href="{{ url('/admin/kelola_foto/tambah_foto_beranda')}}" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#tambah-modal">
            <i style="margin-right: 4px" class="fa fa-upload" aria-hidden="true"></i>
            TAMBAH FOTO BERANDA
          </button>
    </div>

    <div class="foto_login">
        <div class="row">
            @foreach ($foto_beranda as $key => $a)
                <div class="col-sm-4" style="margin-top: 20px">
                    <div class="card">
                        <img class="card-img-top" src="{{ Storage::url('Foto/' . $a->gambar) }}" alt="Foto">
                        <div class="tombol_foto">
                            <button type="button"
                                id="edit_item" class="foto1"
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                >Ganti Foto
                            </button>
                            <a class="foto2" href="{{ url('/admin/kelola_foto/hapus/' . $a->id) }}" data-toggle="tooltip" id="pesan">Hapus</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div> 
    
</div>

<div class="modal fade" id="edit-modal">
    <div id="modal-edit" class="modal-dialog" role="document">
    <div id="modal-content" class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GANTI FOTO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="wrapper" style="padding: 0">
                <div class="form">
                    <form id="edit_form" action="" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="modal-body">
                                <p style="font-size: 16px; margin-top:5px">Pilih foto untuk diunggah!</p>
                                <input name="file" type="file" required='required' oninvalid="this.setCustomValidity('Silahkan Masukkan Foto!')"
                                oninput="this.setCustomValidity('')">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Unggah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- Modal Tambah Foto -->
<div class="modal fade" id="tambah-modal">
    <div id="modal-edit" class="modal-dialog" role="document">
    <div id="modal-content" class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH FOTO BERANDA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="wrapper" style="padding: 0">
                <div class="form">
                    <form id="tambah_form" action="{{ url('/admin/kelola_foto/tambah_foto_beranda')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="modal-body">
                                <p style="font-size: 16px; margin-top:5px">Foto akan ditampilkan di Menu Beranda</p>
                                <p style="font-size: 16px; margin-top:5px">Pilih foto untuk diunggah!</p>
                                <input name="file" type="file" required='required' oninvalid="this.setCustomValidity('Silahkan Masukkan Foto!')"
                                oninput="this.setCustomValidity('')">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Unggah</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection

@push('scripts')
    <script>
        $(document).on('click','#edit_item',function(){
            let id = $(this).data('id');
            
            $('#edit_form').attr('action', '/admin/kelola_foto/' + id);
        })
    </script>
@endpush