<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class TransactionHistory extends Controller
{
    public function index()
    {
        $outcomes = transaction::all()->get('outcome');
        $transaction = transaction::all()->first();

        $result = 0;

        foreach ($outcomes as $outcome)
        {
            $result = $outcome + $outcome;
        }

        return view("dashboard.transaction-history", [
            'transactions' => $transaction,
            'total_outcome' => $result
        ]);
    }

    public function overall_outcome(Request $request)
    {
        
    }
}
