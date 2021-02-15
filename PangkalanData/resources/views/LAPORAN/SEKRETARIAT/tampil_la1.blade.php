@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')
    
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
        <th>LAPORAN DATA ANGGARAN UNIT/SATUAN KERJA PER TAHUN</th>
    </div>

    <div class="judul" style="display:flex; justify-content:center">
        <button onclick="back()" type="button" class="btn btn-secondary" style="border-radius: 5px; margin-right:15px; width: 130px">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> 
            KEMBALI
        </button>
        <a href="{{ url('/pdf/sekretariat/anggaran')}}" target="_blank" type="button" class="btn btn-info" style="border-radius: 5px;margin-right:15px;">
            EXPORT KE PDF
        </a>
        <a href="{{ url('/excel/sekretariat/anggaran')}}" target="_blank" type="button" class="btn btn-success" style="border-radius: 5px;margin-right:15px;">
            EXPORT KE EXCEL
        </a>
        <button type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
            IMPORT EXCEL
        </button>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>TAHUN ANGGARAN</th>
                    <th>UNIT/SATUAN KERJA</th>
                    <th>NILAI ANGGARAN(Rp.)</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($data as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> tahun_anggaran}}</td>
                        <td>{{ $a -> unit}}</td>
                        <td>{{ $a -> nilai_anggaran}}</td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="5" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ url('/import/sekretariat/anggaran')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="modal-body">
                    <input name="file" type="file" required='required'>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </div>
        </form>
        </div>
    </div>

@endsection
