<?php

namespace App\Imports;

use App\Tanah_Bangunan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Tanah_BangunanImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tanah_Bangunan([
            'kantor'  => $row['kantor'],
            'alamat' => $row['alamat'],
            'status_tanah' => $row['status_tanah'],
            'sertif_tanah' => $row['sertif_tanah'],
            'status_bangunan' => $row['status_bangunan'],
            'imb' => $row['imb'],
            'kondisi' => $row['kondisi'],
            'status_peroleh' => $row['status_peroleh'],
            'keterangan' => $row['keterangan'],
            'media' => $row['media'],
        ]);
    }
}
