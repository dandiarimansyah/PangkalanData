@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuAkun')

<div class="isi-konten">

    <div class="judul">
        <th>AKUN VALIDATOR</th>

        <div class="import-input">
            <h6>Klik "TAMBAH AKUN" untuk menambahkan Validator Baru</h6>
            <button loc="{{ asset('/Template/Template Kamus Ensiklopedia.xlsx')}}" href="/import/kebahasaan/kamus_ensiklopedia" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
                TAMBAH AKUN
            </button>
        </div>

    </div>
    
       <!-- TABLE -->
       <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO ID</th>
                    <th>Nama Validator</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
            @forelse ($operator as $key => $a)
                    <tr>
                        <td>{{ $loop-> index + 1 }}</td>
                        <td>{{ $a -> name}}</td>
                        <td>{{ $a -> username}}</td>
                        <td>{{ $a -> password}}</td>
                        <td style="display: flex; justify-content:center;">
                           <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"                                data-unit="{{ $a->unit }}"
                                data-peneliti="{{ $a->peneliti }}"
                                data-judul="{{ $a->judul }}"
                                data-kerja_sama="{{ $a->kerja_sama }}"
                                data-tanggal_awal="{{ $a->tanggal_awal }}"
                                data-tanggal_akhir="{{ $a->tanggal_akhir }}"
                                data-lama_penelitian="{{ $a->lama_penelitian }}"
                                data-tipe_waktu="{{ $a->tipe_waktu }}"
                                data-publikasi="{{ $a->publikasi }}"
                                data-tahun_terbit="{{ $a->tahun_terbit }}"
                                data-abstrak="{{ $a->abstrak }}"
                            >Edit</button>

                            <a class="hapus" href="{{ url('/operator/edit/penelitian/penelitian/hapus/' . $a->id) }}" data-toggle="tooltip" id="pesan">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="16" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse
            </tbody>
            
        </table>

    </div>

@endsection