@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuAkun')

<div class="isi-konten">

    <div class="judul">
        <th>AKUN VALIDATOR</th>
    </div>
    
       <!-- TABLE -->
       <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Validator</th>
                    <th>Password</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tbody>
            
        </table>

    </div>

@endsection