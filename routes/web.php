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

Route::get("/stplus", function () {

    $name = "Robert";
//    $tasks = ['Preplanning in de agenda zetten', 'Standup bijwonen', 'Dashboard testen'];

    $tasks = DB::table('tasks')->where('task', 'like', '%laravel%')->get();

//    return $tasks;

    return view('stplus')->with('name', $name)->with('tasks', $tasks);
});


Route::get("/stplus/{task}", function ($id) {

    $task = DB::table('tasks')->find($id);

    return $task->task;

});
