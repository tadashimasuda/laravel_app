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
    return view('welcome');
});
Route::get('/', 'TasksController@index');


Route::get('/top', 'TasksController@top_login');
Route::get('/mypage', 'TasksController@mypage');
Route::get('/edit/{task_id}','TasksController@edit');
Route::get('/task/create',function(){
    return view('create');
});
Route::post('task/create','TasksController@store')->name('tasks.store');
Route::post('task/update','TasksController@update')->name('tasks.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
