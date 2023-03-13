<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'user',
                'level' => 1
            ],
            [
                'name' => 'staff',
                'level' => 3,
            ],
            [
                'name' => 'admin',
                'level' => 4
            ]
        ];
        
        foreach ($roles as $role) 
        {
            role::create($role);
        }
    }
}
