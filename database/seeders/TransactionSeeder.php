<?php

namespace Database\Seeders;

use App\Models\transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions = [
            [
                'user_id' => 1,
                'title' => 'Owned Income',
                'description' => 'Owned income',
                'type' => 'cash',
                'expenditure' => 0,
                'income' => 2550000,
                'transaction_date' => now()
            ],
            [
                'user_id' => 1,
                'title' => 'First Income',
                'description' => 'First income',
                'type' => 'bank',
                'expenditure' => 0,
                'income' => 5926000,
                'transaction_date' => now()
            ],
        ];
        
        foreach ($transactions as $transaction) 
        {
            transaction::create($transaction);
        }
    }
}
