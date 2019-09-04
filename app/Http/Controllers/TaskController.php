<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks');
    }
    public function add(Request $request) {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'description' => 'required'
        ]);

/*        if ($validated->first('name')->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validated);
        }
        if ($validated->name->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validated->name);
        }*/

        $task = new Task;
        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();
        //return $validated;
        return redirect('/todo');
    }
    public function remove(Request $request, Task $tasks)
    {
        $tasks->delete();
        return redirect('/todo');
        //$tasks->delete();
        //return redirect('/todo');
    }
}
