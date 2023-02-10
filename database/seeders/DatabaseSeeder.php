<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OwnershipSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(BinarySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ClientMonitor::class);
        $this->call(TransactionSeeder::class);
    }
}
