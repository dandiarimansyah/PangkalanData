<?php

namespace App\Exports;

use App\Penelitian;
use Maatwebsite\Excel\Concerns\FromCollection;

class PenelitianExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penelitian::all();
    }
}
