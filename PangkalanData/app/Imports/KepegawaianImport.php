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
            if ($key >= 2 && ($row[3] != null || $row[4] != null || $row[5] != null || $row[6] != null || $row[7] != null || $row[8] != null || $row[9] != null || $row[10] != null || $row[11] != null || $row[12] != null || $row[13] != null || $row[14] != null || $row[15] != null || $row[16] != null || $row[17] != null || $row[18] != null || $row[19] != null || $row[20] != null || $row[21] != null || $row[22] != null || $row[23] != null || $row[24] != null || $row[25] != null || $row[26] != null || $row[27] != null || $row[28] != null || $row[29] != null)) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);
                // $tanggal = new Carbon();

                $data = new Kepegawaian();
                // $data->tanggal_diperbarui = $tanggal;
                $data->semua_kelamin = $row[3];
                $data->laki = $row[4];
                $data->perempuan = $row[5];
                $data->S3 = $row[6];
                $data->S2 = $row[7];
                $data->S1 = $row[8];
                $data->D3 = $row[9];
                $data->SMA = $row[10];
                $data->SMP = $row[11];
                $data->SD = $row[12];
                $data->T_4E = $row[13];
                $data->T_4D = $row[14];
                $data->T_4C = $row[15];
                $data->T_4B = $row[16];
                $data->T_4A = $row[17];
                $data->T_3D = $row[18];
                $data->T_3C = $row[19];
                $data->T_3B = $row[20];
                $data->T_3A = $row[21];
                $data->T_2D = $row[22];
                $data->T_2C = $row[23];
                $data->T_2B = $row[24];
                $data->T_2A = $row[25];
                $data->T_1D = $row[26];
                $data->T_1C = $row[27];
                $data->T_1B = $row[28];
                $data->T_1A = $row[29];
                $data->save();
            }
        }
    }
}
