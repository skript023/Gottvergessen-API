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
        $request->validate([
            'role',
        ]);

        $data = $request->only(['role']);

        try 
        {
            role::create($data);
            return redirect()->back();
        } 
        catch (\Throwable $th) 
        {
            return redirect()->back();
        }

        return redirect()->back();
    }

    public function update_role(Request $request)
    {
        $role = role::where('id', $request->id)->first();

        if (empty($role)) return response(404);

        $role->role = $request->role_name;
        $role->save();

        return redirect()->back();
    }

    public function delete_role(Request $request)
    {
        $role = role::where('id', $request->id)->first();

        if (empty($role)) return response(404);

        $role->delete();

        return redirect()->back();
    }
}
