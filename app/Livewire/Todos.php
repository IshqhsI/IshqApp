<?php

namespace App\Livewire;

use App\Models\ToDo;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Todos extends Component
{
    public function render()
    {
        $todos = ToDo::where('user_id', Auth::user()->id)->orderBy('priority', 'desc')->orderBy('status', 'asc')->orderBy('due_date', 'asc')->get();
        return view('livewire.todos', compact('todos'));
    }

    public function updateTodoStatus($id)
    {
        $todo = ToDo::find($id);
        $todo->status = $todo->status === 'completed' ? 'pending' : 'completed';
        $todo->save();
    }
}
