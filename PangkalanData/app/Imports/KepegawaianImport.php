<?php

namespace App\Imports;

use Carbon\Carbon;

use App\Models\Kepegawaian;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class KepegawaianImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);
                $tanggal = new Carbon();

                Kepegawaian::create([
                    'tanggal_diperbarui'  => $tanggal,
                    'semua_kelamin' => $row[3],
                    'laki' => $row[4],
                    'perempuan' => $row[5],
                    'S3' => $row[6],
                    'S2' => $row[7],
                    'S1' => $row[8],
                    'D3' => $row[9],
                    'SMA' => $row[10],
                    'SMP' => $row[11],
                    'SD' => $row[12],
                    'T_4E' => $row[13],
                    'T_4D' => $row[14],
                    'T_4C' => $row[15],
                    'T_4B' => $row[16],
                    'T_4A' => $row[17],
                    'T_3D' => $row[18],
                    'T_3C' => $row[19],
                    'T_3B' => $row[20],
                    'T_3A' => $row[21],
                    'T_2D' => $row[22],
                    'T_2C' => $row[23],
                    'T_2B' => $row[24],
                    'T_2A' => $row[25],
                    'T_1D' => $row[26],
                    'T_1C' => $row[27],
                    'T_1B' => $row[28],
                    'T_1A' => $row[29],
                ]);
            }
        }
    }
}
