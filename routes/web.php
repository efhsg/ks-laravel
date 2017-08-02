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


Route::get('/', function () {
    return view('welcome');
});


Route::get("/tasks", 'TasksController@index');

/*Route::get("/tasks", function () {

    $name = "Robert";
//    $tasks = ['Preplanning in de agenda zetten', 'Standup bijwonen', 'Dashboard testen'];

//    $tasks = DB::table('tasks')->get();

    $tasks = App\Task::all();

//    return $tasks;



    return view('tasks.index')->with('name', $name)->with('tasks', $tasks);
});*/


Route::get("/tasks/{task}", 'TasksController@show');

//Route::get("/tasks/{task}", function ($id) {
//
//    $task = DB::table('tasks')->find($id);
//
//    dd($task);
//
//});
