<?php

namespace App\Http\Controllers;

use App\Models\balance;
use App\Models\transaction;
use App\Models\wallet;
use Illuminate\Http\Request;

class TransactionHistory extends Controller
{
    public function index()
    {
        $transactions = transaction::with('user')->get();
        $wallets = wallet::all();
        $balance = balance::with(['wallet', 'owner'])->get();
        $expenditure = transaction::where('transaction_date', '>', now()->subDays(30))->where('expenditure', '<', 0);
        $income = transaction::where('transaction_date', '>', now()->subDays(30))->where('income', '>', 0);
        $transaction = transaction::where('user_id', auth()->user()->id);

        foreach ($wallets as $wallet) 
        {
            $overall_income = transaction::where('type', $wallet->symbol);
            $overtall_expenditure = transaction::where('type', $wallet->symbol);
            $account = balance::where('wallet_id', $wallet->id)->where('user_id', auth()->user()->id)->first();

            if (isset($account))
            {
                $account->amount = $overall_income->sum('income') - abs($overtall_expenditure->sum('expenditure'));
                $account->save();
            }
        }
        
        $avg_exp = $expenditure->count() / $transaction->count();
        $avg_inc = $income->count() / $transaction->count();
        $rate_income = abs($transactions->sum('expenditure')) / $transactions->sum('income');

        return view("dashboard.transaction-history", [
            'transactions' => $transactions,
            'total_expenditure' => $transactions->sum('expenditure'),
            'total_income' => $transactions->sum('income'),
            'transaction' => $transaction,
            'balance' => $balance,
            'avg_exp' => round($avg_exp, 2),
            'avg_inc' => round($avg_inc, 2),
            'rate_income' => round($rate_income, 2),
            'SALARY' => controller::SALARY,
            'wallets' => $wallets,
            'bank' => $this->bank(),
            'cash' => $this->cash()
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
            'expenditure',
            'office'
        ]);

        $data['user_id'] = auth()->user()->id;
        $data['income'] = (int)$data['income'];
        $data['expenditure'] = (int)$data['expenditure'] > 0 ? $data['expenditure'] - ($data['expenditure'] * 2) : (int)$data['expenditure'];
        
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

    public function bank()
    {
        return balance::where('user_id', auth()->user()->id)->where('wallet_id', 1)->first()->amount;
    }

    public function cash()
    {
        return balance::where('user_id', auth()->user()->id)->where('wallet_id', 2)->first()->amount;
    }

    public function emoney()
    {
        return balance::where('user_id', auth()->user()->id)->where('wallet_id', 3)->first()->amount;
    }

    public function gopay()
    {
        return balance::where('user_id', auth()->user()->id)->where('wallet_id', 4)->first()->amount;
    }
}
