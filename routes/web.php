<?php

use Illuminate\Support\Facades\Route;

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
    return view('posts');
});
Route::get('/{any}', function () {
    return view('posts');
})->where('any', '[^api].*$');

Route::get('/auth/twitter', 'App\Http\Controllers\Auth\SocialAuthController@getTwitterAuth');
Route::get('/auth/twitter/callback', 'App\Http\Controllers\Auth\SocialAuthController@getTwitterAuthCallback');
Route::get("/auth/twitter/logout","App\Http\Controllers\Auth\SocialAuthController@logout");

Auth::routes(['register' => false, 'login' => false]);

