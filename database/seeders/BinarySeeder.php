<?php

namespace Database\Seeders;

use App\Models\binary;
use Illuminate\Database\Seeder;

class BinarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $binaries = [
            [
                'game' => 'gta',
                'file' => 'Gottvergessen.vpack',
                'target' => 'GTA5.exe',
                'version' => '1.1',
                'version_machine' => 11,
                'ownership_id' => 1,
                'supported' => true,
                'valid' => true
            ],
            [
                'game' => 'ellohim',
                'file' => 'Ellohim.vpack',
                'target' => 'GTA5.exe',
                'version' => '2.1',
                'version_machine' => 21,
                'ownership_id' => 2,
                'supported' => false,
                'valid' => true
            ],
            [
                'game' => 'scarlet-nexus',
                'file' => 'scarlet-nexus.vpack',
                'target' => 'ScarletNexus-Win64-Shipping.exe',
                'version' => '2.1',
                'version_machine' => 21,
                'ownership_id' => 1,
                'supported' => true,
                'valid' => true
            ],
            [
                'game' => 'tower-of-fantasy',
                'file' => 'tower-of-fantasy.vpack',
                'target' => 'QRSL.exe',
                'version' => '2.1',
                'version_machine' => 21,
                'ownership_id' => 4,
                'supported' => false,
                'valid' => true
            ],
            [
                'game' => 'ElsZero',
                'file' => 'elszero.vpack',
                'target' => 'z2project.exe',
                'version' => '1.0',
                'version_machine' => 10,
                'ownership_id' => 3,
                'supported' => false,
                'valid' => false
            ]
        ];

        foreach ($binaries as $binary) 
        {
            binary::create($binary);
        }
    }
}
