<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{


    public function index()
    {

        $tasks = Task::all();

        //dd($tasks);
        return view('tasks.index', compact('tasks'));
    }


    public function show($id)
    {


        $task = Task::find($id);


        return view('tasks.show', compact('task'));
    }
}
