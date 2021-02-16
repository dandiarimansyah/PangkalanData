<?php

namespace App\Exports;

use App\Kamus;
use Maatwebsite\Excel\Concerns\FromCollection;

class KamusExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kamus::all();
    }
}
