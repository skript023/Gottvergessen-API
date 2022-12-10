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
            ['ownership' => 'BASIC VERSION'],
            ['ownership' => 'PREMIUM VERSION'],
            ['ownership' => 'ENTERPRISE VERSION'],
            ['ownership' => 'DEVELOPER VERSION']
        ];

        foreach ($ownerships as $ownership) 
        {
            ownership::create($ownership);
        }
    }
}
