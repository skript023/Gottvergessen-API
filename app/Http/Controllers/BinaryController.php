<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BinaryController extends Controller
{
    public function binary_version(Request $request)
    {
        switch ($request->name)
        {
            case 'gta':
                return response()->json([
                    'id' => 1,
                    'file' => 'Gottvergessen.vpack',
                    'target' => 'GTA5.exe',
                    'version' => '1.1',
                    'version_machine' => 11,
                    'supported' => true,
                    'valid' => true
                ]);
            case 'ellohim':
                return response()->json([
                    'id' => 2,
                    'file' => 'Ellohim.vpack',
                    'target' => 'GTA5.exe',
                    'version' => '2.1',
                    'version_machine' => 21,
                    'supported' => false,
                    'valid' => true
                ]);
            case 'scarlet-nexus':
                return response()->json([
                    'id' => 3,
                    'file' => 'scarlet-nexus.vpack',
                    'target' => 'ScarletNexus-Win64-Shipping.exe',
                    'version' => '2.1',
                    'version_machine' => 21,
                    'supported' => true,
                    'valid' => true
                ]);
            case 'tower-of-fantasy':
                return response()->json([
                    'id' => 4,
                    'file' => 'tower-of-fantasy.vpack',
                    'target' => 'QRSL.exe',
                    'version' => '2.1',
                    'version_machine' => 21,
                    'supported' => false,
                    'valid' => true
                ]);
            case 'ElsZero':
                return response()->json([
                    'id' => 5,
                    'file' => 'elszero.vpack',
                    'target' => 'z2project.exe',
                    'version' => '1.0',
                    'version_machine' => 10,
                    'supported' => false,
                    'valid' => false
                ]);
        }

        return response()->json([
            'id' => -1,
            'file' => 'NONE',
            'target' => 'game.exe',
            'version' => 'NONE',
            'version_machine' => 0,
            'supported' => false,
            'valid' => false
        ], 500);
    }
}
