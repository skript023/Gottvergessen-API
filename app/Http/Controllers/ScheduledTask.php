<?php

namespace App\Http\Controllers;

use App\Models\balance;
use App\Models\client_monitor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ScheduledTask extends Controller
{
    public function scheduled_task()
    {
        Artisan::call('schedule:run');
    }

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
        $data = User::where('recent_login', '<', now()->subMinutes(5))->get();
        foreach ($data as $datum) 
        {
            $datum->recent_login = 'Offline';
            $datum->save();
        }
    }

    public function add_monthly_income()
    {
        $user = User::where('role_id', 3)->first();
        $balance = balance::where('user_id', $user->id);

        try 
        {
            $balance->amount += 5926000;
            $balance->save();
        } 
        catch (\Throwable $th) 
        {
            //throw $th;
        }
    }
}
