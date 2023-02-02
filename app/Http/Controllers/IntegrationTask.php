<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class IntegrationTask extends Controller
{
    public function update_login_time(Request $request)
    {
        $user = User::where('hardware_id', $request->hardware)->first();
        
        if (isset($user))
        {
            $user->recent_login = now();
            $user->activity = 'Online [Playing]';
            $user->save();

            return response()->json([
                'message' => 'success',
                'injection' => true
            ]);
        }

        return response()->json([
            'message' => 'failed',
            'injection' => false
        ], 404);
    }
}
