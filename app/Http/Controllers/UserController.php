<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserController extends Controller
{
    public function dashboard(Request $request)
    {
        if (auth()->user()->role === 'admin')
        {
            return view('dashboard.home', [
                'user_data' => User::all(),
                'username' => auth()->user()->username,
                'role' => auth()->user()->role,
                'status' => auth()->user()->status,
                'created_date' => auth()->user()->user_date,
                'image' => auth()->user()->image,
                'total_user' => User::select('username')->get()->count()
            ]);
        }

        return view('dashboard.home', [
            'user_data' => User::all(),
            'username' => auth()->user()->username,
            'role' => auth()->user()->role,
            'status' => auth()->user()->status,
            'created_date' => auth()->user()->created_date,
            'image' => auth()->user()->image
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
                return redirect()->intended('/dashboard');
            }
        }
        catch (\Throwable $th) 
        {
            dd($th);
            return back()->withErrors([
                'username' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function is_login()
    {
        if (auth()->check())
        {
            return true;
        }
        return false;
    }

    public function is_admin()
    {
        if (auth()->check())
        {
            if (auth()->user()->role === 'admin')
            {
                return true;
            }
        }
        return false;
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
            'password' => 'required'
        ]);

        $data = $request->only([
            'fullname', 
            'username', 
            'email',
            'password'
        ]);

        $data['role'] = 'user';
        $data['status'] = 'active';
        $data['created_date'] = now();
        $data['password'] = Hash::make($data['password']);

        try 
        {
            User::create($data);
            return redirect('/');
        } 
        catch (\Throwable $th) 
        {
            dd($th);
            return redirect()->back();
        }
    }

    public function view_user()
    {
        if ($this->is_login())
        {
            if ($this->is_admin())
            {
                return view('dashboard.users', [
                    'users' => user::all(),
                ]);
            }
        }

        return redirect('/');
    }

    public function delete_user(Request $request)
    {
        $user = user::find($request->delete);
        if ($this->is_login())
        {
            if ($this->is_admin())
            {
                if (isset($user))
                {
                    $user->delete();
                }
                else
                {
                    return '<div class="alert alert-danger" role="alert"> User tidak ditemukan </div>';
                }
            }
        }
        return redirect('/');
    }

    public function update_user(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'email' => 'required:|email:dns', 
            'password' => 'required'
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
            $filename = time() . '.' . $extension;
            $file->storePubliclyAs('uploads/avatar', $filename, "public");

            $data['image'] = $filename;
        }

        $data['password'] = Hash::make($data['password']);

        $user = user::find($request->selected_user);

        if ($this->is_login())
        {
            try
            {
                $user->update($data);
                return redirect('/dashboard/profile');
            }
            catch (\Throwable $th) 
            {
                return '<div class="alert alert-danger" role="alert"> User tidak ditemukan </div>';
            }
        }
    }

    public function profile()
    {
        if ($this->is_login())
        {
            return view('dashboard.profile', [
                'user' => auth()->user()
            ]);
        }
        else
        {
            return '<div class="alert alert-danger" role="alert"> Autentikasi gagal </div>';
        }
    }

    public function banned_user(Request $request)
    {
        $user = User::find($request->selected_user);

        if ($this->is_login())
        {
            if ($this->is_admin())
            {
                $user->delete();
            }
        }
    }

    public function home(Request $request)
    {
        if ($this->is_login())
        {
            return $this->dashboard($request);
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
