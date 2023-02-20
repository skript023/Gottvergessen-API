<?php

namespace Database\Seeders;

use App\Models\wallet;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wallets = [
            [
                'name' => 'Bank',
                'symbol' => 'bank',
                'currency' => 'IDR'
            ],
            [
                'name' => 'Cash',
                'symbol' => 'cash',
                'currency' => 'IDR'
            ],
            [
                'name' => 'E-Money',
                'symbol' => 'e-money',
                'currency' => 'IDR'
            ],
            [
                'name' => 'Gopay',
                'symbol' => 'gopay',
                'currency' => 'IDR'
            ],
            [
                'name' => 'Ovo',
                'symbol' => 'ovo',
                'currency' => 'IDR'
            ],
            [
                'name' => 'Dana',
                'symbol' => 'dana',
                'currency' => 'IDR'
            ],
            [
                'name' => 'Link Aja',
                'symbol' => 'link_aja',
                'currency' => 'IDR'
            ],
            [
                'name' => 'Shopee Pay',
                'symbol' => 'shopee_pay',
                'currency' => 'IDR'
            ],
        ];
        
        foreach ($wallets as $wallet) 
        {
            wallet::create($wallet);
        }
    }
}
