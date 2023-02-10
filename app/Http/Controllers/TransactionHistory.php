<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class TransactionHistory extends Controller
{
    public function index()
    {
        $transactions = transaction::all();

        return view("dashboard.transaction-history", [
            'transactions' => $transactions,
            'total_outcome' => $transactions->sum('outcome'),
            'total_income' => $transactions->sum('income')
        ]);
    }

    public function overall_outcome(Request $request)
    {
        
    }
}
