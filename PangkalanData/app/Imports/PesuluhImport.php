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
            if ($key >= 1  && ($row[3] != null)) {

                // $tgl = explode("/", $row[5]);
                // $tanggal = $tgl[2] . "-" . $tgl[1] . "-" . $tgl[0];

                $tgl = ($row[5] - 25569) * 86400;
                $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);

                $data = new Pesuluh();
                $data->nama = $row[3];
                $data->tempat_lahir = $row[4];
                $data->tanggal_lahir = $tanggal;
                $data->instansi = $row[6];
                $data->tingkat = $row[7];

                $data->id_penyuluhan = $row[8];
                $data->save();
            }
        }
    }
}
