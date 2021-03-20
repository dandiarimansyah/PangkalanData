<?php

namespace App\Imports;

use App\Models\Musikalisasi_Puisi_Provinsi;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Musikalisasi_Puisi_ProvinsiImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2 && ($row[3] != null || $row[4] != null || $row[5] != null || $row[6] != null || $row[7] != null || $row[8] != null || $row[9] != null)) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                Musikalisasi_Puisi_Provinsi::create([
                    'tahun' => $row[3],
                    'pemenang_1' => $row[4],
                    'pemenang_2' => $row[5],
                    'pemenang_3' => $row[6],
                    'favorit' => $row[7],
                    'perihal' => $row[8],
                    'keterangan' => $row[9],
                ]);
            }
        }
    }
}
