<?php

namespace App\Http\Controllers;

use App\Models\access_level;
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

        if (filter_var($request->username, FILTER_VALIDATE_EMAIL))
        {
            $user = user::where('email', $request->username)->first();

            if (empty($user)) 
            toastr()->error('The provided credentials do not match our records.', 'Login Failed');

            $credentials['username'] = $user->username;
        }

        try
        {
            if (auth()->attempt($credentials, $request->remember)) 
            {
                $this->recent_login($request);
                
                $request->session()->regenerate();

                return redirect()->intended('/dashboard/profile');
            }
            else
            {
                toastr()->error('The provided credentials do not match our records.', 'Login Failed');
            }
        }
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            toastr()->error('Login failed, unable connect to server', 'Login Failed');
        }

        return back();
    }

    public function logout(Request $request)
    {
        auth()->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    public function store(Request $request)
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
            ExceptionMessageController::save_error($th);

            toastr()->error('Redigstration Failed');

            return back();
        }

        return redirect()->intended('/dashboard/users');
    }

    public function register(Request $request)
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
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            toastr()->error('Registration Failed');

            return back();
        }

        return redirect()->intended('/');
    }

    public function users()
    {
        return view('dashboard.users', [
            'users' => user::with(['roles', 'ownerships', 'access_level'])->sortable()->paginate(10),
        ]);

        return redirect('/dashboard/profile');
    }

    public function delete(Request $request)
    {
        $user = User::find($request->delete);
        if (isset($user))
        {
            $user->delete();

            return redirect()->intended('/dashboard/users');
        }

        toastr()->error('Failed delete user');

        return back();
    }

    public function search(Request $request)
    {
        if ($request->ajax())
        {
            $result = '';

            $users = User::with(['roles', 'ownerships', 'access_level'])->sortable()->paginate(10);

            if(isset($request->keyword))
            {
                $users = User::with(['roles', 'ownerships', 'access_level'])->
                whereHas('ownerships', function($q) use($request) {
                    $q->where('type','LIKE','%' . $request->keyword . '%');
                })->
                whereHas('roles', function($q) use($request) {
                    $q->where('name','LIKE','%' . $request->keyword . '%');
                })->
                orWhere('fullname','LIKE',"%$request->keyword%")->
                orWhere('email', 'LIKE', "%$request->keyword%")->
                sortable()->
                get();
            }

            if ($users->count() == 0)
            {
                $result .= '<tr>
                                <th>Not Found</th>
                                <td>Not Found</td>
                                <td>Not Found</td>
                                <td>Not Found</td>
                                <td>Not Found</td>
                                <td>Not Found</td>
                                <td>
                                    <span class="badge badge-danger">
                                        <i class="zmdi zmdi-lock"></i>
                                        Not Found
                                    </span>
                                </td>
                            </tr>';
                        
                return response()->json([
                    'message' => $result
                ]);
            }

            foreach ($users as $key => $user) 
            {
                $edit_action = auth()->user()->level <= 4 ? "users?page=edit&user=" . $user->id  : "javascript:void();";
                $disabled = auth()->user()->level > 4 ? "disabled" : "";
                $delete = auth()->user()->level <= 3 ? "#user-delete-" .  $user->id : "javascript:void();";
                $suspend = auth()->user()->level <= 3 ? "#user-suspend-" .  $user->id : "javascript:void();";

                $result .= '
                <tr>
                    <th scope="row">' . ($key + 1) . '</th>
                    <td>' . $user->fullname . '</td>
                    <td>' . $user->email . '</td>
                    <td>' . $user->ownerships->type . '</td>
                    <td>' . $user->computer_name . '</td>
                    <td>' . $user->roles->name . '</td>
                    <td>' . $user->activity  . '</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-light btn-block waves-effect waves-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Action
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right bg-dark-light">
                                <li class="dropdown-divider"></li>
                                <a href="' . $edit_action . '"><li class="dropdown-item' . $disabled . '">Edit User</li></a>
                                <li class="dropdown-divider"></li>
                                <a data-toggle="modal" data-target="' . $delete . '"><li class="dropdown-item ' . $disabled . '">Delete User</li></a>
                                <li class="dropdown-divider"></li>
                                <a data-toggle="modal" data-target="'. $suspend .'"><li class="dropdown-item ' . $disabled . '">Suspend User</li></a>
                            </ul>
                        </div>
                    </td>
                </tr>';
            }

            return response()->json([
                'message' => $result
            ]);
        }

        return response()->json([
            'message' => 'unknown'
        ]);
    }

    public function update(Request $request)
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
            ExceptionMessageController::save_error($th);

            toastr()->error('Failed update profile');

            return back();
        }

        return redirect()->intended('/dashboard/profile');
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
        }
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            toastr()->error('Failed update profile');

            return back();
        }

        return redirect()->intended('/dashboard/profile');
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
        }
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);
            
            toastr()->error('Failed update password');

            return back();
        }

        return redirect()->intended('/dashboard/profile');
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
            return view('logged-in', [
                'user' => auth()->user()
            ]);
        }
        
        return view('login');
    }

    public function recent_login(Request $request)
    {
        $data = $request->only(['username']);
        if (filter_var($request->username, FILTER_VALIDATE_EMAIL))
        {
            $user = User::where('email', $request->username)->first();
            $data['username'] = $user->username;
        }

        $user = User::where('username', $data['username'])->first();
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
