<?php

namespace Database\Seeders;

use App\Models\client_monitor;
use Illuminate\Database\Seeder;

class ClientMonitor extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logs = [
            [
                'prefix' => 'WARNING',
                'owner_id' => 1,
                'owner' => 'admin',
                'file' => 'user_authentication.cpp',
                'line' => 30,
                'message' => 'Authentication Failed'
            ],
            [
                'prefix' => 'INFO',
                'owner_id' => 1,
                'owner' => 'admin',
                'file' => 'user_authentication.cpp',
                'line' => 30,
                'message' => 'Authentication Failed'
            ],
        ];

        foreach ($logs as $log) {
            client_monitor::create($log);
        }
    }
}
