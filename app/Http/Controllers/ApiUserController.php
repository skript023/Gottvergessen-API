<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\SanctumServiceProvider;

class ApiUserController extends Controller
{
    private function UInt32($num)
    {
        return $num & 0xFFFFFFFF;
    }

    private function Int32($num)
    {
        $n = $num & 0xFFFFFFFF;
        return 0 != ($n & 0x80000000) ? $n - 0x100000000 : $n;
    }

    private function tolower($c)
    {
        return ($c >= ord('A') and $c <= ord('Z')) ? $c + (ord('a') - ord('A')) : $c;
    }

    private function joaat($name)
    {
        $hash = 0;
        foreach(str_split($name) as $letter)
        {
            $hash += $this->tolower(ord($letter));
            $hash = $this->UInt32($hash);
            $hash += $hash << 10;
            $hash ^= $this->UInt32($hash) >> 6;
        }

        $hash += $hash << 3;
        $hash ^= $this->UInt32($hash) >> 11;
        $hash += $hash << 15;
        $hash = $this->UInt32($hash);

        return $hash;
    }

    private function get_binary($ownership)
    {
        switch($ownership)
        {
            case 0:
                return route('/');
            case 1:
                return route('/');
            case 2:
                return route('/');
            case 3:
            case 4:
                return asset('gottvergessen/Gottvergesensense.vpack');
        }

        return route('/');
    }

    public function costumes(Request $request)
    {
        if (empty($request->name))
        {
            $user = User::where('username', $request->username)->first();

            $token = $user->createToken("API TOKEN");
            return response()->json([
                'status' => $this->joaat('Request Failed')
            ], 400);
        }
        return response()->file(public_path('storage/costume/' . $request->name . '.json'));
    }

    public function binary_version(Request $request)
    {
        if (auth()->check())
        {
            $user = User::where('username', $request->username)->first();

            $token = $user->createToken("API TOKEN");
            $name = $request->binary_name;
            switch ($name)
            {
                case 'gottvergessen':
                    return response()->json([
                        'file' => 'Gottvergessen',
                        'version' => '1.1',
                        'version_machine' => 11,
                        'supported' => true,
                        'valid' => true,
                        'token' => $token->plainTextToken
                    ]);
                case 'ellohim':
                    return response()->json([
                        'file' => 'Ellohim',
                        'version' => '2.1',
                        'version_machine' => 21,
                        'supported' => false,
                        'valid' => false
                    ]);
            }
        }
        return response()->json([
            'file' => 'NONE',
            'version' => 'NONE',
            'version_machine' => null,
            'supported' => null,
            'valid' => null
        ], 401);
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        $credentials = $request->only(['username', 'password']);
        
        try
        {
            if (Auth::attempt($credentials)) 
            {
                

                $fullname = auth()->user()->fullname;
                $ownership = auth()->user()->ownership;
                $expiry_date = auth()->user()->expired;
                $binary = $this->get_binary($ownership);

                $user = User::where('username', $request->username)->first();

                $token = $user->createToken("API TOKEN");
                $access_token = $token->accessToken;

                return response()->json([
                    "status" => $this->joaat("Success"),
                    "token" => $token->plainTextToken,
                    "binary" => $binary,
                    "fullname" => $fullname,
                    "ownership" => $ownership,
                    "expired_date" => $expiry_date
                ]);
            }
            else
            {
                return response()->json([
                    "status" => ('Failed')
                ], 401);
            }
        }
        catch (\Throwable $th) 
        {
            return response()->json([
                "status" => ('Exception')
            ], 401);
        }
    }
}
