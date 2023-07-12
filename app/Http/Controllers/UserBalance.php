<?php

namespace App\Http\Controllers;

use App\Models\balance;
use Illuminate\Http\Request;

class UserBalance extends Controller
{
    public function all_user_balance()
    {
        return view('dashboard.balances', [
            'balances' => balance::with(['user', 'wallet'])->get()
        ]);
    }

    public function user_balance()
    {
        return view('dashboard.user-balance', [
            'emoney' => $this->emoney(),
            'bank' => $this->bank(),
            'cash' => $this->cash(),
            'gopay' => $this->gopay()
        ]);
    }

    public function add_balance(Request $request)
    {
        $balance = balance::where('user_id', $request->user)->where('wallet_id', $request->wallet);

        $balance->amount += $request->amount;

        $balance->save();
    }

    public function remove_balance(Request $request)
    {
        $balance = balance::where('user_id', $request->user)->where('wallet_id', $request->wallet);

        $balance->amount -= $request->amount;

        $balance->save();
    }

    public function set_balance(Request $request)
    {
        $balance = balance::where('user_id', $request->user)->where('wallet_id', $request->wallet);

        $balance->amount = $request->amount;

        $balance->save();
    }
}
