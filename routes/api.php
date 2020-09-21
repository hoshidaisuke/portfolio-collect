<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/task/create', 'App\Http\Controllers\TaskController@store');
Route::get('/task/edit/{id}', 'App\Http\Controllers\TaskController@edit');
Route::post('/task/update/{id}', 'App\Http\Controllers\TaskController@update');
Route::delete('/task/delete/{id}', 'App\Http\Controllers\TaskController@delete');
Route::get('/tasks', 'App\Http\Controllers\TaskController@index');