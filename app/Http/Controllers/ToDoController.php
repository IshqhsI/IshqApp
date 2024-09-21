<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ToDoController extends Controller
{
    public function index()
    {
        $todos = ToDo::where('user_id', Auth::user()->id)->orderBy('priority', 'desc')->orderBy('status', 'asc')->orderBy('due_date', 'asc')->get();
        return view(' productivity.todos', compact('todos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'priority' => 'required',
            'due_date' => 'required | after_or_equal:' . date('Y-m-d'),
        ]);

        $description = $request->description ? $request->description : null;
        $due_date = $request->due_date;

        if ($due_date < date('Y-m-d')) {
            $due_date = date('Y-m-d');
        }

        ToDo::create([
            'title' => $request->title,
            'description' => $description,
            'priority' => $request->priority,
            'due_date' => $due_date,
            'user_id' => Auth::user()->id
        ]);

        return back();
    }


    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'priority' => 'required',
            'due_date' => 'required | after_or_equal:' . date('Y-m-d'),
        ]);

        $description = $request->description ? $request->description : null;
        $due_date = $request->due_date;

        if ($due_date < date('Y-m-d')) {
            $due_date = date('Y-m-d');
        }

        ToDo::where('id', $request->id)->update([
            'title' => $request->title,
            'description' => $description,
            'priority' => $request->priority,
            'due_date' => $due_date
        ]);

        return back();
    }

    public function destroy(ToDo $todo)
    {
        $todo->delete();
        return back();
    }
}
