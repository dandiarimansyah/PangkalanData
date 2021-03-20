<?php

namespace App\Imports;

use App\Models\Tanah_Bangunan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Tanah_BangunanImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                Tanah_Bangunan::create([
                    'alamat' => $row[3],
                    'status_tanah' => $row[4],
                    'sertif_tanah' => $row[5],
                    'status_bangunan' => $row[6],
                    'imb' => $row[7],
                    'kondisi' => $row[8],
                    'status_peroleh' => $row[9],
                    'keterangan' => $row[10],
                ]);
            }
        }
    }
}
