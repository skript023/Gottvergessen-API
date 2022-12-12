<?php

namespace App\Http\Controllers;

use App\Models\ownership;
use App\Models\User;
use Illuminate\Http\Request;

class OwnershipController extends Controller
{
    public function update_ownership(Request $request)
    {
        $owner = User::find(auth()->user()->id);

        $owner->ownership_id = $request->ownership;

        try 
        {
            $owner->save();

            return redirect()->intended('/dashboard/profile');
        } 
        catch (\Throwable $th) 
        {
            return back()->withErrors('Ownership', 'Failed update ownerships');
        }
    }

    public function add_new_ownership(Request $request)
    {
        $request->validate(["ownership:required"]);
        $data = $request->only(["ownership"]);

        try 
        {
            ownership::create($data);

            return redirect()->intended('/dashboard');
        } 
        catch (\Throwable $th) 
        {
            return back()->withErrors('Ownership', 'Failed add ownerships');
        }
    }
}
