<?php

namespace Database\Seeders;

use App\Models\restriction;
use App\Models\role;
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
                'type' => 'web',
                'level' => 5,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/admin',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/role',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/role/add',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/role/edit',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/role/delete',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],


            [
                'route' => '/dashboard/users',
                'type' => 'web',
                'level' => 5,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/dashboard/users/add',
                'type' => 'web',
                'level' => 5,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/dashboard/users/update',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/delete',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/suspend',
                'type' => 'web',
                'level' => 5,
                'role_id' => role::where('name', 'staff')->first()->id
            ],

            [
                'route' => '/dashboard/users/balance',
                'type' => 'web',
                'level' => 5,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/dashboard/balance',
                'type' => 'web',
                'level' => 2,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/users/activity',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/add',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/update',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/delete',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/close',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/download',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/logging',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/logs/delete',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/logs/delete/all',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/bin',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/bin/add',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/ownership',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/add',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/edit',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/delete',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/transaction-history',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/add',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/add-instant',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/update',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/delete',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/download',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/wallets',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/wallets/add',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/wallets/update',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/wallets/delete',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/balances',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/restriction',
                'type' => 'web',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/restriction/add',
                'type' => 'web',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/restriction/update',
                'type' => 'web',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/restriction/delete',
                'type' => 'web',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/admin/command/migration',
                'type' => 'web',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/admin/command/migration-fresh',
                'type' => 'web',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/admin/command/maintenance',
                'type' => 'web',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/admin/command/server-up',
                'type' => 'web',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
        ];

        foreach ($routes as $route) 
        {
            restriction::create($route);
        }
    }
}
