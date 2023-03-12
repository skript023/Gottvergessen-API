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
    private $fileName = 'Laporan Keuangan.xlsx';
    
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
        $transactions = transaction::all();
        return view('dashboard.transactions.report', [
            'transactions' => $transactions,
            'total_expenditure' => $transactions->sum('expenditure'),
            'total_income' => $transactions->sum('income'),
        ]);
    }
}
