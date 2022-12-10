<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    public function dashboard(Request $request)
    {
        return view('dashboard.home', [
            'user_data' => User::all(),
            'username' => auth()->user()->username,
            'role' => auth()->user()->roles->role,
            'status' => auth()->user()->status,
            'created_date' => auth()->user()->user_date,
            'image' => auth()->user()->image,
            'total_user' => User::select('username')->get()->count()
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

        $data['ownership'] = $request->ownership;
        $data['role_id'] = $request->role;
        $data['expired'] = now()->addDays($request->access_duration);
        $data['status'] = $request->user_status;
        $data['created_date'] = now();
        $data['recent_login'] = now();
        $data['password'] = Hash::make($data['password']);

        try 
        {
            User::create($data);

            return redirect()->intended();
        } 
        catch (\Throwable $th) 
        {
            return redirect()->back();
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

        $data_user['status'] = 'verified';
        $data_user['created_date'] = now();
        $data_user['recent_login'] = now();
        $data_user['password'] = Hash::make($data_user['password']);

        try 
        {
            User::create($data_user);

            return redirect()->intended();
        } 
        catch (\Throwable $th) 
        {
            //dd($th);
            return redirect()->back()->with("Failed", "Registration Failed");
        }
    }

    public function view_user()
    {
        return view('dashboard.users', [
            'users' => user::all(),
        ]);

        return redirect('/dashboard/profile');
    }

    public function delete_user(Request $request)
    {
        $user = User::find($request->delete);
        if (isset($user))
        {
            $user->delete();
        }
        else
        {
            return back()->with("Failed", "Failed delete user");
        }
        return redirect('/');
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

        $user = user::find($request->selected_user);

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

    public function profile()
    {
        return view('dashboard.profile', [
            'user' => auth()->user()
        ]);
    }

    public function banned_user(Request $request)
    {
        $user = User::find($request->selected_user);

        $user->delete();
    }

    public function home()
    {
        if (auth()->check())
        {
            return back();
        }
        
        return view('login');
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
