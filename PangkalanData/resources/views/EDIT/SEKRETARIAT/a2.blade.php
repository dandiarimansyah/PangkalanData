@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuEdit')

    <div class="isi-konten">

    <div class="judul">
        <th>EDIT DATA REALISASI ANGGARAN UNIT/SATUAN KERJA</th>
    </div>

    <div class="tombol-kembali">
        <a  type="button" class="btn btn-primary" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false" href="/operator/edit">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> 
            Kembali ke Menu Edit
        </a>
    </div>
    
    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TANGGAL REALISASI</th>
                    <th>UNIT/SATUAN KERJA</th>
                    <th>NILAI REALISASI(Rp.)</th>
                    <th>KETERANGAN</th>
                    <th>EDIT / HAPUS</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($realisasi_anggaran as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> nilai_realisasi}}</td>
                        <td>{{ $a -> unit}}</td>
                        <td>{{ $a -> besar_dana}}</td>
                        <td>{{ $a -> keterangan}}</td>
                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit" data-toggle="modal" data-target="#edit-modal">Edit</button>
                            <form action="/operator/edit/sekretariat/realisasi_anggaran/{{$a->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Hapus" class="hapus">
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

    </div>

    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div id="modal-edit" class="modal-dialog" role="document">
          <div id="modal-content" class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New message</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="wrapper" style="margin: 0">
                    <div class="form">
                <form>
                    
                    <div class="inputfield-select">
                        <label>Unit/Satuan Kerja*</label>
                        <div class="custom_select">
                        <select>
                            <option value="">Balai Bahasa Jawa Tengah</option>
                        </select>
                        </div>
                    </div> 

                    <div class="inputfield">
                        <label>Nilai Realisasi Hingga</label>
                        <input type="text" class="input">
                    </div> 
                    <div class="inputfield">
                        <label>Besarnya Dana Realisasi (Rp.)</label>
                        <input type="text" class="input">
                    </div> 
                    
                    <div class="inputfield">
                        <label>Keterangan</label>
                        <textarea class="textarea"></textarea>
                    </div> 

                </form>
            </div>
            </div>
        </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </div>
      </div>



</div>
    

@endsection