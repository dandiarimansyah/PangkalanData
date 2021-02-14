{{-- if login by operator maka extend operator, kalo validator ya validator --}}

@extends('PARTIAL.indexV')

@section('content')

@include('PARTIAL.MenuLaporan')

    <div class="judul">
        <th>DATA PERPUSTAKAAN</th>
    </div>

    <div class="menu" style="display:flex; justify-content:center">
        <div class="btn-group kategori">
            <a type="button" class="btn btn-info" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false" href="/laporan">
                KEMBALI KE MENU LAPORAN
            </a>
        </div>

        <div class="btn-group kategori">
            <button  type="button" class="btn btn-info" style="border-radius: 5px" aria-haspopup="true" aria-expanded="false">
                EXPORT TO MS. EXCEL
            </button>
        </div>
    </div>

    <div class="ketjudul">
        <th>Jumlah Buku : 108.879 Buku</th>
    </div>

    <!-- TABLE -->
    <div class="validasi">
        <table class="content-table">
           
        <thead>
                <tr>
                    <th>NO</th>
                    <th>TANGGAL DIPERBAHARUI</th>
                    <th>PROVINSI</th>
                    <th>UNIT KERJA</th>
                    <th>JUMLAH BUKU</th>
                    <th>JUMLAH JUDUL</th>
                    <th>JENIS</th>
                    <th>JUMLAH PENGUNJUNG</th>
                    <th>SUMBER DATA</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($perpustakaan as $key => $a)
                    <tr>
                        <td>{{ $key + 1}}</td>
                        <td>{{ $a -> updated_at->format('m-d-Y')}}</td>
                        <td>{{ $a -> provinsi}}</td>
                        <td>{{ $a -> unit}}</td>
                        <td>{{ $a -> jumlah_buku}}</td>
                        <td>{{ $a -> jumlah_judul}}</td>
                        <td>{{ $a -> jenis_buku}}</td>
                        <td>{{ $a -> jumlah_pengunjung}}</td>
                        <td>{{ $a -> sumber_data}}</td>
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