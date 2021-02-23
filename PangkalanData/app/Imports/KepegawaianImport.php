<?php

namespace App\Imports;

use Carbon\Carbon;

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
        $tanggal = new Carbon();

        return new Kepegawaian([
            'tanggal_diperbarui'  => $tanggal,
            'semua_kelamin' => $row['semua_kelamin'],
            'laki' => $row['jumlah_laki'],
            'perempuan' => $row['jumlah_perempuan'],
            'S3' => $row['S3'],
            'S2' => $row['S2'],
            'S1' => $row['S1'],
            'D3' => $row['D3'],
            'SMA' => $row['SMA'],
            'SMP' => $row['SMP'],
            'SD' => $row['SD'],
            'T_4E' => $row['IV/e'],
            'T_4D' => $row['IV/d'],
            'T_4C' => $row['IV/c'],
            'T_4B' => $row['IV/b'],
            'T_4A' => $row['IV/a'],
            'T_3D' => $row['III/d'],
            'T_3C' => $row['III/c'],
            'T_3B' => $row['III/b'],
            'T_3A' => $row['III/a'],
            'T_2D' => $row['II/d'],
            'T_2C' => $row['II/c'],
            'T_2B' => $row['II/b'],
            'T_2A' => $row['II/a'],
            'T_1D' => $row['I/d'],
            'T_1C' => $row['I/c'],
            'T_1B' => $row['I/b'],
            'T_1A' => $row['I/a'],
        ]);
    }
}
