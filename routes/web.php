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

Auth::routes();

Route::get('/home', 'HomeController@all')->name('home');
Route::get('/', 'HomeController@all')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('new', 'PostController@new')->name('new');
Route::post('save', 'PostController@save');
Route::get('delete', 'PostController@delete')->name('delete');
Route::get('edit', 'PostController@edit')->name('edit');
