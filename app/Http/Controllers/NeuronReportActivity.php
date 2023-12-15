<?php

namespace App\Http\Controllers;

use App\Exports\KegiatanNeuron;
use App\Models\activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NeuronReportActivity extends Controller
{
    public function index()
    {
        $activities = activity::where('user_id', auth()->user()->id)->get();

        return view('dashboard.activities', [
            'activities' => $activities
        ]);
    }

    public function create_activity(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $data = $request->only([
            'name'
        ]);

        $data['start_date'] = now();
        $data['status'] = 'On Progress';

        try 
        {
            activity::create($data);
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            $msg = $th->getMessage();

            toastr()->error("Failed update activity, error $msg");

            return back();
        }

        return redirect()->intended('/dashboard/users/activity');
    }

    public function close_activity(Request $request)
    {
        $activity = activity::where('id', $request->id)->where('user_id', auth()->user()->id)->first();

        try 
        {
            $activity->status = 'Completed';
            $activity->end_date = now();

            $activity->save();
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            $msg = $th->getMessage();

            toastr()->error("Failed update activity, error $msg");

            return back();
        }

        return redirect()->intended('/dashboard/users/activity');
    }

    public function update_activity(Request $request)
    {
        $activity = activity::where('id', $request->id)->where('user_id', auth()->user()->id)->first();

        $request->validate([
            'name' => 'required'
        ]);

        $data = $request->only([
            'name',
            'status',
            'start_date',
            'end_date'
        ]);

        try 
        {
            $activity->update($data);
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);

            $msg = $th->getMessage();

            toastr()->error("Failed update activity, error $msg");

            return back();
        }

        return redirect()->intended('/dashboard/users/activity');
    }
    
    public function delete_activity(Request $request)
    {
        $activity = activity::where('id', $request->id)->where('user_id', auth()->user()->id)->first();

        if (empty($activity)) toastr()->error("Failed delete activity, activity not found."); return back();

        try 
        {
            $activity->delete();
        } 
        catch (\Throwable $th) 
        {
            ExceptionMessageController::save_error($th);
            
            $msg = $th->getMessage();

            toastr()->error("Failed delete activity, error $msg");
            
            return redirect('/dashboard');
        }

        return redirect()->intended('/dashboard/users/activity');
    }

    public function all_activity()
    {
        return response()->json([
            'message' => 'success',
            'activities' => activity::all()
        ]);
    }

    public function migrate_to_mongodb()
    {
        $activities = activity::all();

        foreach ($activities as $key => $activity) 
        {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Authorization' => 'Basic R290dHZlcmdlc3Nlbg=='
            ])->post('https://crm-backend.glitch.me/activity/migration', [
                "user_id" => '64fe6514ea1592bac652f126',
                "name" => $activity->name,
                "start_date" => $activity->start_date,
                "end_date" => $activity->end_date,
                "status" => $activity->status
            ]);

            if ($response->successful())
            {
                toastr()->success("success migrate $activity->name");
            }
            else
            {
                $status = $response->status();
                $body = $response->body();

                toastr()->error("Failed migrate status : $status code : $body");
            }
        }
    }

    public function export()
    {
        return new KegiatanNeuron;
    }
}
