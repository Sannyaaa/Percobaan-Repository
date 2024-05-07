<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users',UserController::class);

// Route::get('/users', 'UserController@index');
// Route::get('/users/create', 'UserController@create');
// Route::post('/users', 'UserController@store');
// Route::get('/users/{id}/edit', 'UserController@edit');
// Route::put('/users/{id}', 'UserController@update');
// Route::delete('/users/{id}', 'UserController@destroy');
