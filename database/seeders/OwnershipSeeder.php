<?php

namespace Database\Seeders;

use App\Models\ownership;
use Illuminate\Database\Seeder;

class OwnershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ownerships = [
            [
                'ownership' => 'BASIC VERSION',
                'price' => 0,
            ],
            [
                'ownership' => 'PREMIUM VERSION',
                'price' => 10
            ],
            [
                'ownership' => 'ENTERPRISE VERSION',
                'price' => 20
            ],
            [
                'ownership' => 'DEVELOPER VERSION',
                'price' => 0xffffffff
            ]
        ];

        foreach ($ownerships as $ownership) 
        {
            ownership::create($ownership);
        }
    }
}
