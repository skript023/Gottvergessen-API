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
                'name' => 'admin',
            ],
            [
                'name' => 'staff',
            ],
            [
                'name' => 'user',
            ]
        ];
        
        foreach ($roles as $role) 
        {
            role::create($role);
        }
    }
}
