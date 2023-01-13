<?php

namespace App\Http\Controllers;

use App\Models\ownership;
use App\Models\User;
use Illuminate\Http\Request;

class OwnershipController extends Controller
{
    public function load_ownerships(Request $request)
    {
        $ownerships = ownership::all();

        return view('dashboard.ownerships', [
            'ownerships' => $ownerships
        ]);
    }

    public function update_ownership(Request $request)
    {
        $product = ownership::find($request->id);

        $product->ownership = $request->ownership;

        try 
        {
            $product->save();
            return redirect()->intended('/dashboard/users');
        } 
        catch (\Throwable $th) 
        {
            return back()->withErrors('Update Error', 'Failed Update Ownerships');
        }
    }

    public function update_user_ownership(Request $request)
    {
        $owner = User::find($request->owner);

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
