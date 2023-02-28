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
                'transaction_date' => now()->setDateTime(2023, 2, 16, 5, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 16, 5, 13)
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
                'transaction_date' => now()->setDateTime(2023, 2, 17, 5, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 17, 5, 13)
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
                'transaction_date' => now()->setDateTime(2023, 2, 20, 5, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 20, 5, 13)
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
                'transaction_date' => now()->setDateTime(2023, 2, 22, 5, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 22, 5, 13)
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
                'transaction_date' => now()->setDateTime(2023, 2, 21, 18, 30)
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
                'transaction_date' => now()->setDateTime(2023, 2, 22, 5, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 22, 5, 13)
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
                'transaction_date' => now()->setDateTime(2023, 2, 23, 5, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 23, 5, 13)
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
                'transaction_date' => now()->setDateTime(2023, 2, 24, 5, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 24, 5, 13)
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
                'transaction_date' => now()->setDateTime(2023, 2, 27, 5, 30)
            ],
            [
                'user_id' => 1,
                'title' => 'Trans Jakarta',
                'description' => 'Trans Jakarta 2Q Balaikota - Gondangdia',
                'office' => 'STO Gambir',
                'type' => 'e-money',
                'expenditure' => -3500,
                'income' => 0,
                'transaction_date' => now()->setDateTime(2023, 2, 27, 5, 13)
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
        ];
        
        foreach ($transactions as $transaction) 
        {
            transaction::create($transaction);
        }
    }
}
