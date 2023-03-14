<?php

namespace Database\Seeders;

use App\Models\restriction;
use Illuminate\Database\Seeder;

class RestrictionRoute extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $routes = [
            [
                'route' => '/dashboard/statistic',
                'level' => 3,
                'role_id' => 2
            ],
            [
                'route' => '/admin',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/users',
                'level' => 3,
                'role_id' => 2
            ],
            [
                'route' => '/dashboard/users/update',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/users/delete',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/users/suspend',
                'level' => 3,
                'role_id' => 2
            ],

            [
                'route' => '/dashboard/users/balance',
                'level' => 3,
                'role_id' => 2
            ],
            [
                'route' => '/dashboard/balances',
                'level' => 3,
                'role_id' => 2
            ],

            [
                'route' => '/dashboard/users/activity',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/users/activity/add',
                'level' => 3,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/users/activity/update',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/users/activity/delete',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/users/activity/close',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/users/activity/download',
                'level' => 4,
                'role_id' => 3
            ],

            [
                'route' => '/dashboard/logging',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/logs/delete',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/logs/delete/all',
                'level' => 4,
                'role_id' => 3
            ],

            [
                'route' => '/dashboard/bin',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/bin/add',
                'level' => 4,
                'role_id' => 3
            ],

            [
                'route' => '/dashboard/ownership',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/add',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/edit',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/delete',
                'level' => 4,
                'role_id' => 3
            ],

            [
                'route' => '/dashboard/transaction-history',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/transaction/add',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/transaction/add-instant',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/transaction/update',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/transaction/delete',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/transaction/download',
                'level' => 4,
                'role_id' => 3
            ],

            [
                'route' => '/dashboard/wallets',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/wallets/add',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/wallets/update',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/dashboard/wallets/delete',
                'level' => 4,
                'role_id' => 3
            ],

            [
                'route' => '/dashboard/balances',
                'level' => 4,
                'role_id' => 3
            ],

            [
                'route' => '/admin/command/migration',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/admin/command/migration-fresh',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/admin/command/maintenance',
                'level' => 4,
                'role_id' => 3
            ],
            [
                'route' => '/admin/command/server-up',
                'level' => 4,
                'role_id' => 3
            ],
        ];

        foreach ($routes as $route) 
        {
            restriction::create($route);
        }
    }
}
