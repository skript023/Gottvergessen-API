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
                'name' => 'Admin',
                'badge' => 'badge badge-success',
                'icon' => 'zmdi zmdi-globe',
                'create' => true,
                'read' => true,
                'update' => true,
                'delete' => true
            ],
            [
                'name' => 'Staff',
                'badge' => 'badge badge-primary',
                'icon' => 'zmdi zmdi-shield-security',
                'create' => true,
                'read' => true,
                'update' => true,
                'delete' => false
            ],
            [
                'name' => 'User',
                'badge' => 'badge badge-primary',
                'icon' => 'zmdi zmdi-shield-check',
                'create' => false,
                'read' => true,
                'update' => true,
                'delete' => false
            ],
            [
                'name' => 'Guest',
                'badge' => 'badge badge-danger',
                'icon' => 'zmdi zmdi-lock',
                'create' => false,
                'read' => true,
                'update' => false,
                'delete' => false
            ],
        ];
        
        foreach ($levels as $level) 
        {
            access_level::create($level);
        }
    }
}

/*
[
    'name' => 'Admin',
    'badge' => 'badge badge-primary',
    'icon' => 'zmdi zmdi-globe-lock',
    'create' => 1,
    'read' => 1,
    'update' => 1,
    'delete' => 1
],
[
    'name' => 'Staff Assistant',
    'badge' => 'badge badge-warning',
    'icon' => 'zmdi zmdi-settings',
    'create' => 1,
    'read' => 1,
    'update' => 0,
    'delete' => 0
],
*/