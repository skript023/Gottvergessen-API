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
                'transaction_date' => now()->setDateTime(2023, 2, 12, 13, 39)
            ],
            [
                'user_id' => 1,
                'title' => 'Topup E-Money',
                'description' => 'Topup E-Money',
                'office' => 'Telkom Hub Gatot Subroto',
                'type' => 'e-money',
                'expenditure' => 0,
                'income' => 86000,
                'transaction_date' => now()->setDateTime(2023, 2, 13, 19, 5)
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
                'transaction_date' => now()->setDateTime(2023, 2, 13, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota-Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 13, 17, 13)
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
                'expenditure' => -20000,
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
                'transaction_date' => now()->setDateTime(2023, 2, 14, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 14, 17, 13)
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
                'title' => 'Makaroni Pedas Manis',
                'description' => 'Makaroni Pedas Manis',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -13000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 14, 19, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Topup E-Money',
                'description' => 'Topup E-Money',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => 0,
                'income' => 100000,
                'transaction_date' => now()->setDateTime(2023, 2, 14, 20, 30)
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
                'transaction_date' => now()->setDateTime(2023, 2, 15, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 15, 17, 13)
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
            [
                'user_id' => 1,
                'title' => 'Pulsa via Gopay',
                'description' => 'Pulsa via Gopay',
                'office' => 'STO Gambir',
                'type' => 'gopay',
                'expenditure' => -48500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 15, 21, 40)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 16, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 16, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Pecel Ayam',
                'description' => 'Pecel Ayam',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -18000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 16, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 16, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 16, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 16, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Makaroni Pedas',
                'description' => 'Makaroni Pedas',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -16000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 17, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 17, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 17, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Ayam Geprek',
                'description' => 'Ayam Geprek',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 17, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 17, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 17, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 17, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Makaroni Pedas',
                'description' => 'Makaroni Pedas',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -16000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 17, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'PGC 20',
                'description' => 'PGC 20',
                'office' => 'Home',
                'type' => 'bank',
                'expenditure' => -303822,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 19, 12, 24, 36)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 20, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 20, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Ayam Geprek',
                'description' => 'Ayam Geprek',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 20, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 20, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 20, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 20, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Nasi Uduk',
                'description' => 'Nasi Uduk',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 20, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Malkist Keju',
                'description' => 'Malkist Keju',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -7000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 20, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Malkist Keju',
                'description' => 'Malkist Keju',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -7000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 20, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 21, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 21, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Nasi Bungkus Setengah',
                'description' => 'Nasi Bungkus Setengah',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -10000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 21, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 21, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 21, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 21, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Tissue, Cheetos & Chocolatos',
                'description' => 'Tissue, Cheetos & Chocolatos',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -10000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 21, 19, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Minum',
                'description' => 'Minum',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 22, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 22, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 22, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Ayam Geprek',
                'description' => 'Ayam Geprek',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 22, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 22, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 22, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 22, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 23, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 23, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Sekrup M.2 NVMe',
                'description' => 'Sekrup SSD M.2 NVMe',
                'office' => 'STO Gambir',
                'type' => 'gopay',
                'expenditure' => -14600,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 23, 8, 14)
            ],
            [
                'user_id' => 1,
                'title' => 'Ayam Geprek',
                'description' => 'Ayam Geprek',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 23, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 23, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 23, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 23, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Makaroni',
                'description' => 'Makaroni',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -16000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 23, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 24, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 24, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Ketoprak',
                'description' => 'Ketoprak',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 24, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 24, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 24, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 24, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'SSD M.2 NVMe 1TB',
                'description' => 'V-Gen SSD M.2 NVMe 1TB',
                'office' => 'STO Gambir',
                'type' => 'bank',
                'expenditure' => -1181770,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 24, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Restaurant',
                'description' => 'Restaurant',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -100000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 24, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Biaya Admin',
                'description' => 'Biaya Admin',
                'office' => 'STO Gambir',
                'type' => 'bank',
                'expenditure' => -5000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 25, 1, 1)
            ],
            [
                'user_id' => 1,
                'title' => 'E-Money Topup',
                'description' => 'E-Money Topup',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => 0,
                'income' => 50000,
                'transaction_date' => now()->setDateTime(2023, 2, 27, 5, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 27, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 27, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Gado-Gado',
                'description' => 'Gado-Gado',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 27, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 27, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 27, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 27, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Nasi Uduk',
                'description' => 'Nasi Uduk',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 27, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 28, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 28, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Gado-Gado',
                'description' => 'Gado-Gado',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 28, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 28, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 28, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 28, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Gaji IT Devops & Support Neuron',
                'description' => 'Gaji IT Devops & Support Neuron',
                'office' => 'STO Gambir',
                'type' => 'bank',
                'expenditure' => 0,
                'income' => 5926000,
                'transaction_date' => now()->setDateTime(2023, 2, 28, 19, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Kripik Kentang',
                'description' => 'Kripik Kentang',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -18000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 28, 20, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Topup Gopay',
                'description' => 'Topup Gopay',
                'office' => 'STO Gambir',
                'type' => 'bank',
                'expenditure' => -1551000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 28, 20, 31)
            ],
            [
                'user_id' => 1,
                'title' => 'Topup Gopay',
                'description' => 'Topup Gopay',
                'office' => 'STO Gambir',
                'type' => 'gopay',
                'expenditure' => 0,
                'income' => 1551000,
                'transaction_date' => now()->setDateTime(2023, 2, 28, 20, 32)
            ],
            [
                'user_id' => 1,
                'title' => 'TeamGroup RAM DDR4 3200MHz 2x16',
                'description' => 'TeamGroup RAM DDR4 3200MHz 2x16 Black Gold',
                'office' => 'STO Gambir',
                'type' => 'gopay',
                'expenditure' => -1552300,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 28, 20, 33)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 1, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 1, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Ayam Geprek',
                'description' => 'Ayam Geprek',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 1, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 1, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 1, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 1, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Tooth Paste Set',
                'description' => 'Tooth Paste Set',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -10000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 2, 5, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 2, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 2, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Gado-Gado',
                'description' => 'Gado-Gado',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 2, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 2, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 2, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 2, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 3, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 3, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Ayam Geprek',
                'description' => 'Ayam Geprek',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 3, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 3, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 3, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 3, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Keripik Kentang',
                'description' => 'Keripik Kentang',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -18000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 3, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Bensin Pertamax',
                'description' => 'Bensin Pertamax',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -22000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 3, 18, 40)
            ],
            [
                'user_id' => 1,
                'title' => 'Topup Gopay',
                'description' => 'Topup Gopay',
                'office' => 'Home',
                'type' => 'bank',
                'expenditure' => -61000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 4, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Topup Gopay',
                'description' => 'Topup Gopay',
                'office' => 'Home',
                'type' => 'gopay',
                'expenditure' => 0,
                'income' => 61000,
                'transaction_date' => now()->setDateTime(2023, 3, 4, 13, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'SW',
                'description' => 'SW',
                'office' => 'Home',
                'type' => 'gopay',
                'expenditure' => -87480,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 4, 14, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Topup Gopay',
                'description' => 'Topup Gopay',
                'office' => 'Home',
                'type' => 'bank',
                'expenditure' => -21000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 5, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Topup Gopay',
                'description' => 'Topup Gopay',
                'office' => 'Home',
                'type' => 'gopay',
                'expenditure' => 0,
                'income' => 21000,
                'transaction_date' => now()->setDateTime(2023, 3, 5, 13, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Pulsa Telkomsel 20000',
                'description' => 'Pulsa Telkomsel 20000',
                'office' => 'Home',
                'type' => 'gopay',
                'expenditure' => -21500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 5, 14, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Topup E-Money',
                'description' => 'Topup E-Money',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => 0,
                'income' => 200000,
                'transaction_date' => now()->setDateTime(2023, 3, 5, 14, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 6, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 6, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Ayam Geprek',
                'description' => 'Ayam Geprek',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 6, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 6, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 6, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 6, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 7, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 7, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Ayam Geprek',
                'description' => 'Ayam Geprek',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 7, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 7, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 7, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 7, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 8, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 8, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Nasi Warteg',
                'description' => 'Nasi Warteg',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -18000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 8, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 8, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 8, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 8, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 9, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 9, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Ayam Geprek',
                'description' => 'Ayam Geprek',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 9, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 9, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 9, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 9, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'No Expenditure',
                'description' => 'No Expenditure',
                'office' => 'WFH',
                'type' => 'cash',
                'expenditure' => 0,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 10, 0, 1)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 13, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 13, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Ikan Bandeng',
                'description' => 'Ikan Bandeng',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 13, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 13, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 13, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 13, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Makaroni + Chips',
                'description' => 'Makaroni + Chips',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -30000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 13, 18, 31)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 14, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 14, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Ayam Geprek',
                'description' => 'Ayam Geprek',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 14, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 14, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 14, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 14, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 15, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 15, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Ayam Geprek',
                'description' => 'Ayam Geprek',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 15, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 15, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 15, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 15, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 16, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 16, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Ayam Geprek',
                'description' => 'Ayam Geprek',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 16, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 16, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 16, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 16, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 17, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 17, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Ayam Geprek',
                'description' => 'Ayam Geprek',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 17, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 17, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 17, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 17, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 20, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 20, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Ayam Geprek',
                'description' => 'Ayam Geprek',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -15000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 20, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 20, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 20, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 20, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 21, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 21, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Free Makan',
                'description' => 'Free Makan',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => 0,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 21, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 21, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 21, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 21, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'No Cost',
                'description' => 'No Cost',
                'office' => 'WFH',
                'type' => 'cash',
                'expenditure' => 0,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 24, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 27, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 27, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Puasa',
                'description' => 'Puasa',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => 0,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 27, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 27, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 27, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 27, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 28, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 28, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Puasa',
                'description' => 'Puasa',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => 0,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 28, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 28, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 28, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 28, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 29, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 29, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Puasa',
                'description' => 'Puasa',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => 0,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 29, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 29, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 29, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 29, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 30, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 30, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Puasa',
                'description' => 'Puasa',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => 0,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 30, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 30, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 30, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 30, 18, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Depok - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 31, 6, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Gondangdia - Balaikota',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 31, 8, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Puasa',
                'description' => 'Puasa',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => 0,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 31, 12, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'KRL Commuter Line',
                'description' => 'Commuter Line Gondangdia - Depok',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -4000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 31, 17, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 31, 17, 13)
            ],
            [
                'user_id' => 1,
                'title' => 'Parkir Penitipan Motor',
                'description' => 'Parkir Penitipan Motor [ST. Depok]',
                'office' => 'STO Gambir',
                'type' => 'cash',
                'expenditure' => -6000,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 3, 31, 18, 30)
            ],
        ];
        
        foreach ($transactions as $transaction) 
        {
            transaction::create($transaction);
        }
    }
}
