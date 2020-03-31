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
Route::get('/mypage', 'TasksController@mypage')->middleware('auth');
Route::get('/edit/{task_id}','TasksController@edit')->middleware('auth');
Route::get('/task/create','TasksController@create')->middleware('auth');
//Route::get('/task/create',view('/create'))->middleware('auth');

Route::post('task/create','TasksController@store')->name('tasks.store');
Route::post('task/update','TasksController@update')->name('tasks.update');
Route::put('task/achieve','TasksController@achieve')->name('tasks.achieve');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
