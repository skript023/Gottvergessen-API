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
                'description' => 'Administrator privilege'
            ],
            [
                'name' => 'Admin',
                'description' => 'Create, Read, Update & Delete Access'
            ],
            [
                'name' => 'Sub Admin',
                'description' => 'Create, Read, Update & Delete Access (Some Access Require Approval)'
            ],
            [
                'name' => 'First Staff',
                'description' => 'Create, Read & Update Only'
            ],
            [
                'name' => 'Second Staff',
                'description' => 'Create, Read Only'
            ],
            [
                'name' => 'Watcher',
                'description' => 'Read Only'
            ],
        ];
        
        foreach ($levels as $level) 
        {
            access_level::create($level);
        }
    }
}
