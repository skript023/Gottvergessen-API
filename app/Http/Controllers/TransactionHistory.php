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
        $expenditure = transaction::where('transaction_date', '>', now()->subDays(30))->where('expenditure', '<', 0);
        $income = transaction::where('transaction_date', '>', now()->subDays(30))->where('income', '>', 0);
        $transaction = transaction::where('user_id', auth()->user()->id);
        
        $balance = balance::where('user_id', auth()->user()->id)->first();
        $balance->bank = $transactions->where('type', 'bank')->sum('income') - abs($transactions->where('type', 'bank')->sum('expenditure'));
        $balance->cash = $transactions->where('type', 'cash')->sum('income') - abs($transactions->where('type', 'cash')->sum('expenditure'));
        $balance->emoney = $transactions->where('type', 'e-money')->sum('income') - abs($transactions->where('type', 'e-money')->sum('expenditure'));
        $balance->gopay = $transactions->where('type', 'gopay')->sum('income') - abs($transactions->where('type', 'gopay')->sum('expenditure'));
        
        $avg_exp = $expenditure->count() / $transaction->count();
        $avg_inc = $income->count() / $transaction->count();
        $rate_income = abs($transactions->sum('expenditure')) / $transactions->sum('income');

        $balance->save();

        return view("dashboard.transaction-history", [
            'transactions' => $transactions,
            'total_expenditure' => $transactions->sum('expenditure'),
            'total_income' => $transactions->sum('income'),
            'total' => $balance->bank,
            'transaction' => $transaction,
            'balance' => $balance,
            'avg_exp' => round($avg_exp, 2),
            'avg_inc' => round($avg_inc, 2),
            'rate_income' => round($rate_income, 2),
            'SALARY' => controller::SALARY,
            'balance_types' => $balance->collumns()
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

        $data['user_id'] = auth()->user()->id;
        $data['income'] = (int)$data['income'];
        $data['expenditure'] = (int)$data['expenditure'] > 0 ? $data['expenditure'] - ($data['expenditure'] * 2) : (int)$data['expenditure'];
        $data['type'] = $data['type'] == 'emoney' ? 'e-money' : $data['type'];

        try 
        {
            transaction::create($data);

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

        $data['user_id'] = auth()->user()->id;
        $data['income'] = empty($data['income']) ? 0 : $data['income'];
        $data['expenditure'] = empty($data['expenditure']) ? 0 : ($data['expenditure'] > 0 ? $data['expenditure'] - ($data['expenditure'] * 2) : $data['expenditure']);
        $data['type'] = $data['type'] == 'emoney' ? 'e-money' : $data['type'];

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
