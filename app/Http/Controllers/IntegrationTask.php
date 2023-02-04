<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function validate_injection(Request $request)
    {
        $user = User::where('computer_name', $request->computer_name)->first();

        if (!empty($user) && Hash::check($user->hardware_uuid, $request->hardware))
        {
            return response()->json([
                'message' => 'Integration Success',
                'data' => [
                    'token' => $user->createToken('INJECTION')->plainTextToken,
                    'fullname' => $user->fullname,
                    'username' => $user->username,
                    'role' => $user->roles->role
                ]
            ]);
        }

        return response()->json([
            'message' => 'Integration Failed'
        ], 401);
    }
}
