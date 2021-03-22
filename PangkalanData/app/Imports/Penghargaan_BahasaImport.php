<?php

namespace App\Imports;

use App\Models\Penghargaan_Bahasa;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Penghargaan_BahasaImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2  && ($row[3] != null)) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                $data = new Penghargaan_Bahasa();
                $data->kategori = $row[3];
                $data->tahun = $row[4];
                $data->deskripsi = $row[5];
                $data->save();
            }
        }
    }
}
