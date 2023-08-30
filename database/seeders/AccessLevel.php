<?php

namespace Database\Seeders;

use App\Models\access_level;
use Illuminate\Database\Seeder;

class AccessLevel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levels = [
            [
                'name' => 'Super Admin',
                'badge' => 'badge badge-success',
                'icon' => 'zmdi zmdi-globe',
                'description' => 'Administrator privilege'
            ],
            [
                'name' => 'Admin',
                'badge' => 'badge badge-primary',
                'icon' => 'zmdi zmdi-globe-lock',
                'description' => 'Create, Read, Update & Delete Access'
            ],
            [
                'name' => 'Admin Assistant',
                'badge' => 'badge badge-primary',
                'icon' => 'zmdi zmdi-shield-security',
                'description' => 'Create, Read, Update & Delete Access (Some Access Require Approval)'
            ],
            [
                'name' => 'Staff',
                'badge' => 'badge badge-primary',
                'icon' => 'zmdi zmdi-shield-check',
                'description' => 'Create, Read & Update Only'
            ],
            [
                'name' => 'Staff Assistant',
                'badge' => 'badge badge-warning',
                'icon' => 'zmdi zmdi-settings',
                'description' => 'Create, Read Only'
            ],
            [
                'name' => 'Guest',
                'badge' => 'badge badge-danger',
                'icon' => 'zmdi zmdi-lock',
                'description' => 'Read Only'
            ],
        ];
        
        foreach ($levels as $level) 
        {
            access_level::create($level);
        }
    }
}
