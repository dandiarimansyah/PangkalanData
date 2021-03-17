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

    <div class="judul">
        <th>KELOLA FOTO BALAI BAHASA PROVINSI JAWA TENGAH</th>
    </div>

    <div class="validasi">
        <table class="content-table"> 
            <thead>
                <tr>
                    <th>NO</th>
                    <th>FOTO</th>
                    <th>EDIT / HAPUS</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($foto_login as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>
                            <img style="height: 200px" src="{{ asset('Gambar/Beranda/'.$a->gambar)}}">
                        </td>
                        <td>
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-unit="{{ $a->unit }}"
                            >Edit</button>
                            
                            <a class="hapus" href="{{ url('/operator/edit/sekretariat/anggaran/hapus/' . $a->id) }}" data-toggle="tooltip" id="pesan">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" align="center">Tambah Gambar</td>
                    </tr>
                @endforelse

            </tbody>
        </table>
    </div>


        <div class="validasi">
            <table class="content-table"> 
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>FOTO</th>
                        <th>EDIT / HAPUS</th>
                    </tr>
                </thead>
    
                <tbody>
                    @forelse ($foto_beranda as $key => $a)
                        <tr>
                            <td>{{ $key + 1}}</td>
                            <td>
                                <img style="height: 200px" src="{{ asset('Gambar/Beranda/'.$a->gambar)}}">
                            </td>
                            <td>
                                <button type="button" class="edit"
                                    id="edit_item" 
                                    data-toggle="modal" 
                                    data-target="#edit-modal"
                                    data-id="{{ $a->id }}"
                                    data-unit="{{ $a->unit }}"
                                >Edit</button>
                                
                                <a class="hapus" href="{{ url('/operator/edit/sekretariat/anggaran/hapus/' . $a->id) }}" data-toggle="tooltip" id="pesan">Hapus</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" align="center">Tambah Gambar</td>
                        </tr>
                    @endforelse
    
                </tbody>
            </table>
        </div>
    
</div>

@endsection

@push('scripts')

@endpush