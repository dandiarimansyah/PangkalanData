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

                $data = new Komunitas_Bahasa();
                $data->nama_komunitas = $row[3];
                $data->kota = $row[4];
                $data->kecamatan = $row[5];
                $data->alamat = $row[6];
                $data->koordinat = $row[7];
                $data->keterangan = $row[8];
                $data->save();
            }
        }
    }
}
