@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuValidasi')

<div class="isi-konten">

    <div class="judul">
        <th>VALIDASI DATA KEPEGAWAIAN UNIT/SATUAN KERJA</th>
    </div>

    <div class="ketjudul" style="margin-top:0px ;">
        <th>Klik tombol <b>"Pilih Semua"</b> untuk mencentang semua data</th>
        <br>
        <th>Klik tombol <b>"Validasi Data"</b>  untuk memvalidasi data yang telah dicentang</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center; margin-top:3px;">
        <div class="btn-group kategori">
            <button type="button" class="btn btn-primary" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                EKSPOR KE PDF 
            </button>
        </div>
        
        <div class="pilih_semua">
            <label for="valid">PILIH SEMUA</label>
            <input type='checkbox' id='valid'>
        </div>

        <div class="btn-group kategori">
            <button href="{{ URL('validator/sekretariat/kepegawaian')}}" id="tombol_validasi" type="button" class="btn btn-success" style="border-radius: 5px">
                VALIDASI DATA
            </button>
        </div>
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
                    <th rowspan="2">EDIT</th>
                    <th rowspan="2">VALIDASI</th>
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
                        <td>{{ $a -> tanggal_diperbarui}}</td>
                        <td> Balai Bahasa Jawa Tengah</td>
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
                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit" data-toggle="modal" data-target="#edit-modal">Edit</button>
                        </td>
                        <td>
                            <div class="validate"> 
                            @if ($a -> validasi == "belum")
                            <form action="" method="POST">
                                <input data-id="{{ $a->id }}" class="check" type="checkbox" value="sudah" name="validasi">
                            </form>
                            @else
                                <p>Tervalidasi</p>
                            @endif
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="32" align="center">Tidak ada Data</td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>

</div>


@endsection
