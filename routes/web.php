<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    $name = 'vardas';
    $age = 31;
    //$tasks = ['t1', 't2', 't3'];

    $tasks = DB::table('tasks')->get();
    return view('welcome',
        compact('name', 'age', 'tasks')
    )->with('age2', '13');
});



Route::get('/tasks', function () {


    //$tasks = DB::table('tasks')->get();
    $tasks = App\Task::all();

    return view('tasks.index', compact('tasks'));
});



Route::get('/tasks/{id}', function ($id) {


    //$task = DB::table('tasks')->find($id);
    $task = App\Task::find($id);


    return view('tasks.show', compact('task'));
});
