<?php

namespace App\Imports;

use App\Models\Pesuluh;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PesuluhImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 1) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                Pesuluh::create([
                    'id_penyuluhan' => $row[0],
                    'nama' => $row[1],
                    'tempat_lahir' => $row[2],
                    'tanggal_lahir' => $row[3],
                    'instansi' => $row[4],
                    'tingkat' => $row[5],
                ]);
            }
        }
    }
}
