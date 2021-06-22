<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AgenciaController;
use App\Http\Controllers\ContaController;
use App\Http\Controllers\InstBancariaController;
use App\Http\Controllers\TipoContaController;

/* ------------------------------------- */
Route::get('user', 'UserController@index');
Route::get('user/{id}', 'UserController@show');
Route::post('user', 'UserController@store');
Route::delete('user/{id}', 'UserController@destroy');
Route::put('user/{id}', 'UserController@update');
/* ------------------------------------- */
Route::get('agencia', 'AgenciaController@index');
Route::get('agencia/{id}', 'AgenciaController@show');
Route::post('agencia', 'AgenciaController@store');
Route::delete('agencia/{id}', 'AgenciaController@destroy');
Route::put('agencia/{id}', 'AgenciaController@update');
/* ------------------------------------- */
Route::get('conta', 'ContaController@index');
Route::get('conta/{id}', 'ContaController@show');
Route::post('conta', 'ContaController@store');
Route::delete('conta/{id}', 'ContaController@destroy');
Route::put('conta/{id}', 'ContaController@update');
/* ------------------------------------- */
Route::get('inst', 'InstBancariaController@index');
Route::get('inst/{id}', 'InstBancariaController@show');
Route::post('inst', 'InstBancariaController@store');
Route::delete('inst/{id}', 'InstBancariaController@destroy');
Route::put('inst/{id}', 'InstBancariaController@update');
/* ------------------------------------- */
Route::get('tipoconta', 'TipoContaController@index');
Route::get('tipoconta/{id}', 'TipoContaController@show');
Route::post('tipoconta', 'TipoContaController@store');
Route::delete('tipoconta/{id}', 'TipoContaController@destroy');
Route::put('tipoconta/{id}', 'TipoContaController@update');
