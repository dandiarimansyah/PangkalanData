<?php

namespace App\Imports;

use Carbon\Carbon;

use App\Models\Kepegawaian;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KepegawaianImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $tanggal = new Carbon();

        return new Kepegawaian([
            'unit' => 'Balai Bahasa Provinsi Jawa Tengah',
            'tanggal_diperbarui'  => $tanggal,
            'semua_kelamin' => $row['semua_kelamin'],
            'laki' => $row['jumlah_laki'],
            'perempuan' => $row['jumlah_perempuan'],
            'S3' => $row['s3'],
            'S2' => $row['s2'],
            'S1' => $row['s1'],
            'D3' => $row['d3'],
            'SMA' => $row['sma'],
            'SMP' => $row['smp'],
            'SD' => $row['sd'],
            'T_4E' => $row['ive'],
            'T_4D' => $row['ivd'],
            'T_4C' => $row['ivc'],
            'T_4B' => $row['ivb'],
            'T_4A' => $row['iva'],
            'T_3D' => $row['iiid'],
            'T_3C' => $row['iiic'],
            'T_3B' => $row['iiib'],
            'T_3A' => $row['iiia'],
            'T_2D' => $row['iid'],
            'T_2C' => $row['iic'],
            'T_2B' => $row['iib'],
            'T_2A' => $row['iia'],
            'T_1D' => $row['id'],
            'T_1C' => $row['ic'],
            'T_1B' => $row['ib'],
            'T_1A' => $row['ia'],
        ]);
    }
}
