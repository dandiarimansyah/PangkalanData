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
            if ($key >= 2 && ($row[3] != null || $row[4] != null || $row[5] != null || $row[6] != null || $row[7] != null || $row[8] != null || $row[9] != null || $row[10] != null)) {

                $data = new Duta_Nasional();
                $data->tahun = $row[3];
                $data->pemenang_1_1 = $row[4];
                $data->pemenang_1_2 = $row[5];
                $data->pemenang_2_1 = $row[6];
                $data->pemenang_2_2 = $row[7];
                $data->pemenang_3_1 = $row[8];
                $data->pemenang_3_2 = $row[9];
                $data->keterangan = $row[10];
                $data->save();
            }
        }
    }
}
