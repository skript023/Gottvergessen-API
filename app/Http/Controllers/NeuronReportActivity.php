<?php

namespace App\Http\Controllers;

use App\Exports\KegiatanNeuron;
use App\Models\activity;
use Illuminate\Http\Request;

class NeuronReportActivity extends Controller
{
    public function index()
    {
        $activities = activity::all();

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
            return back();
        }

        return redirect()->intended('/dashboard/users/activity');
    }

    public function close_activity(Request $request)
    {
        $activity = activity::where('id', $request->id)->first();

        $activity->status = 'Completed';
        $activity->end_date = now();

        $activity->save();

        return redirect()->intended('/dashboard/users/activity');
    }

    public function update_activity(Request $request)
    {
        $activity = activity::where('id', $request->id)->first();

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
            return back();
        }

        return redirect()->intended('/dashboard/users/activity');
    }

    public function export()
    {
        return new KegiatanNeuron;
    }
}
