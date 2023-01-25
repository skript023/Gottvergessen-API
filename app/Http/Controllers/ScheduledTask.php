<?php

namespace App\Http\Controllers;

use App\Models\client_monitor;
use App\Models\User;
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

    public static function update_activity()
    {
        $data = User::where('recent_login', '<', now()->subMinute())->get();
        foreach ($data as $datum) 
        {
            $datum->recent_login = 'Offline';
            $datum->save();
        }
    }

    public function update_login_time(Request $request)
    {
        $user = User::where('hardware_id', $request->hardware)->first();
        
        $user->recent_login = now();
        $user->save();
    }
}
