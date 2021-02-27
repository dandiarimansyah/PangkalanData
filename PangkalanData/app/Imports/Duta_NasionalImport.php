<?php

namespace App\Imports;

use App\Models\Duta_Nasional;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Duta_NasionalImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 1) {

                Duta_Nasional::create([
                    'provinsi' => $row[3],
                    'tahun' => $row[4],
                    'pemenang_1_1' => $row[5],
                    'pemenang_1_2' => $row[6],
                    'pemenang_2_1' => $row[7],
                    'pemenang_2_2' => $row[8],
                    'pemenang_3_1' => $row[9],
                    'pemenang_3_2' => $row[10],
                    'keterangan' => $row[11],
                ]);
            }
        }
    }
}
