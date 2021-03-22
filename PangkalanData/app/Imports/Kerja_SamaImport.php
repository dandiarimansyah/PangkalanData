<?php

namespace App\Imports;

use App\Models\Kerja_Sama;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Kerja_SamaImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2 && ($row[3] != null || $row[4] != null || $row[5] != null)) {

                $tgl = ($row[5] - 25569) * 86400;
                $tanggal = gmdate('Y-m-d', $tgl);

                $tgl2 = ($row[6] - 25569) * 86400;
                $tanggal2 = gmdate('Y-m-d', $tgl2);

                Kerja_Sama::create([
                    'kategori' => $row[3],
                    'instansi' => $row[4],
                    'tanggal_awal' => $tanggal,
                    'tanggal_akhir' => $tanggal2,
                    'nomor' => $row[7],
                    'perihal' => $row[8],
                    'keterangan' => $row[9],
                    'ttd_1' => $row[10],
                    'instansi_1' => $row[11],
                    'ttd_2' => $row[12],
                    'instansi_2' => $row[13],
                ]);
            }
        }
    }
}
