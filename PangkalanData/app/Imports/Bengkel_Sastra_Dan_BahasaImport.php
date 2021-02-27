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
            if ($key >= 1) {

                $tgl = ($row[6] - 25569) * 86400;
                $tanggal = gmdate('Y-m-d', $tgl);

                $tgl2 = ($row[7] - 25569) * 86400;
                $tanggal2 = gmdate('Y-m-d', $tgl2);
                // dd($tanggal2);

                Bengkel_Sastra_Dan_Bahasa::create([
                    'provinsi' => $row[3],
                    'kota' => $row[4],
                    'nama_kegiatan' => $row[5],
                    'tanggal_awal_pelaksanaan' => $tanggal,
                    'tanggal_akhir_pelaksanaan' => $tanggal2,
                    'pemateri' => $row[8],
                    'jumlah_peserta' => $row[9],
                    'jumlah_sekolah' => $row[10],
                    'jumlah_sekolah_yang_dibina' => $row[11],
                    'nama_sekolah_yang_dibina' => $row[12],
                    'aktivitas' => $row[13],
                ]);
            }
        }
    }
}
