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
                'wallet_id' => 1,
                'amount' => 5926000
            ],
            [
                'user_id' => 1,
                'wallet_id' => 2,
                'amount' => 2550000
            ],
            [
                'user_id' => 1,
                'wallet_id' => 3,
                'amount' => 86000
            ],
            [
                'user_id' => 1,
                'wallet_id' => 4,
                'amount' => 99000
            ],
            [
                'user_id' => 1,
                'wallet_id' => 5,
                'amount' => 0
            ],
            [
                'user_id' => 1,
                'wallet_id' => 6,
                'amount' => 0
            ],
            [
                'user_id' => 1,
                'wallet_id' => 7,
                'amount' => 0
            ],
            [
                'user_id' => 1,
                'wallet_id' => 8,
                'amount' => 0
            ],

            [
                'user_id' => 2,
                'wallet_id' => 1,
                'amount' => 0
            ],
            [
                'user_id' => 2,
                'wallet_id' => 2,
                'amount' => 0
            ],
            [
                'user_id' => 2,
                'wallet_id' => 3,
                'amount' => 0
            ],
            [
                'user_id' => 2,
                'wallet_id' => 4,
                'amount' => 0
            ],
            [
                'user_id' => 2,
                'wallet_id' => 5,
                'amount' => 0
            ],
            [
                'user_id' => 2,
                'wallet_id' => 6,
                'amount' => 0
            ],
            [
                'user_id' => 2,
                'wallet_id' => 7,
                'amount' => 0
            ],
            [
                'user_id' => 2,
                'wallet_id' => 8,
                'amount' => 0
            ],

            [
                'user_id' => 3,
                'wallet_id' => 1,
                'amount' => 0
            ],
            [
                'user_id' => 3,
                'wallet_id' => 2,
                'amount' => 0
            ],
            [
                'user_id' => 3,
                'wallet_id' => 3,
                'amount' => 0
            ],
            [
                'user_id' => 3,
                'wallet_id' => 4,
                'amount' => 0
            ],
            [
                'user_id' => 3,
                'wallet_id' => 5,
                'amount' => 0
            ],
            [
                'user_id' => 3,
                'wallet_id' => 6,
                'amount' => 0
            ],
            [
                'user_id' => 3,
                'wallet_id' => 7,
                'amount' => 0
            ],
            [
                'user_id' => 3,
                'wallet_id' => 8,
                'amount' => 0
            ],
        ];
        
        foreach ($balances as $balance) 
        {
            balance::create($balance);
        }
    }
}
