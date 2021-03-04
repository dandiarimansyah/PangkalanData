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
            if ($key >= 2) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                Pesuluh::create([
                    'nama' => $row[3],
                    'tempat_lahir' => $row[4],
                    'tanggal_lahir' => $row[5],
                    'instansi' => $row[6],
                    'tingkat' => $row[7],
                    'id_penyuluhan' => $row[8],
                ]);
            }
        }
    }
}
