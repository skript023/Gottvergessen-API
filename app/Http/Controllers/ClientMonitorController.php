<?php

namespace App\Http\Controllers;

use App\Models\client_monitor;
use App\Models\User;
use Illuminate\Http\Request;

class ClientMonitorController extends Controller
{
    public function load_logs(Request $request)
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
                "status" => $this->joaat("CLIENT_INFO_RECEIVED"),
                "message" => "Success"
            ]);
        } 
        catch (\Throwable $th)
        {
            return response()->json([
                "status" => $this->joaat("FAILED_RECEIVE_CLIENT_INFO"),
                "message" => "Error : " . $th
            ]);
        }
    }

    public function clean_up()
    {
        $client = client_monitor::all();
        $client->delete();
    }
}
