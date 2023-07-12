<?php

namespace App\Http\Controllers;

use App\Models\wallet;
use Illuminate\Http\Request;

class UserWallets extends Controller
{
    public function index()
    {
        return view('dashboard.user-wallets', [
            'wallets' => wallet::all()
        ]);
    }

    public function create_new_wallet(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'symbol' => 'required'
        ]);

        $data = $request->only([
            'name',
            'symbol'
        ]);

        if (empty($request->currency))
        {
            $data['currency'] = 'IDR';
        }
        else
        {
            $data['currency'] = $request->currency;
        }

        try 
        {
            wallet::create($data);

            return redirect()->intended('/dashboard/wallets');
        } 
        catch (\Throwable $th) 
        {
            return back();
        }
    }
    
    public function update_wallet(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'symbol' => 'required',
            'currency' => 'required'
        ]);

        $data = $request->only([
            'name',
            'symbol',
            'currency'
        ]);

        $wallet = wallet::where('id', $request->id)->first();

        try 
        {
            $wallet->update($data);
        } 
        catch (\Throwable $th) 
        {
            return back();
        }
    }

    public function delete_wallet(Request $request)
    {
        $wallet = wallet::where('id', $request->id)->first();

        $wallet->delete();
    }
}
