<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Task;

class TaskController extends Controller
{

    public function index()
    {
        $tasks = Task::all();
        return view('task.index')->with(['tasks' => $tasks]);
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request) {
       
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Name is required',
        ]);

        $input = $request->all();
        var_dump($input);
        $user = Task::create($input);
        return redirect('task/index');
    }
}
