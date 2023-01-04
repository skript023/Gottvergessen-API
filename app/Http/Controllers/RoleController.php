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
}
