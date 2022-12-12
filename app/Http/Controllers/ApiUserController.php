<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Laravel\Sanctum\SanctumServiceProvider;

class ApiUserController extends Controller
{
    public function costumes(Request $request)
    {
        if (empty($request->name))
        {
            return response()->json([
                'status' => $this->joaat('Request Failed')
            ], 400);
        }

        return response()->file(public_path('storage/costume/' . $request->name . '.json'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        $credentials = $request->only(['username', 'password']);
        
        $user = User::where('username', $request->username)->first();
        $hardware_uuid = Hash::make($request->hardware_uuid);

        try
        {
            if (Auth::attempt($credentials)) 
            {
                if (!Hash::check($user->hardware_uuid, $hardware_uuid) || empty($user->hardware_uuid))
                {
                    $user->hardware_uuid = $hardware_uuid;
                    $user->computer_name = $request->computer_name;
                    $user->save();
                }

                $fullname = auth()->user()->fullname;
                $ownership = auth()->user()->ownerships->id;
                $expiry_date = auth()->user()->expired;
                $role = auth()->user()->roles->role;

                $token = $user->createToken(auth()->user()->fullname);
                //$access_token = $token->accessToken;

                return response()->json([
                    "status" => $this->joaat("AUTH_SUCCESS"),
                    "message" => 'Login Success',
                    "token" => $token->plainTextToken,
                    "fullname" => $fullname,
                    "role" => $role,
                    "ownership" => $ownership,
                    "expired_date" => $expiry_date
                ]);
            }
            else
            {
                return response()->json([
                    "status" => $this->joaat('AUTH_FAILED'),
                    "message" => 'Login Failed',
                    "token" => "",
                    "fullname" => "",
                    "role" => "",
                    "ownership" => 0,
                    "expired_date" => ""
                ], 401);
            }
        }
        catch (\Throwable $th) 
        {
            return response()->json([
                "status" => $this->joaat('BAD_REQUEST'),
                "message" => 'Error : ' . $th,
                "token" => "",
                "fullname" => "",
                "role" => "",
                "ownership" => 0,
                "expired_date" => ""
            ], 401);
        }
    }

    public function logout(Request $request)
    {
        $user = User::where('username', auth()->user()->username)->first();
        $user->hardware_uuid = null;
        $user->save();

        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'status' => $this->joaat('LOGOUT_SUCCESS'),
            'message' => 'Logout Success'
        ]);
    }
}
