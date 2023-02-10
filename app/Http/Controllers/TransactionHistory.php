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

    public function create_transaction(Request $request)
    {
        $request->validate([
            'title' => 'required', 
            'description' => 'required',
        ]);

        $data = $request->only([
            'title', 
            'description', 
            'income',
            'outcome'
        ]);

        $data['income'] = empty($data['income']) ? 0 : $data['income'];
        $data['outcome'] = empty($data['outcome']) ? 0 : ($data['outcome'] > 0 ? $data['outcome'] - ($data['outcome'] * 2) : $data['outcome']);

        try 
        {
            transaction::create($data);

            return redirect()->intended('/dashboard/transaction-history');
        } 
        catch (\Throwable $th) 
        {
            return back()->withErrors("Registration", "Redigstration Failed");
            dd($data);
        }
    }

    public function delete_transaction(Request $request)
    {
        $transaction = transaction::find($request->selected_transaction);
        if (isset($transaction))
        {
            $transaction->delete();
            return redirect()->intended('/dashboard/transaction-history');
        }

        return back()->with("Failed", "Failed delete transaction");
    }

    public function update_transaction(Request $request)
    {
        $request->validate([
            'title' => 'required', 
            'description' => 'required',
        ]);

        $data = $request->only([
            'title', 
            'description', 
            'income',
            'outcome'
        ]);

        $data['income'] = empty($data['income']) ? 0 : $data['income'];
        $data['outcome'] = empty($data['outcome']) ? 0 : ($data['outcome'] > 0 ? $data['outcome'] - ($data['outcome'] * 2) : $data['outcome']);

        $transaction = transaction::find($request->selected_transaction);

        try 
        {
            $transaction->update($data);

            return redirect()->intended('/dashboard/transaction-history');
        } 
        catch (\Throwable $th) 
        {
            return back()->withErrors("Registration", "Update Failed");
        }
    }
}
