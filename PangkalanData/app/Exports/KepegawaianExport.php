<?php

namespace App\Exports;

use App\Kepegawaian;
use Maatwebsite\Excel\Concerns\FromCollection;

class KepegawaianExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kepegawaian::all();
    }
}
