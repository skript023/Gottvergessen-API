<?php

namespace App\Http\Controllers;

use App\Models\client_monitor;
use App\Models\User;
use Illuminate\Http\Request;

class ClientMonitorController extends Controller
{
    public function load_logs()
    {
        $log = client_monitor::all();

        return view('dashboard.logger', [
            'logs' => $log
        ]);
    }

    public function receive_log(Request $request)
    {
        $data['prefix'] = $request->prefix;
        $data['message'] = $request->message;
        $data['owner'] = $request->owner;
        $data['file'] = $request->file;
        $data['line'] = $request->line;

        $user = User::where('fullname', $request->owner)->first();
        if (isset($user)) $data["owner_id"] = $user->id;

        try 
        {
            client_monitor::create($data);

            return response()->json([
                "status" => Jenkins::hash("CLIENT_INFO_RECEIVED"),
                "message" => "Success"
            ]);
        } 
        catch (\Throwable $th)
        {
            return response()->json([
                "status" => Jenkins::hash("FAILED_RECEIVE_CLIENT_INFO"),
                "message" => "Error : " . $th->getMessage()
            ]);
        }
    }

    public function delete_log(Request $request)
    {
        $log = client_monitor::where('id', $request->id)->first();

        if (!$log) 
        {
            toastr()->error('Data not found'); 
            
            return back();
        }
        
        $log->delete();

        return redirect()->intended('/dashboard/logging');
    }

    public function clean_up()
    {
        $client = client_monitor::all();
        
        $client->delete();
    }
}
