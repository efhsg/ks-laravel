<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $name = "Robert";
        $tasks = Task::incomplete()->where('desc', 'like', '%dashboard%')->get();

        return view('tasks.index', compact('name', 'tasks'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        dd($task->toArray());
    }
}
