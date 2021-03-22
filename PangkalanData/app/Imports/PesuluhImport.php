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
            if ($key >= 1  && ($row[1] != null)) {

                $tgl = explode("/", $row[3]);
                $tanggal = $tgl[2] . "-" . $tgl[1] . "-" . $tgl[0];

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                // Pesuluh::create([
                //     'id_penyuluhan' => $row[0],
                //     'nama' => $row[1],
                //     'tempat_lahir' => $row[2],
                //     'tanggal_lahir' => $row[3],
                //     'instansi' => $row[4],
                //     'tingkat' => $row[5],
                // ]);

                return new Pesuluh([
                    'id_penyuluhan' => $row[0],
                    'nama' => $row[1],
                    'tempat_lahir' => $row[2],
                    'tanggal_lahir' => $tanggal,
                    'instansi' => $row[4],
                    'tingkat' => $row[5],
                ]);
            }
        }
    }
}
