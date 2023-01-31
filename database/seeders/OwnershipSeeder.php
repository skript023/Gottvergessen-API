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
                'type' => 'BASIC VERSION',
                'price' => 0,
            ],
            [
                'type' => 'PREMIUM VERSION',
                'price' => 10
            ],
            [
                'type' => 'ENTERPRISE VERSION',
                'price' => 20
            ],
            [
                'type' => 'DEVELOPER VERSION',
                'price' => 0xffffffff
            ]
        ];

        foreach ($ownerships as $ownership) 
        {
            ownership::create($ownership);
        }
    }
}
