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
                'amount' => 5926000,
            ],
        ];
        
        foreach ($balances as $balance) 
        {
            balance::create($balance);
        }
    }
}
