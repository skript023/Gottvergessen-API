<?php

namespace App\Exports;

use App\Models\activity;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Excel;

class KegiatanNeuron implements FromView, Responsable
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    /**
    * It's required to define the fileName within
    * the export class when making use of Responsable.
    */
    private $fileName = 'Laporan Kegiatan.xlsx';
    
    /**
    * Optional Writer Type
    */
    private $writerType = Excel::XLSX;
    
    /**
    * Optional headers
    */
    private $headers = [
        'Content-Type' => 'text/xlsx',
    ];

    public function view() : View
    {
        return view('dashboard.activities.report', [
            'activities' => activity::all()
        ]);
    }
}
