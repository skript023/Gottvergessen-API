<?php

namespace App\Exports;

use App\Models\transaction;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Excel;

class TransactionExport implements FromView, Responsable
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    /**
    * It's required to define the fileName within
    * the export class when making use of Responsable.
    */
    private $fileName = 'invoices.xlsx';
    
    /**
    * Optional Writer Type
    */
    private $writerType = Excel::XLSX;
    
    /**
    * Optional headers
    */
    private $headers = [
        'Content-Type' => 'text/csv',
    ];

    public function view() : View
    {
        return view('dashboard.transactions.report', [
            'transactions' => transaction::all()
        ]);
    }
}
