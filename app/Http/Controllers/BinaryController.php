<?php

namespace App\Http\Controllers;

use App\Models\binary;
use Illuminate\Http\Request;

class BinaryController extends Controller
{
    public function all_games()
    {
        $binaries = binary::all();
        return response()->json($binaries);
    }

    public function binary(Request $request)
    {
        if (empty($request->name) || !file_exists(public_path('storage/binary/' . $request->name)))
        {
            return response()->json([
                'status' => Jenkins::hash('Request Failed'),
            ], 404);
        }

        return response()->file(public_path('storage/binary/' . $request->name));
    }
    
    public function binary_version(Request $request)
    {
        if (isset($request->name))
        {
            $binary_version = binary::where('game', $request->name)->first();
            
            return response()->json($binary_version);
        }

        return response()->json([
            'id' => 0,
            'game' => '',
            'file' => '',
            'target' => '',
            'version' => '',
            'version_machine' => 0,
            'supported' => 0,
            'valid' => 0
        ], 400);
    }

    public function get_loader_version()
    {
        try 
        {
            return response()->json([
                'file' => 'Gottvergessen Loader',
                'version' => '1.1',
                'version_machine' => 11,
                'supported' => true,
                'valid' => true
            ]);
        } 
        catch (\Throwable $th) 
        {
            return response()->json([
                'file' => 'NONE',
                'version' => 'NONE',
                'version_machine' => 0,
                'supported' => false,
                'valid' => false
            ], 400);
        }
    }

    public function upload_binary(Request $request)
    {
        $request->validate([
            'game' => 'required', 
            'file' => 'required',
            'target' => 'required', 
        ]);

        $data = $request->only([
            'game', 
            'file', 
            'target'
        ]);

        $data['code'] = Jenkins::hash($request->game);
        $data['version'] = '1.0';
        $data['version_machine'] = 10;
        $data['supported'] = true;
        $data['valid'] = true;

        if ($request->hasFile('file'))
        {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName() . '.' . $extension;
            $file->storePubliclyAs('storage/binary/', $filename, "public");

            $data['file'] = $filename;
        }

        try 
        {
            binary::create($data);

            return redirect()->intended('/dashboard/bin');
        } 
        catch (\Throwable $th) 
        {
            return back()->withErrors("Binary Uploader", "Upload Binary Failed");
        }

        return back()->withErrors("Binary Uploader", "Upload Binary Failed");
    }

    public function load_binaries_data(Request $request)
    {
        $binaries = binary::all();

        return view('dashboard.binary', [
            'binaries' => $binaries
        ]);
    }

    public function update_binary(Request $request)
    {
        $request->validate([
            'game' => 'required', 
            'file' => 'required',
            'target' => 'required', 
        ]);

        $data = $request->only([
            'game', 
            'file', 
            'target'
        ]);

        $data['version'] = $request->version;
        $data['version_machine'] = $request->version_machine;
        $data['supported'] = true;
        $data['valid'] = true;

        $binary = binary::where('id', $request->id)->first();
        if (empty($binary)) return response(404);

        if ($request->hasFile('file'))
        {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName() . '.' . $extension;
            $file->storePubliclyAs('storage/binary/', $filename, "public");

            $data['file'] = $filename;
        }

        try 
        {
            $binary->update($data);

            return redirect()->intended('/dashboard/bin');
        } 
        catch (\Throwable $th) 
        {
            return redirect()->intended('/dashboard/profile');
        }
    }
    
    public function delete_binary(Request $request)
    {
        $binary = binary::where('id', $request->id)->first();
        
        if (empty($binary)) return abort(404);

        $binary->delete();

        return redirect()->back();
    }
}
