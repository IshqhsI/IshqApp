<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::where('user_id', Auth::user()->id)->latest()->get();
        return view('productivity.notes', compact('notes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        $note = new Note();
        $note->title = $request->input('title');
        $note->content = $request->input('content');
        $note->user_id = Auth::user()->id;
        $note->save();

        return redirect()->route('notes')->with('success', 'Note created successfully.');
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        if (!$request->id || !Note::find($request->id)->where('user_id', Auth::user()->id)->exists()) {
            return redirect()->route('notes');
        }

        $note = Note::find($request->id);
        $note->title = $request->input('title');
        $note->content = $request->input('content');
        $note->save();

        return redirect()->route('notes');
    }

    public function destroy(Note $note)
    {
        $note->delete();
        return redirect()->route('notes');
    }
}
