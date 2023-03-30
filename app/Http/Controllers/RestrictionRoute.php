<?php

namespace App\Http\Controllers;

use App\Models\access_level;
use App\Models\restriction;
use App\Models\role;
use Illuminate\Http\Request;

class RestrictionRoute extends Controller
{
    public function index()
    {
        return view('dashboard.restriction', [
            'restrictions' => restriction::all(),
            'levels' => access_level::all(),
            'roles' => role::all()
        ]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'route' => 'required'
        ]);

        $data = $request->only([
            'route',
            'level',
            'role'
        ]);

        try 
        {
            restriction::create($data);
        } 
        catch (\Throwable $th) 
        {
            return redirect()->back();
        }

        return redirect()->intended('/dashboard/user/restriction');
    }

    public function update(Request $request)
    {
        $request->validate([
            'route' => 'required'
        ]);

        $data = $request->only([
            'route',
            'level',
            'role'
        ]);

        $restriction = restriction::find($request->id);

        try 
        {
            $restriction->update($data);
        } 
        catch (\Throwable $th) 
        {
            return redirect()->back();
        }

        return redirect()->intended('/dashboard/users/restriction');
    }

    public function delete(Request $request)
    {
        $restriction = restriction::find($request->id);

        $restriction->delete();
    }
}
