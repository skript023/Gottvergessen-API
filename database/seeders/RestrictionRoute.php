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
                'level' => 5,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/admin',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/role',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/role/add',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/role/edit',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/role/delete',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],


            [
                'route' => '/dashboard/users',
                'level' => 5,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/dashboard/users/add',
                'level' => 5,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/dashboard/users/update',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/delete',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/suspend',
                'level' => 5,
                'role_id' => role::where('name', 'staff')->first()->id
            ],

            [
                'route' => '/dashboard/users/balance',
                'level' => 5,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/dashboard/balance',
                'level' => 2,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/users/activity',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/add',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/update',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/delete',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/close',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/download',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/logging',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/logs/delete',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/logs/delete/all',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/bin',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/bin/add',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/ownership',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/add',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/edit',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/delete',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/transaction-history',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/add',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/add-instant',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/update',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/delete',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/download',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/wallets',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/wallets/add',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/wallets/update',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/wallets/delete',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/balances',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/restriction',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/restriction/add',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/restriction/update',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/restriction/delete',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/admin/command/migration',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/admin/command/migration-fresh',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/admin/command/maintenance',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/admin/command/server-up',
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
