<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function UInt32($num)
    {
        return $num & 0xFFFFFFFF;
    }

    private function Int32($num)
    {
        $n = $num & 0xFFFFFFFF;
        return 0 != ($n & 0x80000000) ? $n - 0x100000000 : $n;
    }

    public function joaat($name)
    {
        $hash = 0;
        $name = strtolower($name);
        foreach(str_split($name) as $letter)
        {
            $hash += ord($letter);
            $hash = Controller::UInt32($hash);
            $hash += $hash << 10;
            $hash ^= Controller::UInt32($hash) >> 6;
        }

        $hash += $hash << 3;
        $hash ^= Controller::UInt32($hash) >> 11;
        $hash += $hash << 15;
        $hash = Controller::UInt32($hash);

        return $hash;
    }
}
