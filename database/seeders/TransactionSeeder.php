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
                'title' => 'Sisa Uang Tunai & Gaji Disnaker',
                'description' => 'Sisa Uang Tunai & Gaji Disnaker Depok',
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
                'title' => 'Topup Gopay',
                'description' => 'Topup Gopay',
                'office' => 'Telkom Hub Gatot Subroto',
                'type' => 'gopay',
                'expenditure' => 0,
                'income' => 143000,
                'transaction_date' => now()->setDateTime(2023, 2, 12, 7, 5)
            ],
            [
                'user_id' => 1,
                'title' => 'Kebab John',
                'description' => 'Kebab John, Pasir Putih Sawangan',
                'office' => 'Home',
                'type' => 'gopay',
                'expenditure' => -44000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 12, 1, 39)
            ],
            [
                'user_id' => 1,
                'title' => 'Topup E-Money',
                'description' => 'Topup E-Money',
                'office' => 'Telkom Hub Gatot Subroto',
                'type' => 'e-money',
                'expenditure' => 0,
                'income' => 86000,
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
                'expenditure' => -4000,
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
                'description' => 'Nasi Bungkus',
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
                'expenditure' => -4000,
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
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 13, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 14, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 14, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Nasi Bungkus',
                'description' => 'Nasi Bungkus',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 14, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 14, 5, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 14, 5, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 14, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 15, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 15, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Nasi Bungkus',
                'description' => 'Nasi Bungkus',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -20000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 15, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 15, 5, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 15, 5, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 15, 18, 30)
            ],
        ];
        
        foreach ($transactions as $transaction) 
        {
            transaction::create($transaction);
        }
    }
}
