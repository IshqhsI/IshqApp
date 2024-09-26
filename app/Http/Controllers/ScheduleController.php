<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::where('user_id', Auth::user()->id)->latest()->get();
        return view('productivity.schedules', compact('schedules'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'description' => 'required',
            'start_time' => 'required'
        ]);

        Schedule::create([
            'title' => $request->title,
            'type' => $request->type,
            'description' => $request->description,
            'start_time' => $request->start_time,
            'end_time' => ($request->end_time) ? $request->end_time : null,
            'is_all_day' => ($request->is_all_day == 'on') ? true : false,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/productivity/schedules')->with('success', 'Schedule created successfully.');
    }

    public function destroy(Schedule $schedule){
        $schedule->delete();
        return back();
    }
}
