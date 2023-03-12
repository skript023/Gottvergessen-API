<?php

namespace App\Exports;

use App\Models\activity;
use Maatwebsite\Excel\Concerns\FromCollection;

class KegiatanNeuron implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return activity::all();
    }
}
