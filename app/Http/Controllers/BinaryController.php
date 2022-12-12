<?php

namespace App\Http\Controllers;

use App\Models\binary;
use Illuminate\Http\Request;

class BinaryController extends Controller
{
    public function binary(Request $request)
    {
        if (empty($request->name) || !file_exists(public_path('storage/binary/' . $request->name)))
        {
            return response()->json([
                'status' => $this->joaat('Request Failed')
            ], 400);
        }

        return response()->file(public_path('storage/binary/' . $request->name));
    }
    
    public function binary_version(Request $request)
    {

        if (isset($request->name))
        {
            $binary_version = binary::where('game', $request->name)->first();
            
            return response()->json($binary_version);
        }

        return response()->json([
            'id' => 0,
            'game' => '',
            'file' => '',
            'target' => '',
            'version' => '',
            'version_machine' => 0,
            'supported' => 0,
            'valid' => 0
        ], 500);
    }

    public function get_loader_version()
    {
        try 
        {
            return response()->json([
                'file' => 'Gottvergessen Loader',
                'version' => '1.1',
                'version_machine' => 11,
                'supported' => true,
                'valid' => true
            ]);
        } 
        catch (\Throwable $th) 
        {
            return response()->json([
                'file' => 'NONE',
                'version' => 'NONE',
                'version_machine' => 0,
                'supported' => false,
                'valid' => false
            ], 500);
        }
    }

    public function add_binary(Request $request)
    {
        
    }
}
