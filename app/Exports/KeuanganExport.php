<?php

namespace App\Exports;

use App\keuangan;
use Maatwebsite\Excel\Concerns\FromCollection;

class KeuanganExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return keuangan::all();
    }
}
