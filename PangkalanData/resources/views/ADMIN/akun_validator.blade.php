@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuAkun')

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
        <th>AKUN VALIDATOR</th>
    </div>
    
       <!-- TABLE -->
       <div class="validasi">
           <div>
            <div class="input-baru">
                <button type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#add-modal">
                    <i style="margin: 0" class="fa fa-plus" aria-hidden="true"></i>   
                        TAMBAH AKUN VALIDATOR
                   </button>
            </div>
            
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Validator</th>
                    <th>Username</th>
                    {{-- <th>Password</th> --}}
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
            @forelse ($operator as $key => $a)
                    <tr>
                        <td>{{ $loop-> index + 1 }}</td>
                        <td>{{ $a -> name}}</td>
                        <td>{{ $a -> username}}</td>
                        {{-- <td>{{ $a -> password}}</td> --}}
                        <td style="display: flex; justify-content:center;">
                            <button type="button" class="edit"
                            id="edit_akun" 
                            data-toggle="modal" 
                            data-target="#edit_akun-modal"
                            data-id="{{ $a->id }}"                             
                            data-name="{{ $a->name }}"
                            data-username="{{ $a->username }}"
                            data-password="{{ $a->password }}"
                            >Edit</button>
                            
                            @if ($key != 0)
                                <a class="hapus" href="{{ url('/admin/akun_validator/hapus/' . $a->id) }}" data-toggle="tooltip" id="pesan">Hapus</a>
                            @endif

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse
            </tbody>
            
        </table>
    </div>

    </div>

    {{-- POP UP ADD --}}
<div class="modal fade" id="add-modal">
    <div id="modal-add" class="modal-dialog" role="document">
    <div id="modal-content" class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH AKUN VALIDATOR BARU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="wrapper" style="margin: 0">
                <div class="form">
                    <form id="add_form" action="/admin/akun_validator" method="POST">
                        @csrf

                    <div class="inputfield">
                        <label>Nama Validator*</label>
                        <input name="name" type="text" class="input">
                    </div> 
                    
                    <div class="inputfield">
                        <label>Username*</label>
                        <input name="username" type="text" class="input">
                    </div> 
            
                    <div class="inputfield">
                        <label>Password*</label>
                        <input name="password" type="text" class="input">
                    </div> 

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

{{-- POP UP EDIT --}}
<div class="modal fade" id="edit_akun-modal">
    <div id="modal-edit" class="modal-dialog" role="document">
    <div id="modal-content" class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT AKUN VALIDATOR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="wrapper" style="margin: 0">
                <div class="form">
                    <form id="edit_akun_form" action="" method="POST">
                        @csrf
                        @method('PUT')

                    <div class="inputfield">
                        <label>Nama Tamu</label>
                        <input name="name" id="name" type="text" class="input">
                    </div> 
                    
                    <div class="inputfield">
                        <label>Username</label>
                        <input name="username" id="username" type="text" class="input">
                    </div> 
            
                    <div class="inputfield">
                        <label>Password</label>
                        <input name="password" id="password" type="text" class="input" placeholder="Tidak Harus diisi">
                    </div> 

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
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
          $(document).on('click','#edit_akun',function(){
                let name = $(this).data('name');
                let username = $(this).data('username');
                let id = $(this).data('id');

                $('#name').val(name);
                $('#username').val(username);
                
                $('#edit_akun_form').attr('action', '/admin/edit_akun/' + id);
          })
      </script>
@endpush