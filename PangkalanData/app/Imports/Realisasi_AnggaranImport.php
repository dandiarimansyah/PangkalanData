<?php

namespace App\Imports;

use App\Models\Realisasi_Anggaran;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Realisasi_AnggaranImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2 && ($row[3] != null && $row[4] != null || $row[5] != null)) {

                $data = new Realisasi_Anggaran();
                $data->tahun_realisasi = $row[3];
                $data->besar_dana = $row[4];
                $data->keterangan = $row[5];
                $data->save();
            }
        }
    }
}
