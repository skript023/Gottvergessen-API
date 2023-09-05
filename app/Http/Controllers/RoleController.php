<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\role;

class RoleController extends Controller
{
    public function roles(Request $request)
    {
        $roles = role::sortable()->paginate(5);

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

            $msg = $th->getMessage();

            toastr()->error("Create role failed $msg");

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

        return back();
    }

    public function delete_role(Request $request)
    {
        $role = role::where('id', $request->id)->first();

        try 
        {
            $role->delete();
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            $msg = $th->getMessage();

            toastr()->error("Delete role failed $msg"); 
            
            return back();
        }

        return back();
    }
}
