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
                'title' => 'Tarik Tunai Gaji Disnaker',
                'description' => 'Tarik Tunai Gaji Tukang Service Disnaker Depok',
                'office' => 'Wisma Hijau Depok',
                'type' => 'cash',
                'expenditure' => 0,
                'income' => 2550000,
                'transaction_date' => now()->setDateTime(2021, 11, 1, 12, 5)
            ],
            [
                'user_id' => 1,
                'title' => 'Gaji Devops',
                'description' => 'Gaji IT Devops & Support Neuron',
                'office' => 'Telkom Hub Gatot Subroto',
                'type' => 'bank',
                'expenditure' => 0,
                'income' => 5926000,
                'transaction_date' => now()->setDateTime(2023, 1, 30, 19, 5)
            ],
            [
                'user_id' => 1,
                'title' => 'Pertamax 92',
                'description' => 'Pertamax 92',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -19000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 11, 8, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 13, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 13, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Nasi Bungkus',
                'description' => 'Telur dadar, kikil & Mie',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -18000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 13, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 13, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota-Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 13, 8, 13)
            ],
        ];
        
        foreach ($transactions as $transaction) 
        {
            transaction::create($transaction);
        }
    }
}
