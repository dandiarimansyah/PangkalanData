<?php

namespace App\Imports;

use App\Models\Inventarisasi;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class InventarisasiImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2  && ($row[3] != null)) {

                $data = new Inventarisasi();
                $data->tahun_anggaran = $row[3];
                $data->laptop = $row[4];
                $data->komputer = $row[5];
                $data->printer = $row[6];
                $data->fotocopy = $row[7];
                $data->faximili = $row[8];
                $data->LCD = $row[9];
                $data->TV = $row[10];
                $data->lain = $row[11];
                $data->furniture = $row[12];
                $data->roda_dua = $row[13];
                $data->roda_empat = $row[14];
                $data->roda_enam = $row[15];
                $data->save();
            }
        }
    }
}
