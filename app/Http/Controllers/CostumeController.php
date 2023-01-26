<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CostumeController extends Controller
{
    public function costumes(Request $request)
    {
        if (empty($request->name))
        {
            return response()->json([
                'status' => Jenkins::hash('REQUEST_NOT_FOUND'),
                'message' => 'Data not found'
            ], 404);
        }

        $url = sprintf('https://raw.githubusercontent.com/root-cause/v-clothingnames/master/%s.json', $request->name);
        $response = Http::get($url);
        $result = json_decode($response->body());
        
        if (empty($result)) return response()->json(['status' => Jenkins::hash('Request Failed'), 'message' => 'Data not found'], 404);

        return response()->json($result);
    }

}
