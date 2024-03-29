<?php

namespace App\Http\Controllers;

use App\Exports\TransactionExport;
use App\Models\balance;
use App\Models\transaction;
use App\Models\wallet;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TransactionHistory extends Controller
{
    public function index()
    {
        $transactions = transaction::with('user')->orderBy('transaction_date', 'DESC')->get();
        $wallets = wallet::all();
        $balance = balance::with(['wallet', 'user'])->get();
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
        
        $total_rate_expenditure = abs($transactions->sum('expenditure')) / $transaction->sum('income') * 100;
        $emoney_expenditure = abs($transactions->where('type', 'e-money')->sum('expenditure')) / $transaction->where('type', 'e-money')->sum('income') * 100;
        $avg_inc = $income->count() / $transaction->count() * 100;
        $rate_cash_expenditure = abs($transactions->where('type', 'cash')->sum('expenditure')) / $transactions->where('type', 'cash')->sum('income') * 100;
        $rate_bank_expenditure = abs($transactions->where('type', 'bank')->sum('expenditure')) / $transactions->where('type', 'bank')->sum('income') * 100;

        $emoney_usage = $transactions->where('user_id', auth()->user()->id)->where('type', 'e-money')->count() / $transactions->count() * 100;
        $gopay_usage = $transactions->where('user_id', auth()->user()->id)->where('type', 'gopay')->count() / $transactions->count() * 100;
        $bank_usage = $transactions->where('user_id', auth()->user()->id)->where('type', 'bank')->count() / $transactions->count() * 100;
        $cash_usage = $transactions->where('user_id', auth()->user()->id)->where('type',  'cash')->count() / $transactions->count() * 100;
        
        return view("dashboard.transaction-history", [
            'transactions' => $transactions,
            'total_expenditure' => $transactions->sum('expenditure'),
            'total_income' => $transactions->sum('income'),
            'transaction' => $transaction,
            'balance' => $balance,
            'total_rate_expenditure' => round($total_rate_expenditure, 2),
            'avg_inc' => round($avg_inc, 2),
            'rate_cash_expenditure' => round($rate_cash_expenditure, 2),
            'rate_bank_expenditure' => round($rate_bank_expenditure, 2),
            'emoney_usage' => round($emoney_usage, 2),
            'gopay_usage' => round($gopay_usage, 2),
            'bank_usage' => round($bank_usage, 2),
            'cash_usage' => round($cash_usage),
            'SALARY' => controller::SALARY,
            'wallets' => $wallets,
            'bank' => $this->bank(),
            'cash' => $this->cash(),
            'emoney' => $this->emoney(),
            'gopay' => $this->gopay(),
            'emoney_expenditure' => round($emoney_expenditure, 2)
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
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            $msg = $th->getMessage();

            toastr()->error("Failed update transaction error : $msg");

            return back()->withErrors("Registration", "Redigstration Failed");
        }

        return redirect()->intended('/dashboard/transaction-history');
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
        
        $transaction = transaction::find($request->id);

        try 
        {
            $transaction->update($data);
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            $msg = $th->getMessage();

            toastr()->error("Failed update transaction error : $msg");

            return back();
        }

        toastr()->success('Transaction successfully updated.');

        return redirect()->intended('/dashboard/transaction-history');
    }

    public function delete_transaction(Request $request)
    {
        $transaction = transaction::find($request->id);
        if (isset($transaction))
        {
            $transaction->delete();
            return redirect()->intended('/dashboard/transaction-history');
        }

        toastr()->error('Failed delete transaction');

        return back();
    }

    public function instant_transaction(Request $request)
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
        
        $transactions = [
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
            ],
            $data,
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
            ],
        ];

        try 
        {
            foreach (array_reverse($transactions) as $transaction) 
            {
                transaction::create($transaction);
            }
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);
            
            return back()->withErrors("Registration", "Redigstration Failed");
        }

        return redirect()->intended('/dashboard/transaction-history');
    }

    public function export()
    {
        return new TransactionExport;
    }
}
