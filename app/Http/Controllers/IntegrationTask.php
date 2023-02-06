<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class IntegrationTask extends Controller
{
    public function update_login_time(Request $request)
    {
        $user = User::where('computer_name', $request->computer)->first();
        
        if (isset($user) && Hash::check($user->hardware_uuid, Hash::make($request->hardware)))
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
        $hashed_hardware = Hash::make($request->hardware);
        $user = User::where('computer_name', $request->computer_name)->first();

        if (!empty($user) && Hash::check($user->hardware_uuid, $hashed_hardware))
        {
            return response()->json([
                'message' => 'Integration Success',
                'data' => [
                    'token' => $user->createToken('Injection validated by '.$user->fullname)->plainTextToken,
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

    public function signature(Request $request)
    {
        $filename = strtolower($request->game);
        if (empty($request->game) || !file_exists(public_path('storage/signatures/' . $filename . '.json')))
        {
            return response()->json([
                'message' => 'INVALID_PARAMS',
                'status' => Jenkins::hash('Request Failed'),
            ], 400);
        }

        $json = file_get_contents(public_path('storage/signatures/' . $filename . '.json'));
        $json = json_decode($json);

        if (empty($json)) return response()->json([
            'message' => 'Signature not found', 
            'status' => Jenkins::hash('SIG_NOT_FOUND'),
            'signatures' => null
        ], 404);

        return response()->json([
            'message' => "Signature found.",
            'status' => Jenkins::hash('SIG_FOUND'),
            'signatures' => $json
        ]);
    }
}
