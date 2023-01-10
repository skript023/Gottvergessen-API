<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jenkins extends Controller
{
    public static function hash($name)
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
