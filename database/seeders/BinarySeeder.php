<?php

namespace Database\Seeders;

use App\Models\binary;
use App\Http\Controllers\Jenkins;
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
                'game' => 'Grand Theft Auto V',
                'code' => Jenkins::hash("GOTTVERGESSEN"),
                'file' => 'Gottvergessen.vpack',
                'target' => 'GTA5.exe',
                'version' => '1.1',
                'version_machine' => 11,
                'ownership_id' => 1,
                'supported' => true,
                'valid' => true
            ],
            [
                'game' => 'Grand Theft Auto V',
                'code' => Jenkins::hash('ELLOHIM'),
                'file' => 'Ellohim.vpack',
                'target' => 'GTA5.exe',
                'version' => '2.1',
                'version_machine' => 21,
                'ownership_id' => 2,
                'supported' => false,
                'valid' => true
            ],
            [
                'game' => 'Scarlet Nexus',
                'code' => Jenkins::hash('SCARLET_NEXUS'),
                'file' => 'scarlet-nexus.vpack',
                'target' => 'ScarletNexus-Win64-Shipping.exe',
                'version' => '2.1',
                'version_machine' => 21,
                'ownership_id' => 1,
                'supported' => true,
                'valid' => true
            ],
            [
                'game' => 'Tower of Fantasy',
                'code' => Jenkins::hash('TOWER_OF_FANTASY'),
                'file' => 'tower-of-fantasy.vpack',
                'target' => 'QRSL.exe',
                'version' => '2.1',
                'version_machine' => 21,
                'ownership_id' => 4,
                'supported' => true,
                'valid' => true
            ],
            [
                'game' => 'Elsword Zero',
                'code' => Jenkins::hash('ELSWORD_ZERO'),
                'file' => 'elszero.vpack',
                'target' => 'z2project.exe',
                'version' => '1.0',
                'version_machine' => 10,
                'ownership_id' => 4,
                'supported' => true,
                'valid' => true
            ],
            [
                'game' => 'Closers',
                'code' => Jenkins::hash('CLOSERS'),
                'file' => 'closers.vpack',
                'target' => 'CW.exe',
                'version' => '1.0',
                'version_machine' => 10,
                'ownership_id' => 4,
                'supported' => true,
                'valid' => true
            ]
        ];

        foreach ($binaries as $binary)
        {
            binary::create($binary);
        }
    }
}


