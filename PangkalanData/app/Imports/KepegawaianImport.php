<?php

namespace App\Imports;

use App\Kepegawaian;
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
        return new Kepegawaian([
            'tanggal_diperbarui'  => $row['tanggal_diperbarui'],
            'tanggal'  => $row['tanggal'],
            'unit' => $row['unit'],
            'semua_kelamin' => $row['semua_kelamin'],
            'laki' => $row['laki'],
            'perempuan' => $row['perempuan'],
            'S3' => $row['S3'],
            'S2' => $row['S2'],
            'S1' => $row['S1'],
            'D3' => $row['D3'],
            'SMA' => $row['SMA'],
            'SMP' => $row['SMP'],
            'SD' => $row['SD'],
            'T_4E' => $row['T_4E'],
            'T_4D' => $row['T_4D'],
            'T_4C' => $row['T_4C'],
            'T_4B' => $row['T_4B'],
            'T_4A' => $row['T_4A'],
            'T_3D' => $row['T_3D'],
            'T_3C' => $row['T_3C'],
            'T_3B' => $row['T_3B'],
            'T_3A' => $row['T_3A'],
            'T_2D' => $row['T_2D'],
            'T_2C' => $row['T_2C'],
            'T_2B' => $row['T_2B'],
            'T_2A' => $row['T_2A'],
            'T_1D' => $row['T_1D'],
            'T_1C' => $row['T_1C'],
            'T_1B' => $row['T_1B'],
            'T_1A' => $row['T_1A'],
        ]);
    }
}
