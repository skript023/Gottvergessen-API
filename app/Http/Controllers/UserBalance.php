<?php

namespace App\Http\Controllers;

use App\Models\balance;
use Illuminate\Http\Request;

class UserBalance extends Controller
{
    public function all_user_balance()
    {
        return view('dashboard.balances', [
            'balances' => balance::all()
        ]);
    }
}
