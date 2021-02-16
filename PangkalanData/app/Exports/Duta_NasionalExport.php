<?php

namespace App\Exports;

use App\Duta_Nasional;
use Maatwebsite\Excel\Concerns\FromCollection;

class Duta_NasionalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Duta_Nasional::all();
    }
}
