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
                'status' => $this->joaat('Request Failed')
            ], 400);
        }

        $url = sprintf('https://raw.githubusercontent.com/root-cause/v-clothingnames/master/%s.json', $request->name);
        $response = Http::get($url);
        $result = json_decode($response->body());

        return response()->json($result);
    }

}
