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
                'file' => 'Gottvergessen.vpack',
                'target' => 'GTA5.exe',
                'version' => '1.1',
                'version_machine' => 11,
                'supported' => true,
                'valid' => true
            ],
            [
                'file' => 'Ellohim.vpack',
                'target' => 'GTA5.exe',
                'version' => '2.1',
                'version_machine' => 21,
                'supported' => false,
                'valid' => true
            ],
            [
                'file' => 'scarlet-nexus.vpack',
                'target' => 'ScarletNexus-Win64-Shipping.exe',
                'version' => '2.1',
                'version_machine' => 21,
                'supported' => true,
                'valid' => true
            ],
            [
                'file' => 'tower-of-fantasy.vpack',
                'target' => 'QRSL.exe',
                'version' => '2.1',
                'version_machine' => 21,
                'supported' => false,
                'valid' => true
            ],
            [
                'file' => 'elszero.vpack',
                'target' => 'z2project.exe',
                'version' => '1.0',
                'version_machine' => 10,
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
