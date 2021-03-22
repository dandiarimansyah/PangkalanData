<?php

namespace App\Imports;

use App\Models\Anggaran;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class AnggaranImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $row) {
            if ($key >= 2 && $row[3] != null) {

                // $tgl = ($row[6] - 25569) * 86400;
                // $tanggal = gmdate('Y-m-d', $tgl);

                // $tgl2 = ($row[7] - 25569) * 86400;
                // $tanggal2 = gmdate('Y-m-d', $tgl2);
                // dd($tanggal2);

                $data = new Anggaran();
                $data->tahun_anggaran = $row[3];
                $data->nilai_anggaran = $row[4];
                $data->save();
            }
        }
    }
}
