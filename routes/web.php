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
    return view('zgenwebsite.index');
});
Route::group([ 'prefix' => 'panel' ], function() {
    Route::get('/', 'PostController@index');
    Route::get('/dashboard', 'PostController@index');
    Route::get('/addpost', 'PostController@addPostScreen');
    Route::post('/addpost', 'PostController@addpost');
    Route::get('/remove', 'PostController@removeGet');
    Route::get('/remove/{id}', 'PostController@removePost');
});
