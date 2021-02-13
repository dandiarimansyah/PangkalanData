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
        <th>LAPORAN DATA KEPEGAWAIAN UNIT/SATUAN KERJA</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
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

                @forelse ($data as $key => $a)
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
                        
                        <td style="display: flex; justify-content:center">
                            <button type="button" class="edit"
                                id="edit_item" 
                                data-toggle="modal" 
                                data-target="#edit-modal"
                                data-id="{{ $a->id }}"
                                data-tanggal_diperbarui="{{ $a->tanggal_diperbarui }}"
                                data-unit="{{ $a->unit }}"
                                data-semua_kelamin="{{ $a->semua_kelamin }}"
                                data-laki="{{ $a->laki }}"
                                data-perempuan="{{ $a->perempuan }}"
                                data-s3="{{ $a->S3 }}"
                                data-S2="{{ $a->S2 }}"
                                data-S1="{{ $a->S1 }}"
                                data-D3="{{ $a->D3 }}"
                                data-SMA="{{ $a->SMA }}"
                                data-SMP="{{ $a->SMP }}"
                                data-SD="{{ $a->SD }}"
                                data-T_4E="{{ $a->T_4E }}"
                                data-T_4D="{{ $a->T_4D }}"
                                data-T_4C="{{ $a->T_4C }}"
                                data-T_4B="{{ $a->T_4D }}"
                                data-T_4A="{{ $a->T_4A }}"
                                data-T_3D="{{ $a->T_3D }}"
                                data-T_3C="{{ $a->T_3C }}"
                                data-T_3B="{{ $a->T_3B }}"
                                data-T_3A="{{ $a->T_3A }}"
                                data-T_2D="{{ $a->T_2D }}"
                                data-T_2C="{{ $a->T_2C }}"
                                data-T_2B="{{ $a->T_2B }}"
                                data-T_2A="{{ $a->T_2A }}"
                                data-T_1D="{{ $a->T_1D }}"
                                data-T_1C="{{ $a->T_1C }}"
                                data-T_1B="{{ $a->T_1B }}"
                                data-T_1A="{{ $a->T_1A }}"
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