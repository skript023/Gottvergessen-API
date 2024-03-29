<?php

namespace App\Http\Controllers;

use App\Models\balance;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public const SALARY = 6000000;

    public static function UInt32($num)
    {
        return $num & 0xFFFFFFFF;
    }

    private function Int32($num)
    {
        $n = $num & 0xFFFFFFFF;
        return 0 != ($n & 0x80000000) ? $n - 0x100000000 : $n;
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
