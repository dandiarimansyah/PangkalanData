@auth
    @if (Auth::user()->level != 'tamu')  
        @if ($Total != $Total_V)
            <div class="peringatan">
                <p><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>   TERDAPAT DATA YANG BELUM DIVALIDASI!</p>
            </div>
        @endif
    @endif
@endauth

<div class="validasi">
    <!-- TABLE -->
    <table class="content-table kanan">
        <thead>
            <tr>
                <th>Kategori</th>
                <th>Jenis Data</th>
                <th>Data Terinput</th>
                <th>Data Tervalidasi</th>
                <th>Belum Tervalidasi</th>
            </tr>
        </thead>

        <tbody>
            @if ($Anggaran != $Anggaran_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td style="font-weight:bold">Sekretariat</td>
                <td style="text-align:left">Anggaran</td>
                <td>{{$Anggaran}}</td>
                <td>{{$Anggaran_V}}</td>
                <td>{{$Anggaran_B}}</td>
            </tr>
            @if ($Realisasi_Anggaran != $Realisasi_Anggaran_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Realisasi Anggaran</td>
                <td>{{$Realisasi_Anggaran}}</td>
                <td>{{$Realisasi_Anggaran_V}}</td>
                <td>{{$Realisasi_Anggaran_B}}</td>
            </tr>
            @if ($Kepegawaian != $Kepegawaian_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Kepegawaian</td>
                <td>{{$Kepegawaian}}</td>
                <td>{{$Kepegawaian_V}}</td>
                <td>{{$Kepegawaian_B}}</td>
            </tr>
            @if ($Kerja_Sama != $Kerja_Sama_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Kerja Sama</td>
                <td>{{$Kerja_Sama}}</td>
                <td>{{$Kerja_Sama_V}}</td>
                <td>{{$Kerja_Sama_B}}</td>
            </tr>
            @if ($Tanah_Bangunan != $Tanah_Bangunan_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Tanah Bangunan</td>
                <td>{{$Tanah_Bangunan}}</td>
                <td>{{$Tanah_Bangunan_V}}</td>
                <td>{{$Tanah_Bangunan_B}}</td>
            </tr>
            @if ($Perpustakaan != $Perpustakaan_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Perpustakaan</td>
                <td>{{$Perpustakaan}}</td>
                <td>{{$Perpustakaan_V}}</td>
                <td>{{$Perpustakaan_B}}</td>
            </tr>
            @if ($Inventarisasi != $Inventarisasi_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Inventarisasi BMN</td>
                <td>{{$Inventarisasi}}</td>
                <td>{{$Inventarisasi_V}}</td>
                <td>{{$Inventarisasi_B}}</td>
            </tr>

            <tr>
                <td colspan="2"></td>
                {{-- <td></td> --}}
                <td style="font-weight:bold">{{$Total1}}</td>
                <td style="font-weight:bold">{{$Total1_V}}</td>
                <td style="font-weight:bold">{{$Total1 - $Total1_V}}</td>
            </tr>

            @if ($Kamus != $Kamus_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td style="font-weight:bold">Data Kebahasaan</td>
                <td style="text-align:left">Kamus/Ensiklopedia</td>
                <td>{{$Kamus}}</td>
                <td>{{$Kamus_V}}</td>
                <td>{{$Kamus_B}}</td>
            </tr>
            @if ($Jurnal != $Jurnal_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Jurnal/Majalah</td>
                <td>{{$Jurnal}}</td>
                <td>{{$Jurnal_V}}</td>
                <td>{{$Jurnal_B}}</td>
            </tr>
            @if ($Terbitan_Umum != $Terbitan_Umum_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Terbitan Umum</td>
                <td>{{$Terbitan_Umum}}</td>
                <td>{{$Terbitan_Umum_V}}</td>
                <td>{{$Terbitan_Umum_B}}</td>
            </tr>
            @if ($Penyuluhan != $Penyuluhan_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Penyuluhan</td>
                <td>{{$Penyuluhan}}</td>
                <td>{{$Penyuluhan_V}}</td>
                <td>{{$Penyuluhan_B}}</td>
            </tr>
            @if ($Pesuluh != $Pesuluh_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Pesuluh</td>
                <td>{{$Pesuluh}}</td>
                <td>{{$Pesuluh_V}}</td>
                <td>{{$Pesuluh_B}}</td>
            </tr>
            @if ($Penghargaan_Bahasa != $Penghargaan_Bahasa_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Penghargaan Bahasa</td>
                <td>{{$Penghargaan_Bahasa}}</td>
                <td>{{$Penghargaan_Bahasa_V}}</td>
                <td>{{$Penghargaan_Bahasa_B}}</td>
            </tr>
            @if ($Duta_Nasional != $Duta_Nasional_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Duta Bahasa Nasional</td>
                <td>{{$Duta_Nasional}}</td>
                <td>{{$Duta_Nasional_V}}</td>
                <td>{{$Duta_Nasional_B}}</td>
            </tr>
            @if ($Duta_Provinsi != $Duta_Provinsi_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Duta Bahasa Provinsi</td>
                <td>{{$Duta_Provinsi}}</td>
                <td>{{$Duta_Provinsi_V}}</td>
                <td>{{$Duta_Provinsi_B}}</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                {{-- <td></td> --}}
                <td style="font-weight:bold">{{$Total2}}</td>
                <td style="font-weight:bold">{{$Total2_V}}</td>
                <td style="font-weight:bold">{{$Total2 - $Total2_V}}</td>
            </tr>

            @if ($Bengkel_Sastra_Dan_Bahasa != $Bengkel_Sastra_Dan_Bahasa_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td style="font-weight:bold">Data Kesastraan</td>
                <td style="text-align:left">Bengkel Satra</td>
                <td>{{$Bengkel_Sastra_Dan_Bahasa}}</td>
                <td>{{$Bengkel_Sastra_Dan_Bahasa_V}}</td>
                <td>{{$Bengkel_Sastra_Dan_Bahasa_B}}</td>
            </tr>
            @if ($Penghargaan_Sastra != $Penghargaan_Sastra_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Penghargaan Satra</td>
                <td>{{$Penghargaan_Sastra}}</td>
                <td>{{$Penghargaan_Sastra_V}}</td>
                <td>{{$Penghargaan_Sastra_B}}</td>
            </tr>
            @if ($Musikalisasi_Puisi_Nasional != $Musikalisasi_Puisi_Nasional_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Musikalisasi Puisi Nasional</td>
                <td>{{$Musikalisasi_Puisi_Nasional}}</td>
                <td>{{$Musikalisasi_Puisi_Nasional_V}}</td>
                <td>{{$Musikalisasi_Puisi_Nasional_B}}</td>
            </tr>
            @if ($Musikalisasi_Puisi_Provinsi != $Musikalisasi_Puisi_Provinsi_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Musikalisasi Puisi Provinsi</td>
                <td>{{$Musikalisasi_Puisi_Provinsi}}</td>
                <td>{{$Musikalisasi_Puisi_Provinsi_V}}</td>
                <td>{{$Musikalisasi_Puisi_Provinsi_B}}</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                {{-- <td></td> --}}
                <td style="font-weight:bold">{{$Total3}}</td>
                <td style="font-weight:bold">{{$Total3_V}}</td>
                <td style="font-weight:bold">{{$Total3 - $Total3_V}}</td>
            </tr>
        
            @if ($Komunitas_Bahasa != $Komunitas_Bahasa_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td style="font-weight:bold">Data Komunitas</td>
                <td style="text-align:left">Komunitas Bahasa</td>
                <td>{{$Komunitas_Bahasa}}</td>
                <td>{{$Komunitas_Bahasa_V}}</td>
                <td>{{$Komunitas_Bahasa_B}}</td>
            </tr>

            @if ($Komunitas_Sastra != $Komunitas_Sastra_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td></td>
                <td style="text-align:left">Komunitas Sastra</td>
                <td>{{$Komunitas_Sastra}}</td>
                <td>{{$Komunitas_Sastra_V}}</td>
                <td>{{$Komunitas_Sastra_B}}</td>
            </tr>

            <tr>
                <td colspan="2"></td>
                {{-- <td></td> --}}
                <td style="font-weight:bold">{{$Total4}}</td>
                <td style="font-weight:bold">{{$Total4_V}}</td>
                <td style="font-weight:bold">{{$Total4 - $Total4_V}}</td>
            </tr>

            @if ($Penelitian != $Penelitian_V)
                <tr class="belum_validasi">
            @else
                <tr>
            @endif
                <td style="font-weight:bold">Data Penelitian</td>
                <td style="text-align:left">Penelitian</td>
                <td>{{$Penelitian}}</td>
                <td>{{$Penelitian_V}}</td>
                <td>{{$Penelitian_B}}</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                {{-- <td></td> --}}
                <td style="font-weight:bold">{{$Total5}}</td>
                <td style="font-weight:bold">{{$Total5_V}}</td>
                <td style="font-weight:bold">{{$Total5 - $Total5_V}}</td>
            </tr>

            <tr class="total">
                <td colspan="2">TOTAL</td>
                <td>{{$Total}}</td>
                <td>{{$Total_V}}</td>
                <td>{{$Total - $Total_V}}</td>
            </tr>

    </table>
</div>