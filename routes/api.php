<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

use App\Http\Controllers\UserController;

Route::get('user', 'UserController@index');
Route::get('user/{id}', 'UserController@Show');
Route::post('user', 'UserController@store');
Route::delete('user{id}', 'UserController@destroy');
Route::put('user{id}', 'UserController@update');


