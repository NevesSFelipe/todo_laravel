<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('todo.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $tasks = Task::create([
            'description' => $request->description
        ]);

        return redirect('/');
    }

    public function update(Request $request)
    {
        $tasks = Task::find($request->id);
        $tasks->situation = $request->situation;
        $tasks->save();

        return redirect('/');
    }


}
