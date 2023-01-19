<?php

namespace App\Http\Controllers;

use App\Models\client_monitor;
use Illuminate\Http\Request;

class ScheduledTask extends Controller
{
    public static function clean_client_logs()
    {
        $data = client_monitor::where('created_at', '<', now()->subDays(30))->get();
        foreach($data as $datum)
        {
            $datum->delete();
        }
    }
}
