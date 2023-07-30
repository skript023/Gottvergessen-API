<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\role;

class RoleController extends Controller
{
    public function roles(Request $request)
    {
        $roles = role::all();

        return view('dashboard.role', [
            'roles' => $roles
        ]);
    }

    public function create_role(Request $request)
    {
        $request->validate(['role']);

        $data = $request->only(['role']);

        try 
        {
            role::create($data);
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            toastr()->error('Role creation failed.');

            return redirect()->back();
        }

        return redirect()->intended('/dashboard/role');
    }

    public function update_role(Request $request)
    {
        $role = role::where('id', $request->id)->first();

        $role->role = $request->role_name;
        
        try 
        {
            $role->save();
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            $msg = $th->getMessage();

            toastr()->error("Update role failed $msg"); 
            
            return back();
        }

        return redirect()->back();
    }

    public function delete_role(Request $request)
    {
        $role = role::where('id', $request->id)->first();

        if (is_null($role)) toastr()->error('Role not found'); return back();

        $role->delete();

        return redirect()->back();
    }
}
