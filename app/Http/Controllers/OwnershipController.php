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
            'ownerships' => $ownerships,
            'popup_header' => 'Are you sure want to delete the ownership?',
            'popup_message' => 'Ownership will not be able to restored after deletion',
            'popup_action' => '/dashboard/ownership/delete/{{$ownership->id}}'
        ]);
    }
    
    public function delete_ownership(Request $request)
    {
        $product = ownership::find($request->id);

        try 
        {
            $product->delete();
            return back()->with('header', 'Ownership Removal')->with('message', 'Ownership removed successfully')->with('error_code', 0);
        } 
        catch (\Throwable $th) 
        {
            return back()->with('header', 'Ownership Removal')->with('message', 'Ownership removal failed, must be contain valid data')->with('error_code', Jenkins::hash('DELETE_ERROR'));
        }
    }

    public function update_ownership(Request $request)
    {
        $product = ownership::find($request->id);

        $product->type = $request->ownership;

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
