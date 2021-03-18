<?php

namespace App\Imports;

use App\Models\Bengkel_Sastra_Dan_Bahasa;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Bengkel_Sastra_Dan_BahasaImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2 && $row[3] != null) {

                $tgl = ($row[5] - 25569) * 86400;
                $tanggal = gmdate('Y-m-d', $tgl);

                $tgl2 = ($row[6] - 25569) * 86400;
                $tanggal2 = gmdate('Y-m-d', $tgl2);
                // dd($tanggal2);

                Bengkel_Sastra_Dan_Bahasa::create([
                    'kota' => $row[3],
                    'nama_kegiatan' => $row[4],
                    'tanggal_awal_pelaksanaan' => $tanggal,
                    'tanggal_akhir_pelaksanaan' => $tanggal2,
                    'pemateri' => $row[7],
                    'jumlah_peserta' => $row[8],
                    'jumlah_sekolah' => $row[9],
                    'jumlah_sekolah_yang_dibina' => $row[10],
                    'nama_sekolah_yang_dibina' => $row[11],
                    'aktivitas' => $row[12],
                ]);
            }
        }
    }
}
