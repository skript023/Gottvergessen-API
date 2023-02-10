<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class TransactionHistory extends Controller
{
    public function index()
    {
        $outcomes = transaction::all()->get('outcome');
        $incomes = transaction::all()->get('income');
        $transaction = transaction::all()->first();

        $result_outcome = 0;
        $result_income = 0;

        foreach ($outcomes as $outcome)
        {
            $result_outcome = $outcome + $outcome;
        }

        foreach ($incomes as $income) 
        {
            $result_income = $income + $income;
        }

        return view("dashboard.transaction-history", [
            'transactions' => $transaction,
            'total_outcome' => $result_outcome
        ]);
    }

    public function overall_outcome(Request $request)
    {
        
    }
}
