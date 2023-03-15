<?php

namespace App\Http\Controllers;

use App\Models\balance;
use App\Models\ownership;
use App\Models\role;
use App\Models\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\wallet;

class UserController extends Controller
{
    public function dashboard()
    {
        $transaction = transaction::where('user_id', auth()->user()->id);
        $balance = balance::where('user_id', auth()->user()->id)->first();
        
        return view('dashboard.home', [
            'user_data' => User::all(),
            'username' => auth()->user()->username,
            'role' => auth()->user()->roles->role,
            'status' => auth()->user()->status,
            'created_date' => auth()->user()->user_date,
            'image' => auth()->user()->image,
            'total_user' => User::select('username')->get()->count(),
            'total_expenditure' => $transaction->sum('expenditure'),
            'total_income' => $transaction->sum('income'),
            'transaction' => $transaction,
            'balance' => $balance
        ]);
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
            if (auth()->attempt($credentials, $request->remember)) 
            {
                $this->recent_login($request);
                $request->session()->regenerate();
                return redirect()->intended('/dashboard/profile');
            }
        }
        catch (\Throwable $th) 
        {
            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ]);
        }

        return redirect()->back();
    }

    public function logout(Request $request)
    {
        auth()->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    public function add_user(Request $request)
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

            return redirect()->intended('/dashboard/users');
        } 
        catch (\Throwable $th) 
        {
            return back()->withErrors("Registration", "Redigstration Failed");
        }
    }

    public function user_registration(Request $request)
    {
        $request->validate([
            'fullname' => 'required', 
            'username' => 'required',
            'email' => 'required:|email:dns', 
            'password' => 'required|confirmed|min:6'
        ]);

        $data_user = $request->only([
            'fullname', 
            'username', 
            'email',
            'password'
        ]);

        $data_user['ownership_id'] = ownership::where('type', 'BASIC VERSION')->first()->id;
        $data_user['role_id'] = role::where('name', 'user')->first()->id;
        $data_user['activity'] = 'Just Registered';
        $data_user['status'] = 'verified';
        $data_user['email_verified_at'] = now();
        $data_user['recent_login'] = now();
        $data_user['password'] = Hash::make($data_user['password']);

        $account = [
            'user_id' => 0,
            'wallet_id' => 0,
            'amount' => 0
        ];

        $wallets = wallet::all();

        try 
        {
            $user = User::create($data_user);

            $account['user_id'] = $user->id;
            foreach ($wallets as $wallet)
            {
                $account['wallet_id'] = $wallet->id;
                balance::create($account);
            }

            return redirect()->intended();
        } 
        catch (\Throwable $th) 
        {
            dd($th);
            return back()->withErrors("Registration", "Registration Failed");
        }
    }

    public function view_user()
    {
        return view('dashboard.users', [
            'users' => user::all(),
            'ownerships' => ownership::all(),
            'roles' => role::all()
        ]);

        return redirect('/dashboard/profile');
    }

    public function delete_user(Request $request)
    {
        $user = User::find($request->delete);
        if (isset($user))
        {
            $user->delete();
            return redirect()->intended('/dashboard/users');
        }

        return back()->with("Failed", "Failed delete user");
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
            return redirect('/dashboard/profile');
        }
        catch (\Throwable $th) 
        {
            return back()->with("Failed", "Failed update profile");
        }
    }

    public function update_profile(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required:|email:dns', 
            'username' => 'required'
        ]);

        $data = $request->only([
            'fullname',
            'email',
            'username'
        ]);

        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = auth()->user()->fullname . '.' . $extension;
            $file->storePubliclyAs('uploads/avatar', $filename, "public");

            $data['image'] = $filename;
        }

        $user = user::find($request->selected_user);

        try
        {
            $user->update($data);
            return redirect()->intended('/dashboard/profile');
        }
        catch (\Throwable $th) 
        {
            return back()->with("Failed", "Failed update profile");
        }
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'password' => 'required|confirmed|min:6'
        ]);

        $data = $request->only([
            'password'
        ]);

        $user = user::find($request->selected_user);
        $data['password'] = Hash::make($data['password']);

        try
        {
            $user->update($data);
            return redirect()->intended('/dashboard/profile');
        }
        catch (\Throwable $th) 
        {
            return back()->with("Failed", "Failed update password");
        }
    }

    public function profile()
    {
        return view('dashboard.profile', [
            'user' => auth()->user()
        ]);
    }

    public function banned_user(Request $request)
    {
        $user = User::find($request->id);

        $user->status = 'suspended';

        $user->save();

        return redirect()->intended('/dashboard/users');
    }

    public function home()
    {
        if (auth()->check())
        {
            return back();
        }
        
        return view('login');
    }

    public function recent_login(Request $request)
    {
        $user = User::where('username', $request->username)->first();
        $user->recent_login = now();
        $user->save();
    }

    public function upload_old(Request $request)
    {
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/avatar/', $filename);

        $data['image'] = $filename;
    }
}
