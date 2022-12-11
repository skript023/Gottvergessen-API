<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'fullname' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'),
                'ownership_id' => 4,
                'role_id' => 3,
                'status' => 'verified',
                'image' => 'Administrator.jpg'
            ],
            [
                'fullname' => 'Staff',
                'username' => 'staff',
                'email' => 'staff@gmail.com',
                'password' => Hash::make('123'),
                'ownership_id' => 4,
                'role_id' => 2,
                'status' => 'verified',
                'image' => 'Staff.jpg'
            ]
        ];

        foreach ($users as $user) 
        {
            User::create($user);
        }
    }
}
