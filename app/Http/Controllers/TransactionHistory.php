<?php

namespace App\Http\Controllers;

use App\Models\balance;
use App\Models\transaction;
use Illuminate\Http\Request;

class TransactionHistory extends Controller
{
    public function index()
    {
        $transactions = transaction::all();
        $balance = balance::where('user_id', auth()->user()->id)->first();
        $balance->bank = (int)$balance->bank + $transactions->sum('income') - ($transactions->sum('expenditure'));

        return view("dashboard.transaction-history", [
            'transactions' => $transactions,
            'total_expenditure' => $transactions->sum('expenditure'),
            'total_income' => $transactions->sum('income'),
            'total' => $balance->amount
        ]);
    }

    public function create_transaction(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'title' => 'required', 
            'description' => 'required',
        ]);

        $data = $request->only([
            'type',
            'title', 
            'description', 
            'income',
            'expenditure'
        ]);

        $balance = balance::where('user_id', auth()->user()->id);
        $data['user_id'] = auth()->user()->id;
        $data['income'] = (int)$data['income'];
        $data['expenditure'] = (int)$data['expenditure'] > 0 ? $data['expenditure'] - ($data['expenditure'] * 2) : (int)$data['expenditure'];

        if ($data['expenditure'] < 0)
        {
            $balance->bank += $data['expenditure'];
        }
        else if ($data['income'] > 0)
        {
            $balance->bank += $data['income'];
        }

        try 
        {
            transaction::create($data);
            $balance->save();

            return redirect()->intended('/dashboard/transaction-history');
        } 
        catch (\Throwable $th) 
        {
            dd($th);
            return back()->withErrors("Registration", "Redigstration Failed");
        }
    }
    
    public function update_transaction(Request $request)
    {
        $request->validate([
            'type' => 'required', 
            'title' => 'required', 
            'description' => 'required',
        ]);
        
        $data = $request->only([
            'type',
            'title', 
            'description', 
            'income',
            'expenditure'
        ]);

        $balance = balance::where('user_id', auth()->user()->id);
        $data['user_id'] = auth()->user()->id;
        $data['income'] = empty($data['income']) ? 0 : $data['income'];
        $data['expenditure'] = empty($data['expenditure']) ? 0 : ($data['expenditure'] > 0 ? $data['expenditure'] - ($data['expenditure'] * 2) : $data['expenditure']);
        
        $transaction = transaction::find($request->selected_transaction);

        if ($data['expenditure'] < 0)
        {
            $balance->bank += $data['expenditure'];
        }
        else if ($data['income'] > 0)
        {
            $balance->bank += $data['income'];
        }
        
        try 
        {
            $transaction->update($data);
            $balance->save();
            
            return redirect()->intended('/dashboard/transaction-history');
        } 
        catch (\Throwable $th) 
        {
            return back()->withErrors("Registration", "Update Failed");
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
}
