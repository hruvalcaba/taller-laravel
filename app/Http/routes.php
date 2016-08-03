<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('about', function () {
    return view('todos.about');
});

/* ------- TODOS ------------------*/

Route::get('/', 'TodosController@index');

/* ------- TODO ------------------*/
Route::get('todo/create', 'TodoController@create')->where('id', '[0-9]+');

Route::get('todo/{slug}', 'TodoController@mostrar')->where('slug', '[a-zA-Z-]+');

Route::get('todo/{id}', 'TodoController@show')->where('id','[0,9]+');

Route::get('todo/{id}', function ($id) {
    return view('todos.single')->with('todo', $id);
})->where('id','[0,9]+');

Route::get('todo/edit/{id}', function ($id) {
    return view('todos.single')->with('todo', $id);
})->where('id','[0,9]+');

Route::put('todo/edit/{id}', function ($id) {
    return view('todos.single')->with('todo', $id);
})->where('id','[0,9]+');



Route::post('todo/create', function () {
    return view('todos.single');
})->where('id','[0,9]+');

