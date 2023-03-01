<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class AdminCommand extends Controller
{
    public function fresh_migration_only()
    {
        Artisan::call('migrate');

        return redirect()->intended('/dashboard/transaction-history');
    }
    
    public function refresh_migration()
    {
        Artisan::call('migrate:fresh');

        return redirect()->intended('/dashboard/transaction-history');
    }

    public function maintenance()
    {
        Artisan::call('down', ['--redirect' => '/maintenance']);

        return redirect()->intended('/maintenance');
    }

    public function server_up(Request $request)
    {
        Artisan::call('up');

        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->intended('/');
    }
}
