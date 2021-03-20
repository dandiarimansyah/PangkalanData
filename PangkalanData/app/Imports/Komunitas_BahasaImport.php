<?php

namespace App\Imports;

use App\Models\Komunitas_Bahasa;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Komunitas_BahasaImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2 && ($row[3] != null || $row[4] != null)) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                Komunitas_Bahasa::create([
                    'nama_komunitas' => $row[3],
                    'kota' => $row[4],
                    'kecamatan' => $row[5],
                    'alamat' => $row[6],
                    'koordinat' => $row[7],
                    'keterangan' => $row[8],
                ]);
            }
        }
    }
}
