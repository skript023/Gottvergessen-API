<?php

namespace App\Http\Controllers;

use App\Models\balance;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiUserController extends Controller
{
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
                }

                $user->recent_login = now();
                $user->activity = 'Online [Launcher]';
                $user->save();

                $fullname = auth()->user()->fullname;
                $ownership = auth()->user()->ownerships->id;
                $expiry_date = auth()->user()->expired;
                $role = auth()->user()->roles->name;

                $token = $user->createToken(auth()->user()->fullname);
                //$access_token = $token->accessToken;

                return response()->json([
                    "status" => Jenkins::hash("AUTH_SUCCESS"),
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
                    "status" => Jenkins::hash('AUTH_FAILED'),
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
                "status" => Jenkins::hash('BAD_REQUEST'),
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
            'status' => Jenkins::hash('LOGOUT_SUCCESS'),
            'message' => 'Logout Success'
        ]);
    }

    public function create_user(Request $request)
    {
        $request->validate([
            'fullname' => 'required', 
            'username' => 'required',
            'email' => 'required:|email:dns', 
            'password' => 'required|confirmed|min:6'
        ]);

        $data = $request->only([
            'fullname', 
            'username', 
            'email',
            'password'
        ]);

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = auth()->user()->fullname . '.' . $extension;
            $file->storePubliclyAs('uploads/avatar', $filename, "public");

            $data['image'] = $filename;
        }

        $data['ownership_id'] = $request->ownership;
        $data['role_id'] = $request->role;
        $data['expired'] = now()->addDays($request->access);

        $data['status'] = $request->status;
        $data['email_verified_at'] = now();
        $data['created_date'] = now();
        $data['recent_login'] = now();
        $data['activity'] = 'Online';
        $data['password'] = Hash::make($data['password']);
        $account = [
            'user_id' => 0,
            'wallet_id' => 0,
            'amount' => 0
        ];

        $wallets = wallet::all();

        try 
        {
            $user = User::create($data);

            $account['user_id'] = $user->id;
            foreach ($wallets as $wallet)
            {
                $account['wallet_id'] = $wallet->id;
                balance::create($account);
            }
        } 
        catch (\Throwable $th) 
        {
            return response()->json([
                'message' => 'User failed created'
            ]);
        }

        return response()->json([
            'message' => 'User successfully created'
        ]);
    }

    public function update_user(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'email' => 'required:|email:dns', 
            'password' => 'required|confirmed|min:6'
        ]);

        $data = $request->only([
            'fullname', 
            'username', 
            'email',
            'password'
        ]);

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = auth()->user()->fullname . '.' . $extension;
            $file->storePubliclyAs('uploads/avatar', $filename, "public");

            $data['image'] = $filename;
        }

        $data['password'] = Hash::make($data['password']);

        $user = user::find($request->id);

        try
        {
            $user->update($data);
        }
        catch (\Throwable $th) 
        {
            return response()->json([
                'message' => 'User information failed updated'
            ]);
        }

        return response()->json([
            'message' => 'User information successfully updated'
        ]);
    }

    public function delete_user(Request $request)
    {
        $user = User::find($request->delete);
        if (isset($user))
        {
            $user->delete();
            
            return response()->json([
                'message' => 'User deleted successfully'
            ]);
        }

        return response()->json([
            'message' => 'Failed delete user'
        ]);
    }
}
