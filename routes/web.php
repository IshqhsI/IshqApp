<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/skills', function () {
    return view('skills');
})->name('skills');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/productivity', function () {
    return view('productivity');
})->name('productivity');


Route::get('/productivity/todos', function () {
    return view('productivity.todos');
})->name('todos');

Route::get('/productivity/schedules', function () {
    return view('productivity.schedules');
})->name('schedules');

Route::get('/productivity/notes', [NoteController::class, 'index'])->name('notes')->middleware('auth');
Route::post('/productivity/notes', [NoteController::class, 'store'])->name('notes.store')->middleware('auth');
Route::put('/productivity/notes', [NoteController::class, 'update'])->name('notes.update')->middleware('auth');
Route::delete('/productivity/notes/{note}', [NoteController::class, 'destroy'])->name('notes.destroy')->middleware('auth');





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
