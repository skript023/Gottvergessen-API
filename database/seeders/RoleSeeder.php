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
            ['role' => 'user'],
            ['role' => 'staff'],
            ['role' => 'admin']
        ];
        
        foreach ($roles as $role) 
        {
            role::create($role);
        }
    }
}
