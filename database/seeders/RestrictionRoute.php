<?php

namespace Database\Seeders;

use App\Models\access_level;
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
        $guest = access_level::where('name', 'Guest')->first();
        $data_management = access_level::where('name', 'Data Management')->first();
        $admin = access_level::where('name', 'Admin')->first();

        $routes = [
            [
                'route' => '/dashboard/statistic',
                'action' => 'view',
                'type' => 'web',
                'level' => $guest->id,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/admin',
                'action' => 'view',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/role',
                'action' => 'view',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/role/add',
                'action' => 'create',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/role/edit',
                'action' => 'update',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/role/delete',
                'action' => 'delete',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],


            [
                'route' => '/dashboard/users',
                'action' => 'view',
                'type' => 'web',
                'level' => $guest->id,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/dashboard/users/add',
                'action' => 'create',
                'type' => 'web',
                'level' => $guest->id,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/dashboard/users/update',
                'action' => 'update',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/delete',
                'action' => 'delete', 
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/suspend',
                'action' => 'suspend',
                'type' => 'web',
                'level' => $guest->id,
                'role_id' => role::where('name', 'staff')->first()->id
            ],

            [
                'route' => '/dashboard/users/balance',
                'action' => 'view',
                'type' => 'web',
                'level' => $guest->id,
                'role_id' => role::where('name', 'staff')->first()->id
            ],
            [
                'route' => '/dashboard/balance',
                'action' => 'view',
                'type' => 'web',
                'level' => $admin->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/users/activity',
                'action' => 'view',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/add',
                'action' => 'create',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/update',
                'action' => 'update',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/delete',
                'action' => 'delete',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/close',
                'action' => 'close',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/users/activity/download',
                'action' => 'export',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/logging',
                'action' => 'view',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/logs/delete',
                'action' => 'delete',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/logs/delete/all',
                'action' => 'delete',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/bin',
                'action' => 'view',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/bin/add',
                'action' => 'create',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/ownership',
                'action' => 'view',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/ownership/add',
                'action' => 'create',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/ownership/edit',
                'action' => 'update',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/ownership/delete',
                'action' => 'delete',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/transaction-history',
                'action' => 'view',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/add',
                'action' => 'create',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/add-instant',
                'action' => 'create',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/update',
                'action' => 'update',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/delete',
                'action' => 'delete',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/transaction/download',
                'action' => 'export',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/wallets',
                'action' => 'view',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/wallets/add',
                'action' => 'create',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/wallets/update',
                'action' => 'update',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/wallets/delete',
                'action' => 'delete',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/balances',
                'action' => 'view',
                'type' => 'web',
                'level' => $data_management->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/dashboard/restriction',
                'action' => 'view',
                'type' => 'web',
                'level' => $admin->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/restriction/add',
                'action' => 'create',
                'type' => 'web',
                'level' => $admin->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/restriction/update',
                'action' => 'update',
                'type' => 'web',
                'level' => $admin->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/dashboard/restriction/delete',
                'action' => 'delete',
                'type' => 'web',
                'level' => $admin->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],

            [
                'route' => '/admin/command/migration',
                'action' => 'system',
                'type' => 'web',
                'level' => $admin->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/admin/command/migration-fresh',
                'action' => 'system',
                'type' => 'web',
                'level' => $admin->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/admin/command/maintenance',
                'action' => 'system',
                'type' => 'web',
                'level' => $admin->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
            [
                'route' => '/admin/command/server-up',
                'action' => 'system',
                'type' => 'web',
                'level' => $admin->id,
                'role_id' => role::where('name', 'admin')->first()->id
            ],
        ];

        foreach ($routes as $route) 
        {
            restriction::create($route);
        }
    }
}
