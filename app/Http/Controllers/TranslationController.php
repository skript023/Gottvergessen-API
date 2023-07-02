<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslationController extends Controller
{
    public function get_translation(Request $request)
    {
        if (empty($request->name) || !file_exists(storage_path('app/public/translation/' . $request->name)))
        {
            return response()->json([
                'status' => Jenkins::hash('Request Failed'),
            ], 400);
        }

        return response()->file(storage_path('app/public/translation/' . $request->name));
    }
}
