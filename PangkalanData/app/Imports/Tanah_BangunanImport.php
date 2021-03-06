<?php

namespace App\Imports;

use App\Models\Tanah_Bangunan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class Tanah_BangunanImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2 && ($row[3] != null || $row[4] != null || $row[5] != null || $row[6] != null || $row[7] != null || $row[8] != null || $row[9] != null || $row[10] != null)) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                $data = new Tanah_Bangunan();
                // $data->alamat = $row[3];
                $data->status_tanah = $row[4];
                $data->sertif_tanah = $row[5];
                $data->status_bangunan = $row[6];
                $data->imb = $row[7];
                $data->kondisi = $row[8];
                $data->status_peroleh = $row[9];
                $data->keterangan = $row[10];
                $data->save();
            }
        }
    }
}
