<?php

namespace App\Http\Controllers;

use App\Models\ownership;
use App\Models\User;
use Illuminate\Http\Request;

class OwnershipController extends Controller
{
    public function load_ownerships(Request $request)
    {
        $ownerships = ownership::sortable()->paginate(5);

        return view('dashboard.ownerships', compact('ownerships')); 
    }
    
    public function delete_ownership(Request $request)
    {
        $product = ownership::find($request->id);

        try 
        {
            $product->delete();
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            toastr()->error("Delete ownership failed, request contain invalid data");

            return back()->with('header', 'Ownership Removal')->with('message', 'Ownership removal failed, must be contain valid data')->with('error_code', Jenkins::hash('DELETE_ERROR'));
        }

        return back()->with('header', 'Ownership Removal')->with('message', 'Ownership removed successfully')->with('error_code', 0);
    }

    public function update_ownership(Request $request)
    {
        $product = ownership::find($request->id);

        $product->type = $request->ownership;

        try 
        {
            $product->save();
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            $msg = $th->getMessage();

            toastr()->error("Ownership update failed error $msg");

            return back()->withErrors('Update Error', 'Failed Update Ownerships');
        }
        
        return redirect()->intended('/dashboard/users');
    }

    public function update_user_ownership(Request $request)
    {
        $owner = User::find($request->owner);

        $owner->ownership_id = $request->ownership;

        try 
        {
            $owner->save();
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            $msg = $th->getMessage();

            toastr()->error("Ownership update failed error $msg");

            return back()->withErrors('Ownership', 'Failed update ownerships');
        }

        return redirect()->intended('/dashboard/profile');
    }

    public function add_new_ownership(Request $request)
    {
        $request->validate(["ownership:required"]);
        
        $data = $request->only(["ownership"]);

        try 
        {
            ownership::create($data);
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            $msg = $th->getMessage();

            toastr()->error("Failed add ownerships $msg");
        
            return back();
        }

        return redirect()->intended('/dashboard');
    }
}
