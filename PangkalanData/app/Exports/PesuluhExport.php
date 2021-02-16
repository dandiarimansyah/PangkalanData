<?php

namespace App\Exports;

use App\Pesuluh;
use Maatwebsite\Excel\Concerns\FromCollection;

class PesuluhExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pesuluh::all();
    }
}
