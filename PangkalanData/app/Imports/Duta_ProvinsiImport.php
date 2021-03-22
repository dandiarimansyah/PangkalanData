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
            if ($key >= 2 && ($row[3] != null || $row[4] != null || $row[5] != null || $row[6] != null || $row[7] != null || $row[8] != null || $row[9] != null || $row[10] != null || $row[11] != null || $row[12] != null)) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                $data = new Duta_Provinsi();
                $data->tahun = $row[3];
                $data->pemenang_1_1 = $row[4];
                $data->pemenang_1_2 = $row[5];
                $data->pemenang_2_1 = $row[6];
                $data->pemenang_2_2 = $row[7];
                $data->pemenang_3_1 = $row[8];
                $data->pemenang_3_2 = $row[9];
                $data->favorit_1 = $row[10];
                $data->favorit_2 = $row[11];
                $data->keterangan = $row[12];
                $data->save();
            }
        }
    }
}
