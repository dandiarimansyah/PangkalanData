<?php

namespace App\Imports;

use App\Models\Duta_Provinsi;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Duta_ProvinsiImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                Duta_Provinsi::create([
                    // 'provinsi' => $row[3],
                    'tahun' => $row[3],
                    'pemenang_1_1' => $row[4],
                    'pemenang_1_2' => $row[5],
                    'pemenang_2_1' => $row[6],
                    'pemenang_2_2' => $row[7],
                    'pemenang_3_1' => $row[8],
                    'pemenang_3_2' => $row[9],
                    'favorit_1' => $row[10],
                    'favorit_2' => $row[11],
                    'keterangan' => $row[12],
                ]);
            }
        }
    }
}
