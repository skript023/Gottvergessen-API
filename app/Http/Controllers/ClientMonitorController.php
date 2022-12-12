<?php

namespace App\Http\Controllers;

use App\Models\client_monitor;
use Illuminate\Http\Request;

class ClientMonitorController extends Controller
{
    public function save_client_information(Request $request)
    {
        $data["prefix"] = $request->prefix;
        $data["message"] = $request->message;

        try 
        {
            client_monitor::create($data);

            return response()->json([
                "status" => $this->joaat("LOG_SUCCESS"),
                "message" => "Success"
            ]);
        } 
        catch (\Throwable $th)
        {
            return response()->json([
                "status" => $this->joaat("LOG_FAILED"),
                "message" => "Error : " . $th
            ]);
        }
    }
}
