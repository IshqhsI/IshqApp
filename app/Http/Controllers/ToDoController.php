<?php

namespace App\Http\Controllers;

use App\Models\ToDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ToDoController extends Controller
{
    public function index()
    {
        $todos = ToDo::where('user_id', Auth::user()->id)->orderBy('priority', 'desc')->latest()->get();
        return view(' productivity.todos', compact('todos'));
    }
}
