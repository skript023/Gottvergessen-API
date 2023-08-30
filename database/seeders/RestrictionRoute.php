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
                'action' => 'view',
                'type' => 'web',
                'level' => 5,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/admin',
                'action' => 'view',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/role',
                'action' => 'view',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/role/add',
                'action' => 'add',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/role/edit',
                'action' => 'edit',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/role/delete',
                'action' => 'delete',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],


            [
                'route' => '/dashboard/users',
                'action' => 'view',
                'type' => 'web',
                'level' => 5,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/dashboard/users/add',
                'action' => 'add',
                'type' => 'web',
                'level' => 5,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/dashboard/users/update',
                'action' => 'edit',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/delete',
                'action' => 'delete', 
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/suspend',
                'action' => 'suspend',
                'type' => 'web',
                'level' => 5,
                'role_id' => role::where('name', 'staff')->first()->id
            ],

            [
                'route' => '/dashboard/users/balance',
                'action' => 'view',
                'type' => 'web',
                'level' => 5,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/dashboard/balance',
                'action' => 'view',
                'type' => 'web',
                'level' => 2,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/users/activity',
                'action' => 'view',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/add',
                'action' => 'add',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/update',
                'action' => 'edit',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/delete',
                'action' => 'delete',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/close',
                'action' => 'close',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/download',
                'action' => 'export',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/logging',
                'action' => 'view',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/logs/delete',
                'action' => 'delete',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/logs/delete/all',
                'action' => 'delete',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/bin',
                'action' => 'view',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/bin/add',
                'action' => 'add',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/ownership',
                'action' => 'view',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/add',
                'action' => 'add',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/edit',
                'action' => 'edit',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/delete',
                'action' => 'delete',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/transaction-history',
                'action' => 'view',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/add',
                'action' => 'add',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/add-instant',
                'action' => 'add',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/update',
                'action' => 'edit',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/delete',
                'action' => 'delete',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/download',
                'action' => 'export',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/wallets',
                'action' => 'view',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/wallets/add',
                'action' => 'add',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/wallets/update',
                'action' => 'edit',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/wallets/delete',
                'action' => 'delete',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/balances',
                'action' => 'view',
                'type' => 'web',
                'level' => 3,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/restriction',
                'action' => 'view',
                'type' => 'web',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/restriction/add',
                'action' => 'add',
                'type' => 'web',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/restriction/update',
                'action' => 'edit',
                'type' => 'web',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/restriction/delete',
                'action' => 'delete',
                'type' => 'web',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/admin/command/migration',
                'action' => 'system',
                'type' => 'web',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/admin/command/migration-fresh',
                'action' => 'system',
                'type' => 'web',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/admin/command/maintenance',
                'action' => 'system',
                'type' => 'web',
                'level' => 1,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/admin/command/server-up',
                'action' => 'system',
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
