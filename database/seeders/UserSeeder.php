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
                'image' => 'Administrator.jpg',
                'email_verified_at' => now(),
                'computer_name' => 'DESKTOP-JSCHV8I',
                'hardware_uuid' => '$2y$10$UiHEEMO7lkFkuRMOHuNs2OA/WgnbfTzB6VcAjBn66U3NPXVgHdld2'
            ],
            [
                'fullname' => 'Staff',
                'username' => 'staff',
                'email' => 'staff@gmail.com',
                'password' => Hash::make('123'),
                'ownership_id' => 4,
                'role_id' => 2,
                'status' => 'verified',
                'image' => 'Staff.jpg',
                'email_verified_at' => now()
            ],
            [
                'fullname' => 'Putra Hadi',
                'username' => 'QuinCantik12',
                'email' => 'putrahadi1132@gmail.com',
                'password' => Hash::make('QuinCantik12'),
                'ownership_id' => 3,
                'role_id' => 1,
                'status' => 'verified',
                'image' => 'QuinCantik12.jpg',
                'email_verified_at' => now()
            ]
        ];

        foreach ($users as $user) 
        {
            User::create($user);
        }
    }
}
