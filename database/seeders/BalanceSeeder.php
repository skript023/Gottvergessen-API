<?php

namespace Database\Seeders;

use App\Models\balance;
use Illuminate\Database\Seeder;

class BalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $balances = [
            [
                'user_id' => 1,
                'bank' => 0,
                'cash' => 0,
            ],
            [
                'user_id' => 2,
                'bank' => 0,
                'cash' => 0,
            ],
            [
                'user_id' => 3,
                'bank' => 0,
                'cash' => 0,
            ],
        ];
        
        foreach ($balances as $balance) 
        {
            balance::create($balance);
        }
    }
}
