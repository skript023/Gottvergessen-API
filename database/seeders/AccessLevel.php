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
                'badge badge-success',
                'zmdi zmdi-globe',
                'description' => 'Administrator privilege'
            ],
            [
                'name' => 'Admin',
                'badge badge-primary',
                'zmdi zmdi-globe-lock',
                'description' => 'Create, Read, Update & Delete Access'
            ],
            [
                'name' => 'Sub Admin',
                'badge badge-primary',
                'zmdi zmdi-shield-security',
                'description' => 'Create, Read, Update & Delete Access (Some Access Require Approval)'
            ],
            [
                'name' => 'First Staff',
                'badge badge-primary',
                'zmdi zmdi-shield-check',
                'description' => 'Create, Read & Update Only'
            ],
            [
                'name' => 'Second Staff',
                'badge badge-warning',
                'zmdi zmdi-settings',
                'description' => 'Create, Read Only'
            ],
            [
                'name' => 'Watcher',
                'badge badge-danger',
                'zmdi zmdi-lock',
                'description' => 'Read Only'
            ],
        ];
        
        foreach ($levels as $level) 
        {
            access_level::create($level);
        }
    }
}
