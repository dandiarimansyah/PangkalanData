{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')

    <div class="judul">
        <th>DATA KEPEGAWAIAN</th>
    </div>

    <div class="judul" style="display:flex; justify-content:center">
        <button onclick="back()" type="button" class="btn btn-secondary" style="border-radius: 5px; margin-right:15px; width: 130px">
            <i class="fa fa-arrow-left" aria-hidden="true"></i> 
            KEMBALI
        </button>
        <a href="{{ url('/pdf/sekretariat/kepegawaian')}}" target="_blank" type="button" class="btn btn-info" style="border-radius: 5px;margin-right:15px;">
            EXPORT KE PDF
        </a>
        <a href="{{ url('/excel/sekretariat/kepegawaian')}}" target="_blank" type="button" class="btn btn-success" style="border-radius: 5px;margin-right:15px;">
            EXPORT KE EXCEL
        </a>
        <button href="/import/sekretariat/kepegawaian" id="import_data" type="button" class="btn btn-primary" style="border-radius: 5px"  data-toggle="modal" data-target="#import">
            IMPORT EXCEL
        </button>
    </div>
    
    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table" id="datatable">            
        <thead>
                <tr>
                    <th rowspan="2">NO</th>
                    <th rowspan="2">TANGGAL DIPERBAHARUI</th>
                    <th rowspan="2">UNIT/SATUAN KERJA</th>
                    <th colspan="3">JUMLAH PEGAWAI</th>
                    <th colspan="7">TINGKAT PENDIDIKAN</th>
                    <th colspan="17">PANGKAT/GOLONGAN</th>
                </tr>
                <tr>
                    <th>K</th>
                    <th>L</th>
                    <th>P</th>
                    <th>S3</th>
                    <th>S2</th>
                    <th>S1</th>
                    <th>D3</th>
                    <th>SMA</th>
                    <th>SMP</th>
                    <th>SD</th>
                    <th>IV/e</th>
                    <th>IV/d</th>
                    <th>IV/c</th>
                    <th>IV/b</th>
                    <th>IV/a</th>
                    <th>III/d</th>
                    <th>III/c</th>
                    <th>III/b</th>
                    <th>III/a</th>
                    <th>II/d</th>
                    <th>II/c</th>
                    <th>II/b</th>
                    <th>II/a</th>
                    <th>I/d</th>
                    <th>I/c</th>
                    <th>I/b</th>
                    <th>I/a</th>
                </tr> 
            </thead>

            <tbody>

                @forelse ($kepegawaian as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> updated_at->format('m-d-Y')}}</td>
                        <td>{{ $a -> unit }}</td>
                        <td>{{ $a -> semua_kelamin}}</td>
                        <td>{{ $a -> laki}}</td>
                        <td>{{ $a -> perempuan}}</td>
                        <td>{{ $a -> S3}}</td>
                        <td>{{ $a -> S2}}</td>
                        <td>{{ $a -> S1}}</td>
                        <td>{{ $a -> D3}}</td>
                        <td>{{ $a -> SMA}}</td>
                        <td>{{ $a -> SMP}}</td>
                        <td>{{ $a -> SD}}</td>
                        <td>{{ $a -> T_4E}}</td>
                        <td>{{ $a -> T_4D}}</td>
                        <td>{{ $a -> T_4C}}</td>
                        <td>{{ $a -> T_4B}}</td>
                        <td>{{ $a -> T_4A}}</td>
                        <td>{{ $a -> T_3D}}</td>
                        <td>{{ $a -> T_3C}}</td>
                        <td>{{ $a -> T_3B}}</td>
                        <td>{{ $a -> T_3A}}</td>
                        <td>{{ $a -> T_2D}}</td>
                        <td>{{ $a -> T_2C}}</td>
                        <td>{{ $a -> T_2B}}</td>
                        <td>{{ $a -> T_2A}}</td>
                        <td>{{ $a -> T_1D}}</td>
                        <td>{{ $a -> T_1C}}</td>
                        <td>{{ $a -> T_1B}}</td>
                        <td>{{ $a -> T_1A}}</td>
                        
                    </tr>
                @empty
                    <tr>
                        <td colspan="32" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>


@endsection