<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Task;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        $tasks = Task::all();
        // dd($todos);
        return view('todo.index', [
            'todos' => $todos,
            'tasks' => $tasks
        ]);
    }
    public function update(Request $request)
    {
        //$todo = new Todo();
        //$todo->title = $request->title;
	//$todo->save();
        $validated = $request->validate([
            'title' => 'required|min:3'
        ]);
        $todo = Todo::create($validated);
        return redirect('todo');
    }
    public function remove(Request $request, Task $tasks)
    {
        $tasks->delete();
        return redirect('todo');
    }
}
