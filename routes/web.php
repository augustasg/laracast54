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
    )->with('age2', '133');
});


Route::get('/tasks', 'TasksController@index');


Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');




Route::get('/blogs', 'BlogController@index');
//Route::get('/blogs/{blog}', 'BlogController@show');
Route::get('/blogs/create', 'BlogController@create');


// controller => PostsController
// Eloquent model => Post
// migration=> create_post_table
